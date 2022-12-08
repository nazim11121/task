<?php

namespace App\Http\Controllers\backend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Interest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::get();
        return view('backend.product.list',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $category = Category::get();
        return view('backend.product.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($files = $request->file('image')) {
            $fileName = $files->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);
            $files->move(storage_path('/app/public/uploads/product/'), $fileName);
            $validatedData['image'] = $fileName;
        }

        $product = Product::create($validatedData);
           
        return redirect()->route('product.index')->with('success', 'Data is successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::get();
        return view('backend.product.edit',compact('product','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'nullable',
            'description' => 'nullable',
        ]);

        if ($files = $request->file('image')) {
            $fileName = $files->getClientOriginalName();
            $fileName = str_replace(' ', '-', $fileName);
            $files->move(storage_path('/app/public/uploads/product/'), $fileName);
            $validatedData['image'] = $fileName;
        }

        Product::whereId($product->id)->update($validatedData);
           
        return redirect()->route('product.index')->with('warning', 'Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product = Product::findOrFail($product->id);
        $product->delete();

        return redirect()->route('product.index')->with('danger', 'Data is successfully deleted');
    }

    public function addToCompare($id)
    {
        $product = Product::findOrFail($id);
              
        $compare = session()->get('compare', []);
      
        if(isset($compare[$id])) {
            $compare[$id]['quantity']++;
        } else {
            $compare[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image,
                "category" => $product->category,
                "description" => $product->description,
                "id" => $product->id
            ];
        }
              
        session()->put('compare', $compare);
        return redirect()->route('compare')->with('success', 'Product added to compare successfully!');
    } 

    public function compare()
    {
        return view('frontend.compare');
    }  

    public function emi($id)
    {   
        $product = Product::where('id',$id)->get();
        $bank = Interest::get()->unique('bank_name');
        $period = Interest::get()->unique('period');
        return view('frontend.emi',compact('product','bank','period'));
    }   

    public function percentage($id,$id2)
    {   
        $percentage = Interest::where('bank_name',$id2)->where('period',$id)->get()->pluck('percentage')->first();
        return response()->json(['percentage' => $percentage]);
    } 
}

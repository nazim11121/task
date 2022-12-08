<?php use App\Models\Category; ?>
<!DOCTYPE html>
<style type="text/css">
    summary {
      display: block;
    }
    summary::-webkit-details-marker{
      display: none;
    }

    .p-section-faq__item:nth-of-type(n+2) {
      margin-top: 32px;
    }

    .p-faq__question {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      padding: 8px 16px;
      color: white;
      background-color: #4B7CB6;
      cursor: pointer;
    }
    .p-faq__icon {
      display: block;
      flex-shrink: 0;
      position: relative;
      width: 16px;
      transform-origin: center;
    }
    .p-faq__icon::after {
      content: "";
      position: absolute;
      display: block;
      width: 16px;
      height: 16px;
      transition: transform .3s;
      transform: translateY(-80%) rotate(45deg);
      border-right: 2px solid white;
      border-bottom: 2px solid white;
    }

    .is-opened .p-faq__icon::after {
      transform: translateY(-25%) rotate(-135deg);
    }

    .p-faq__answer {
      overflow: hidden;
    }

    .p-faq__answer-inner {
      padding: 16px 32px;
      border: 2px solid #4B7CB6;
      border-top: none;
      border-bottom-right-radius: 8px;
      border-bottom-left-radius: 8px;
    }

    .l-inner {
      margin: 0 auto;
      max-width: 648px;
      width: 100%;
      padding: 24px;
    }

    * {
      box-sizing: border-box;
    }

    p {
      margin: 0;
      padding: 0;
    }

    @media only screen and (min-width: 320px) { 
        #buy {
            margin-left: 146px;
        }
    }

    @media only screen and (min-width: 992px) { 
        #buy {
            margin-left: 60px;
        }
    }
</style>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>N&N Store</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
    <link rel="icon" type="image/x-icon" href="{{asset('assets/frontend/img/logos.png')}}" />
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12float-right">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li><a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="#"><img src="{{asset('assets/frontend/img/logos.png')}}"></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Checkout</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <h1 class="text-center">EMI</h1>
                        @foreach($product as $productDetails)
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <img class="" src="{{ asset('storage/uploads/product') }}/{{$productDetails->image }}" >
                                    <!-- <h3 class="text-center">Maja Miletich</h3> -->
                                </div>
                                <div class="col-md-4" style="margin-top: 88px;width:200px">
                                    <h4>{{$productDetails->name }}</h4>
                                    <h4>Price: <strong>৳{{$productDetails->price }}</strong></h4>
                                    <input type="hidden" name="price" id="price" value="{{$productDetails->price}}">
                                </div>
                            </div>
                        @endforeach    
                    </div><br>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Bank</label>
                        <div class="col-sm-10">
                            <select name="bank" id="bank" class="form-control custom-select" required="">
                              <option value="">Select one..</option>
                              @foreach($bank as $value)
                                <option value="{{ $value->bank_name }}">{{ $value->bank_name }}</option>
                              @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Select Period</label>
                        <div class="col-sm-10">
                          <select name="period" id="period" class="form-control custom-select" required="">
                            <option value="">Select one..</option>
                            @foreach($period as $value)
                              <option value="{{ $value->period }}">{{ $value->period }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Advance</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="advance" name="advance">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary me-2 calculate">Calculate</button>
                        </div>
                      </div>
                <!-- </div> -->
              <div id="details" style="display: none">  
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Monthly Installment</label>
                    <div class="col-sm-10">
                        <span id="installment"></span>
                    </div>
                </div>    
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Interest Rate</label>
                    <div class="col-sm-10">
                        <span id="interest-rate"></span> %
                    </div>
                </div>
                <div class="form-group row">    
                    <label class="col-sm-2 col-form-label">EMI Period</label>
                    <div class="col-sm-10">
                        <span id="emi-period"></span> months
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>

    <!-- End product widget area -->
    
    <div class="footer-top-area">
        <!-- <div class="zigzag-bottom"></div> -->
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>N&N Store</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">contact</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2022 , Development & Maintenance by N&N Cor. All Rights Reserved. 
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="{{asset('assets/frontend/jquery.min.js')}}"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="{{asset('assets/frontend/bootstrap-3.2.0.min.js')}}"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{asset('assets/frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/frontend/js/jquery.sticky.js')}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{asset('assets/frontend/js/jquery.easing.1.3.min.js')}}"></script>
    
    <!-- Main Script -->
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('assets/frontend/js/bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/frontend/js/script.slider.js')}}"></script>
  </body>
</html>
<script type="text/javascript">
    const js_details = ".js-faq-details";
    const js_summary = ".js-faq-question";
    const js_content = ".js-faq-answer";

    document.addEventListener("DOMContentLoaded", () => {
      setUpAccordion();
    });

    const setUpAccordion = () => {
      const details = document.querySelectorAll(js_details);
      const RUNNING_VALUE = "running"; 
      const IS_OPENED_CLASS = "is-opened"; 

      details.forEach((element) => {
        const summary = element.querySelector(js_summary);
        const content = element.querySelector(js_content);

        summary.addEventListener("click", (event) => {
  
          event.preventDefault();

          if (element.dataset.animStatus === RUNNING_VALUE) {
            return;
          }

          if (element.open) {

            element.classList.toggle(IS_OPENED_CLASS);

            const closingAnim = content.animate(closingAnimKeyframes(content), animTiming);

            element.dataset.animStatus = RUNNING_VALUE;


            closingAnim.onfinish = () => {
    
              element.removeAttribute("open");
         
              element.dataset.animStatus = "";
            };
          } else {

            element.setAttribute("open", "true");

            element.classList.toggle(IS_OPENED_CLASS);


            const openingAnim = content.animate(openingAnimKeyframes(content), animTiming);

            element.dataset.animStatus = RUNNING_VALUE;

            openingAnim.onfinish = () => {
              element.dataset.animStatus = "";
            };
          }
        });
      });
    }

    const animTiming = {
      duration: 200,
      easing: "ease-out"
    };

    const closingAnimKeyframes = (content) => [
      {
        height: content.offsetHeight + 'px', 
        opacity: 1,
      }, {
        height: 0,
        opacity: 0,
      }
    ];

    const openingAnimKeyframes = (content) => [
      {
        height: 0,
        opacity: 0,
      }, {
        height: content.offsetHeight + 'px',
        opacity: 1,
      }
    ];
</script>

<script type="text/javascript">

  $(document).ready(function () {
    $(".calculate").click(function(){

        var bank = $('#bank').find(":selected").val();
        var id = $('#period').find(":selected").val();
        var advance = $('#advance').val();

        $.ajax({

          url:"percentage/"+id+"/"+bank,

          type:"GET",

          data:{'id':id},

          success:function (data) {
              // console.log(data);
              $("#details").css("display","");
              var percentage = data.percentage;
              var price = $('#price').val()-advance;
              var p = ((price/100)*percentage)*id;
              var t = parseFloat(parseFloat(price)+parseFloat(p))/parseFloat(id);
              $("#installment").html(t);
              $("#interest-rate").html(data.percentage);
              $("#emi-period").html(id);
            }
        })
    })    
});
</script>

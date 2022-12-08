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
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
                    @foreach($slider as $sliders)
                        <li>
                            <img src="{{ asset('storage/uploads/slider') }}/{{$sliders->image }}" alt="Slide">
                            <div class="caption-group">
                                <h2 class="caption title">
                                    <span class="primary"><strong>{{$sliders->slider_title }}</strong></span>
                                </h2>
                                <h4 class="caption subtitle">{{$sliders->description }}</h4>
                                <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                            </div>
                        </li>
                    @endforeach
				</ul>
			</div>
			<!-- ./Slider -->
    </div> 
    <!-- End slider area -->
    
    <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product"><br>
                        <h2 class="section-title">All Products</h2> 
                        <a href="{{route('compare')}}" class="flex items-center">
                            <svg class="compare-button active" width="30" height="27" viewBox="0 0 223 183" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path class="boncompare-icon" d="M52.4319 16.1915H172" stroke="#3A3A3A" stroke-width="12" stroke-linecap="round"></path>
                                    <path class="boncompare-icon" d="M172.807 18L217 121" stroke="#3A3A3A" stroke-width="12" stroke-linecap="round"></path>
                                    <path class="boncompare-icon" d="M171.651 17L127.465 119.987" stroke="#3A3A3A" stroke-width="12" stroke-linecap="round"></path>
                                    <path class="boncompare-icon round" d="M216.961 122.256C216.419 126.713 215.379 131.073 213.865 135.229C211.536 141.624 208.138 147.389 203.898 152.211C199.659 157.032 194.669 160.808 189.236 163.367C183.807 165.925 178.02 167.227 172.2 167.227C166.38 167.227 160.593 165.925 155.164 163.367C149.731 160.808 144.741 157.032 140.502 152.211C136.262 147.389 132.864 141.624 130.535 135.229C129.021 131.073 127.981 126.713 127.439 122.256C127.406 121.981 127.474 121.749 127.706 121.508C127.969 121.235 128.422 121 129 121L172.2 121H215.4C215.978 121 216.431 121.235 216.694 121.508C216.926 121.749 216.994 121.981 216.961 122.256Z" stroke="#3A3A3A" stroke-width="12"></path>
                                    <path class="boncompare-icon" d="M51.8073 18L96 121" stroke="#3A3A3A" stroke-width="12" stroke-linecap="round"></path>
                                    <path class="boncompare-icon" d="M50.6508 17L6.46463 119.987" stroke="#3A3A3A" stroke-width="12" stroke-linecap="round"></path>
                                    <path class="boncompare-icon round" d="M95.9607 122.256C95.4185 126.713 94.3786 131.073 92.8649 135.229C90.5358 141.624 87.1381 147.389 82.898 152.211C78.6593 157.032 73.6693 160.808 68.2365 163.367C62.8068 165.925 57.0205 167.227 51.2 167.227C45.3795 167.227 39.5932 165.925 34.1635 163.367C28.7307 160.808 23.7407 157.032 19.502 152.211C15.2619 147.389 11.8642 141.624 9.53507 135.229C8.02137 131.073 6.98149 126.713 6.43925 122.256C6.40578 121.981 6.47406 121.749 6.70608 121.508C6.96903 121.235 7.42165 121 8 121L51.2 121H94.4C94.9783 121 95.431 121.235 95.6939 121.508C95.9259 121.749 95.9942 121.981 95.9607 122.256Z" stroke="#3A3A3A" stroke-width="12"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="223" height="183" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg><span class="badge badge-pill badge-danger">{{ count((array) session('compare')) }}</span>
                            
                        </a>
                        <div class="product-carousel">
                            @foreach($product as $products)
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="{{ asset('storage/uploads/product') }}/{{$products->image }}" alt="">
                                        <div class="product-hover">
                                            <!-- <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a> -->
                                        </div>
                                    </div>
                                    
                                    <h2><a href="single-product.html">{{$products->name}}</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>৳{{$products->price}}</ins>
                                    </div> <br>
                                     <div class="mt-4">
                                       <a href="{{ route('add.to.compare', $products->id) }}" id="compare" class="btn btn-primary compare"><i class="fa fa-link"></i> Compare</a>  
                                       <input type="hidden" name="category" value="{{$products->category}}">
                                       <input type="hidden" name="description" value="{{$products->description}}">
                                       <input type="hidden" name="id" value="{{$products->id}}">
                                    </div>                  
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <h2>FAQ</h2>
          <div class="row"> 
            <section class="p-section-faq">
              <div class="l-inner"  style="margin: 0px">
                @foreach($faq as $faqs)
                    <details class="p-section-faq__item p-faq js-faq-details">
                      <summary class="p-faq__question js-faq-question">{{$faqs->faq_title}}<span class="p-faq__icon"></span></summary>
                      <div class="p-faq__answer js-faq-answer">
                        <p class="p-faq__answer-inner">{{$faqs->description}}</p>
                      </div>
                    </details>
                @endforeach
              </div>
            </section>
        </div></div> 
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

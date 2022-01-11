<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>How to order</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/bootstrap.min.css')}}"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/nouislider.min.css')}}"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="{{asset('assets/frontend/css/font-awesome.min.css')}}">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}"/>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
			.freesource{
				padding:15px;
			}
            .terms{
                
                text-align:center;
                
            }
            .para{
                letter-spacing: 2px;
                text-indent: 50px;
                font-family: Arial, Helvetica, sans-serif;
                margin-top:50px;
                font-weight:5px;
            }
           
		</style>
    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i>+91 9361145452</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i>info@mentorthesis.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Kuzhithurai-629163</a></li>
					</ul>
					<ul class="header-links pull-right">
						
						@if(Route::has('login'))
						   @Auth
						      @if(Auth::user()->role=='admin')    
						      <li><a href="#"><i class="fa fa-user-o"></i>{{Auth::user()->name}}</a></li>
							  <li><a href="/dashboard"><i class="fa fa-user-o"></i>Dashboard</a></li>
							  <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
							  @else
							  <li><a href="#"><i class="fa fa-user-o"></i>{{Auth::user()->name}}</a></li>
							  <li><a href="#"><i class="fa fa-user-o"></i>Dashboard</a></li>
							  <li><a href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
							  @endif 
						   @else
						   <li><a href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
						   <li><a href="/register"><i class="fa fa-user-o"></i> Register</a></li>
						   @endif
						   

						@endif
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
					
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="/" class="logo ">
									<h2 class="freesource" style="color:red">freesource<span style="color:rgb(230, 220, 220)">.in</span></h2>

									{{-- <img src="./img/logo.png" alt=""> --}}
								</a>
							</div>
						</div> 
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form action="/search" method="post">
									@csrf
									<select name="opt" class="input-select">
										<option value="0">All Categories</option>
										<option value="1">MATLAB</option>
										<option value="1">JAVA</option>
										<option value="1">PYTHON</option>
									</select>
									<input type="text" name="ser" class="input" placeholder="Search here">
									<button class="search-btn" type="submit">Search</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								@Auth
								<div>
									<a href="/cart_view">
										<i class="fa fa-shopping-cart"></i>
										<span>Cart</span>
										
									</a>
								</div>
								@else
								<div>
									<a href="/login">
										<i class="fa fa-shopping-cart"></i>
										<span>Cart</span>
										
									</a>
								</div>
								@endif
								<!-- /Wishlist -->

							
								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="/">Home</a></li>
						
						<li><a href="/matlab">Matlab</a></li>
						<li><a href="/java">Java</a></li>
						<li><a href="/python">python</a></li>
						<li><a href="/contact_us">Contact Us</a></li>

					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


     
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
					
							<li class="active"><a href="#">privacy policy</a></li>
		
						</ul>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->






<div class="section">

    <div class="terms">
        <h1>How to Order</h1>
    </div>

    <div class="container para ">
        <div class="row"> 
			<h3>How to Order?</h3>
1. Search the Required source code from the freesource website. Go to the link https://freesource.in/<br>
2. Select the source code as per your requirement and add to the cart.<br>
3.  Click the cart button Right top of the site and go to the checkout page<br>
4.  Apply coupon code for discounts. Once discount made the final price of your purchase will be displayed in the checkout page.<br>
5. Select the payment method Paypal, Credit or Debit card via paypal.<br>
6. After you made the payment you will get the payment confirmation via email.<br>
7. Your requested source code will be delivered within 24 hours via email.<br>

		<h5>NOTES:</h5>
 ✔ This product is a digital copy, no physical disc will be delivered.<br>
✔ The Source code will be sent within 24 h so please be patient if we are offline.

    </div>
</div>
</div>
         




		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Kuzhithurai-629163</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+91 9361145452</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>info@mentorthesis.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Matlab</a></li>
									<li><a href="#">Java</a></li>
									<li><a href="#">Python</a></li>

								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="/how_to_order">How to Order</a></li>
									<li><a href="/contact_us">Contact Us</a></li>
									<li><a href="/privacy_policy">Privacy Policy</a></li>
									<li><a href="/request_for_code">Request for Code</a></li>
									<li><a href="/terms_and_condition">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<ul class="footer-payments">
								<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
								<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
								<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
							</ul>
							<span class="copyright">
								 <a target="_blank" href="#">@ 2021 OpenSource. All rights reserved</a>
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="{{asset('assets/frontend/js/jquery.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/nouislider.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/jquery.zoom.min.js')}}"></script>
		<script src="{{asset('assets/frontend/js/main.js')}}"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
		@if(session()->has('success'))
		<script>
			toastr.success("{!! session()->get('success')!!}");
		</script>	   

	 @endif
	</body>
</html>

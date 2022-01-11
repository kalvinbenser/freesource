<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Privacy Policy</title>

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
        <h1>Privacy Policy</h1>
    </div>

    <div class="container para ">
        <div class="row">
           <p> We have an independent marketplace for selling MATLAB, Java, Python, NS2, NS3 codes and providing Coding services. Our unique website address is: https://freesource.in.</p>
           <p> If you leave a comment on our site, you may opt-in to saving your name, email address and website in cookies. These are for your convenience so you do not have to fill your details again when you leave another comment. These cookies will last for one year.</p>
            <p>If you have an account and you log in to this site, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>
            <p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select “Remember Me”, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>
            <p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>
            <p>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>
            <p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>
           <p> If you leave a comment, the comment and its metadata are retained indefinitely. Therefore, we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>
           <p> For users who register on our website (if any), we also store the personal information they provide in their user profile. All users can view, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can view and edit that information.</p>
           <p> The paying process takes place on the service provider’s site (for example: on PayPal site), so we do not save any information about your accounts or credit-card credentials, your payment process is 100% secure, where we are using a paid secure communication protocol HTTPS.</p>
           <p> We collect daily usual information about from our site visitors include: the pages how many times you visited, and how many pages you visited. These statistics are collected to improve our site and we keep it in save. Note that we do not collect direct information about you neither during your visits and nor during your payments, we have more interested in just what you visited and what you paid.</p>
           <p> When you register to our site, we have saved the information you provide to us, (Email, First Name and Surname), this information is kept in our database to help us build your purchase history and mainly give you the right to access that history. If you do not have an account you won’t be able to access your profile and purchase history. Your email should be true as you will receive a confirmation email and after you make a purchase you will receive email includes your purchase links.</p>
            <p>We might modify this Privacy Policy in the future, and in any modification, we hope that you accept it. So please refer periodically to this page and read it carefully. When you use the Freesource services implies that you are accepting this Privacy Policy. </p>
            
        
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
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
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

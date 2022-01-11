<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Terms and Condition</title>

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
					
							<li class="active"><a href="#">Terms and Condition</a></li>
		
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
        <h1>Terms and Condition</h1>
    </div>

    <div class="container para ">
        <div class="row">
        <p >
            Welcome to the website of freesource.in. The freesource.in is a full source code Market place. You can buy a code outright with full source code license by this site. The freesource.in team builds high-scale MATLAB code. We have premise of skilled developers experienced to handle hundreds of millions of users. We approach every code with a desire to solve problems and create awesome experiences. Engage a team of software engineers for your project and track their progress on freesource.in. Your results will be amazing. We are responsible for the success of your project. Above all, we offer you giving our proven code products with unimaginable low prices. The freesource.in provides the services subject to the following conditions.</p>
             <b> By using freesource Services, you agree to these conditions. Please check any information you find here for accuracy and completeness.</b>
            <p>We offer a wide range of Codes, and sometimes additional terms may apply. When you use any freesource Service, you are subject to the guidelines, terms and conditions applicable to that Service. If these Terms of Use violate the Terms of Service, those Terms of Service will be regulated.</p>
           <h4> PRIVACY</h4>
           <p> We use fair and befitting technical and administrative protection to protect your data from misapplication / misappropriation or embezzlement. All data you provide will be saved on our server without any involvement with any third party companies. We guarantee to protect the personal information we receive, gather and store, through password and other means with your right of the future use of the Codes you will buy. Please make sure you have an account before you start using our site, you can give it to us even without any registration.</p> 
            <h4>ELECTRONIC COMMUNICATIONS</h4>
           <p> You may contact us electronically when you use freesource Services, or send us e-mails, text messages and other communications from your desktop or mobile device. You consent to receive communications from us electronically, such as e-mails, texts, mobile push notices, or notices and messages on this site or through the other freesource Services, and you can retain copies of these communications for your records. You agree that all agreements, notices, disclosures, and other communications that we provide to you electronically satisfy any legal requirement that such communications be in writing.</p>
            <h4>COPYRIGHT</h4>
             <p>All content included or available in freesource.in Service, such as text, graphics, logos, button icons, images, audio clips, digital downloads, data packages, and software is the property of freesource.in or its content suppliers and protected by international copyright laws. The compilation of all content available in any freesource Service is the exclusive property of freesource.in and you can use this not only for commercial but also for personal use.</p>
            <h4>LICENSE AND ACCESS</h4>
            <p>In consideration of you agreeing to abide by the terms of this license and subject to your compliance with the terms of this license, freesource.in grants you a non-exclusive, non-transferable, non sub-licensable license to access and use the freesource services for the following purposes and in the following manner. </p>
            <b>I).</b> You may not resell, charge for, sub-license, rent, lease, loan or distribute any freesource service without our prior written consent; We reserve the right to withdraw any such consent(or part thereof) for any reason and without notice and to demand that you immediately cease any activity in respect of which permission is withdrawn.</br>
            <b>II).</b>  You may not translate, adapt, vary, modify, alter, create derivative works based upon, or integrate any other computer programs, with the freesource service in whole or in part.</br>
            <b>III).</b> You may not use the freesource service to engage in or allow others to engage in any illegal activity.<br> 
            <b>IV).</b> You may not decompile, disassemble, reverse engineer or otherwise attempt to discover the source code of the freesource.in Service except to the extent that you may be expressly permitted to reverse engineer or decompile under applicable law.</br>
           <b> V).</b> You are not permitted to grant any sub-license of the freesource Service. </br>
            <b>VI).</b> You may not use the freesource Service to sell or deliver any other freesource service to a third party or other commercial business.</br>
           <b> VII).</b> You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of freesource without express written consent.</br>
           <b> VIII).</b>  You may use the freesource Services only as permitted by law. The licenses granted by freesource terminate if you do not comply with these Conditions of Use or any terms of service.</br>
            <h4>YOUR ACCOUNT</h4>
            <p>You may need your own freesource.in account to use certain freesource.in Services and you will need to sign in to the account and have the appropriate payment method associated with it. If we have trouble charging your chosen payment method, we may charge any other valid payment method associated with your account. You are responsible for maintaining the confidentiality of your account and password and for restricting access to your account, and you agree to be responsible for all activities that occur under your account or password.</p>
            <h4>REVIEWS, COMMENTS, COMMUNICATIONS, AND OTHER CONTENT</h4>
            <p>You may post reviews, comments, photos, videos, and other content and communications; and submit suggestions, ideas, comments, questions, or other information, so long as the content is not illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights (including publicity rights), or otherwise injurious to third parties or objectionable, and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of “spam” or unsolicited commercial electronic messages. You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of a card or other content. The freesource.in reserves the right (but not the obligation) to remove or edit such content, but does not regularly review posted content.</p>
            <p>If you do post content or submit material, and unless we indicate otherwise, you grant freesource.in a nonexclusive, royalty-free, perpetual, irrevocable, and fully sub-licensable right to use, reproduce, modify, adapt, publish, perform, translate, create derivative works from, distribute, and display such content throughout the world in any media. You grant freesource.in and sub-licensees the right to use the name that you submit in connection with such content, if they choose. You represent and warrant that you own or otherwise control all of the rights to the content that you post; that the content is accurate; that use of the content you supply does not violate this policy and will not cause injury to any person or entity; and that you will indemnify freesource.in for all claims resulting from content you supply. The freesource.in has the right but not the obligation to monitor and edit or remove any activity or content. The freesource.in takes no responsibility and assumes no liability for any content posted by you or any third party.</p>
            <h4>CHANGES AND REFUNDS</h4>
            <p>The freesource.in does not accept any refund, but humans make mistakes and we accept accepting replacement items as we believe they may have purchased an undesirable item, so it may be replaced within two days after purchase. But we cannot repay it. Note that you can change your item just once so be careful with your options.</p>
            <h4>PRODUCT DESCRIPTIONS</h4>
            <p>The freesource.in attempts to be as accurate as possible. However, freesource.in guarantees that product descriptions or other content of any freesource Service is precise, perfect, reliable, current, or error-free. If a product offered by freesource.in itself is not as described, you can change it under the terms of CHANGES AND REFUNDS.</p>
            <h4>PRICING</h4>
            <p>The clear prices of each product are shown below, and you can find several price choices that refer to different product types of the same product, for an instance (.m file, Simulink file, GUI file and others), you can purchase anything by selecting the box beside to it.
            Clicking the “Buy” or “purchase” button will not lead you directly to the payment window, but will add the item to your cart. We do not normally charge your credit card until a digital product is available to you.</P>
            <h4>APP PERMISSIONS</h4>
            <p>When you install an app from freesource.in through mobile and you may grant certain permissions to us for your device. You can control the skills or information that the app can access - called permissions. For example, an app may need permission to view your device contacts or location. After installing the app on your device you can control which permissions the app can access.</p>
            <h4>OTHER BUSINESSES</h4>
            <p>Parties other than freesource.in operate stores, provide services or software, or sell product lines through the freesource Services. In addition, we provide links to affiliates and sites of some other business. If you purchase any of the products or services offered by these businesses or individuals, you are purchasing directly from those third parties, not from freesource.in. We are not responsible for research or evaluation, and we do not guarantee the provision of these businesses or individuals (including the content of their Web sites). The freesource.in assumes no responsibility or liability for the actions, product, and content of all these and any other third parties. You should carefully review their privacy statements and other terms of use.</p>
            <h4>DISCLAIMER OF WARRANTIES AND LIMITATION OF LIABILITY</h4>
            <p>THE FREESOURCE SERVICES AND ALL INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) AND OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE FREESOURCE SERVICES ARE PROVIDED BY FREESOURCE.IN. THE FREESOURCE.IN MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE FREESOURCE SERVICES, OR THE INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE FREESOURCE SERVICES, UNLESS OTHERWISE SPECIFIED IN WRITING. YOU EXPRESSLY AGREE THAT YOUR USE OF THE FREESOURCE SERVICES IS AT YOUR SOLE RISK.</p>
           <p> TO THE FULL EXTENT PERMISSIBLE BY LAW, FREESOURCE.IN DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. FREESOURCE.IN DOES NOT WARRANT THAT THE FREESOURCE SERVICES, INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE FREESOURCE SERVICES, FREESOURCE’S SERVERS OR ELECTRONIC COMMUNICATIONS SENT FROM FREESOURCE.IN ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. TO THE FULL EXTENT PERMISSIBLE BY LAW, FREESOURCE.IN WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF ANY FREESOURCE SERVICE, OR FROM ANY INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH ANY FREESOURCE SERVICE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES, UNLESS OTHERWISE SPECIFIED IN WRITING.</p>
            <h4>APPLICABLE LAW</h4>
            <p>By using any freesource Service, you agree that the Federal Arbitration Act, applicable federal law, and the laws of ethical internet use, without regard to principles of conflict of laws, will govern these Conditions of Use and any dispute of any sort that might arise between you and freesource.in. We conduct our operations with honesty, integrity and openness, and with respect for the human rights and interests of our employees. We respect those who are similarly legitimate. Transparency in all our activities ensures that partners trust what we do.</p>
            <h4>SITE POLICIES, MODIFICATION, AND SEVERABILITY</h4>
            <p>Please review all our policies, posted on this site. These policies also govern your use of freesource.in Services. We reserve the right to make changes to our site, policies, Service Terms, and these Conditions of Use at any time. If any of these conditions shall be deemed invalid, void, or for any reason unenforceable, that condition shall be deemed severable and shall not affect the validity and enforceability of any remaining condition.</p>
            <h4>ADDITIONAL freesource.in SOFTWARE TERMS</h4>
            <p>The following terms (“Software Terms”) apply to any software (including any updates or upgrades to the software) and any related documentation that we may make available to you regarding freesource.in Services (the” freesource.in Software”).</p>
             <ul>
           <li><h5> Use of the Buy Software.</h5> You may use the freesource.in Software only for the purposes that enable you to use the freesource Services as provided by the freesource.in, and are permitted by these terms of Use and any terms of service. You may not link any part of the freesource.in Software to other programs or compile or otherwise copy any part of it,(except for the use of the rights granted in this section) modify, create derivative works of, distribute, assign any rights to, or license the freesource.in Software in whole or in part. All software used in any freesource Service is the property of freesource.in or its software suppliers and is protected by international copyright laws.</li>
           <li>
           <h5>Use of Third Party Services.</h5> When you use the freesource.in Software, you may also be using the services of one or more third parties, such as a wireless carrier or a mobile software provider. Your use of these third party services may be subject to the separate policies, terms of use, and fees of these third parties.</li>
           <li>
               <h5>
            No Reverse Engineering.</h5> You may not reverse engineer, in whole or in part modify, distort, disassemble or neglect any security associated with freesource software.
            We may provide automatic or manual updates to freesource.in Software without notifying you at any time.
            In case of any conflict between these Conditions of Use and any other freesource.in or any other third-party terms applicable to any part of freesource.in Software, such as open-source license terms, such other terms restrict part of the freesource.in Software and to the extent of the conflict.
             </li>
             <ul>

        
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

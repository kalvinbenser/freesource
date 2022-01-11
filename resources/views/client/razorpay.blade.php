

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>freesource</title>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>

  <section>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
       <a class="navbar-brand " href="/">Freesource</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/java">Java</a>
                <a class="dropdown-item" href="/python">Python</a>
                <a class="dropdown-item" href="/matlab">Matlab</a>

              </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contact_us">Contact</a>
              </li>
              @Auth
              <li class="nav-item">
                <a class="nav-link" href="/cart">Cart </a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="/login">Cart</a>
              </li>
              @endif




          @if(Route::has('login'))
          @Auth
           @if(Auth::user()->role=='admin')
          <li class="nav-item">
           <a class="nav-link" href="/dashboard">Dashboard</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/logout">Logout</a>
         </li>
          @else
          <li class="nav-item">
           <a class="nav-link" href="/user_dashboard">Dashboard</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/logout">Logout</a>
         </li>
          @endif
         @else
         <li class="nav-item">
           <a class="nav-link" href="/login">Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="/register">Register</a>
         </li>

         @endif
       @endif



          </ul>
          <form class="form-inline my-2 my-lg-0 " action="/search" method="post">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="ser" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
</section>


      <div class="container mb-5 mt-5">
          <form action="/place_order" method="post">
            @csrf
        <div class="row">


          <div class="col-md-7">
            <div class="card">
              <div class="card-header">
               <h4>Basic Details</h4>
              </div>
                <div class="card-body">
             <div class="row">
               <div class="col-md-6">
                 <label for="fname">First Name</label>
               <input type="text" id="fname" name="fname" value="{{Auth::user()->fname}}" class="form-control fname" placeholder="Ender Your First Name">
                <span id="fname_error" class="text-danger"></span>
               </div>
                <div class="col-md-6">
                  <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" value="{{Auth::user()->lname}}"  class="form-control lname" placeholder="Ender Your Last Name">
                     <span id="lname_error" class="text-danger"></span>
                </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <label for="email">Email</label>
               <input type="email" id="email" name="email" value="{{Auth::user()->email}}" class="form-control email" placeholder="Ender Your Email">
                    <span id="email_error" class="text-danger"></span>
               </div>
                <div class="col-md-6">
                  <label for="phone">Phone Number</label>
                <input type="number" id="phone" name="phone" value="{{Auth::user()->phone}}" class="form-control phone" placeholder="Ender Your Phone Number">
                       <span id="phone_error" class="text-danger"></span>
                </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <label for="address1">address1</label>
               <input type="textbox" id="address1" name="address1" value="{{Auth::user()->address1}}" class="form-control address1" placeholder="Ender Your Address1">
                      <span id="address1_error" class="text-danger"></span>
               </div>
                <div class="col-md-6">
                  <label for="address2">Address2</label>
                <input type="textbox" id="address2" name="address2" value="{{Auth::user()->address2}}" class="form-control address2" placeholder="Ender Your  Address2">
                       <span id="address2_error" class="text-danger"></span>
                </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <label for="city">City</label>
               <input type="text" id="city" name="city"  value="{{Auth::user()->city}}" class="form-control city" placeholder="Ender Your City">
                <span id="city_error" class="text-danger"></span>
               </div>
                <div class="col-md-6">
                  <label for="state">State</label>
                <input type="text" id="state" name="state" value="{{Auth::user()->state}}"  class="form-control state" placeholder="Ender Your State">
                   <span id="state_error" class="text-danger"></span>
                </div>
             </div>
             <div class="row">
               <div class="col-md-6">
                 <label for="country">Country</label>
               <input type="text" id="country" name="country"  value="{{Auth::user()->country}}" class="form-control country" placeholder="Ender Your Country">
                   <span id="country_error" class="text-danger"></span>
               </div>
                <div class="col-md-6">
                  <label for="pincode">Pincode</label>
                <input type="number" id="pincode" name="pincode"  value="{{Auth::user()->pincode}}" class="form-control pincode" placeholder="Ender Your  Pincode">
                   <span id="pincode_error" class="text-danger"></span>
                </div>

             </div>
           </div>
          </div>
            </div>
            </div>
            </div>





    <div class="text-center"><a href="/" class="btn btn-warning btn-sm" >return to home</a></div>


  <!-- Footer -->
<footer class="text-center text-lg-start bg-dark text-white">
  <!-- Section: Social media -->
  {{-- <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media --> --}}

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5 p-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h4 class=" fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Freesource
          </h5>
          {{-- <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p> --}}
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Categories
          </h6>
          <p>
            <a href="/matlab" class="text-reset">Matlab</a>
          </p>
          <p>
            <a href="/java" class="text-reset">Java</a>
          </p>
          <p>
            <a href="/python" class="text-reset">Python</a>
          </p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="/how_to_order" class="text-reset">How to Order</a>
          </p>

          <p>
            <a href="/privacy_policy" class="text-reset">Privacy Policy</a>
          </p>
          <p>
            <a href="/request_for_code" class="text-reset">Request for Code</a>
          </p>
          <p>
            <a href="/terms_and_condition" class="text-reset">Terms & Condition</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        {{-- <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div> --}}
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="/">Freesource</a>
  </div>
  <!-- Copyright -->
</footer>

</body>
</html>

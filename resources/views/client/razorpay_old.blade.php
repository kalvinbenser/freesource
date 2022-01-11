


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



    <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <div class="card card-default">
                            <div class="card-header text-center ">
                                Ready for Payment
                            </div>

                            <div class="card-body text-center">

                                <div class="form-group mt-1 mb-1">
                                    <input type="hidden" name="amount" class="form-control amount" value="{{$payment->price}}" placeholder="Enter Amount">
                                     <img src="{{asset('images/products/'.$payment->image)}}" style="height:300px;width:300px"/>
                                      <h5>{{$payment->title}}</h5>
                                    </div>

                                <button id="rzp-button1" class="btn btn-info  ">Razorpay (${{$payment->price}} )</button>

                                <div id="paypal-button-container"  class="mt-5"></div>

                              </div>


                        </div>

                    </div>
                </div>
            </div>
        </main>
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
<!-- Footer -->
   <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = $('.amount').val();
            var total_amount = amount * 100;
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                "currency": "USD",
                "name": "Freesource",
                // "description": "Test Transaction",
                // "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
                "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('paymentRazor') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount},
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut();
                            });
                            $('.amount').val('');
                        }
                    });
                },
                // "prefill": {
                //     "name": "kalvin",
                //     "email": "kalvinbenser1@gmail.com",
                //     "contact": "8681910095"
                // },
                "notes": {
                    "address": "test test"
                },
                "theme": {
                    "color": "blue"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();



        });
    </script>

<script src="https://www.paypal.com/sdk/js?client-id=AeQbuDA-9wVNvJEeJDbisNZam2F0xmX9B7c-eJfA6Vyrvvjnu-yEL9FijWd4wsgxO-t8j73aA81-a156"></script>

<script>
  paypal.Buttons({

    // Sets up the transaction when a payment button is clicked
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '{{$payment->price}}' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
          }
        }]
      });
    },

    // Finalize the transaction after payer approval
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(orderData) {
        // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            var transaction = orderData.purchase_units[0].payments.captures[0];
            alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\n');









        // When ready to go live, remove the alert and show a success message within this page. For example:
        // var element = document.getElementById('paypal-button-container');
        // element.innerHTML = '';
        // element.innerHTML = '<h3>Thank you for your payment!</h3>';
        // Or go to another URL:  actions.redirect('thank_you.html');
      });
    }
  }).render('#paypal-button-container');

</script>
</body>
</html>

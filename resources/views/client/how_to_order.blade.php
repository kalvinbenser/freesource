@extends('layouts.frontend')
@section('styles')
  <style>
    .bg-tomoto{
        background-color:crimson;

    }
    .navbar-tomoto{
      color:rgb(245, 239, 239);
    }


    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
  }

  .price {
  color: grey;
  font-size: 22px;
  }

  .card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
  }

  .card button:hover {
  opacity: 0.7;
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

@endsection
@section('content')

        <section class="mt-5 mb-5">





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





        </section>

@endsection
@section('scripts')

@endsection

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





        </section>


@endsection
@section('scripts')

@endsection

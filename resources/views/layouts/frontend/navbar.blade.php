<section>
    <nav class="navbar navbar-custom navbar-expand-lg py-1 navbar-dark " style="background-color:black;">
       <a class="navbar-brand " href="/" ><span style=" font-size:2rem">Freesource</span></a>

        <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-align-justify"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
              <a class="nav-link" href="/" style=" font-size:1.1rem; ">Home</a>
            </li>

            <li class="nav-item dropdown ">
              <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" style=" font-size:1.1rem" role="button" data-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/java">Java</a>
                <a class="dropdown-item" href="/python">Python</a>
                <a class="dropdown-item" href="/matlab">Matlab</a>

              </div>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ (request()->is('contact_us')) ? 'active' : '' }}" href="/contact_us" style=" font-size:1.1rem" >Contact</a>
              </li>
              @Auth
              <li class="nav-item {{ (request()->is('cart')) ? 'active' : '' }}">
                <a class="nav-link" href="/cart" style="font-size:1.1rem" >Cart </a>
              </li>
              @else
              <li class="nav-item">
                <a class="nav-link" href="/login" style=" font-size:1.1rem" >Cart</a>
              </li>
              @endif



          @if(Route::has('login'))
          @Auth
           @if(Auth::user()->role=='admin')
          <li class="nav-item">
           <a class="nav-link" href="/dashboard" style=" font-size:1.1rem" >Dashboard</a>
         </li>
          @else
          <li class="nav-item">
           <a class="nav-link" href="/user_dashboard" style=" font-size:1.1rem" >Dashboard</a>
         </li>

          @endif
         @else
         <li class="nav-item {{ (request()->is('login')) ? 'active' : '' }}">
           <a class="nav-link" href="/login" style=" font-size:1.1rem" >Login</a>
         </li>
         <li class="nav-item {{ (request()->is('register')) ? 'active' : '' }}">
           <a class="nav-link" href="/register" style=" font-size:1.1rem" >Register</a>
         </li>

         @endif
       @endif

       @Auth
       <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false" style="font-size:1.1rem" >
           {{Auth::user()->name}}
         </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
           <a class="dropdown-item" href="#">Profile</a>

           <a class="dropdown-item" href="/myorder">My Orders</a>
           <a class="dropdown-item" href="/logout">Logout</a>

         </div>
       </li>
     @endif



          </ul>



          <ul class="navbar-nav ml-auto ">









          </ul>
          {{-- <form class="form-inline my-2 my-lg-0 mx-4 " action="/search" method="post">
            @csrf
            <input class="form-control mr-sm-2" type="search" name="ser" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> --}}
        </div>
      </nav>
</section>

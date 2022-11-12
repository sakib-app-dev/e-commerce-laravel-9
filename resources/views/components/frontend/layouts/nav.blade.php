<header class="sticky-top">
    <div class="logo">
        <a class="navbar-brand " href="{{url('/')}}"><img src="{{asset('assets/users/images/logo.png')}}" alt="" class="img-fluid" ></a>
    </div>
  <nav class="navbar navbar-expand-lg " style="background-color: orangered;">
      <div class="container-fluid">
        
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="d-flex search-box" action="{{ route('users.product.list') }}">
          <input class="form-control ms-5 me-2" name="Keyword" type="search" style="width:300px" placeholder="Search" value="" aria-label="Search">
          <button class="btn bg-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
       

        <div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.product.list') }}">Products</a>
            </li>
            <li class="nav-item">
              
              <a class=" nav-link" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                Category
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('about') }}">About Us</a>
            </li>
            
            @auth
            <li class="nav-item">
              <a class="nav-link" href="about-us.html">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class=class="badge bg-warning">4</span>
                
              </a>
            </li>
            
            <li class="nav-item "> 
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <input type="hidden">
                  <a class="nav-link" style="color:white;text-decoration:none;padding-top:10px" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      this.closest('form').submit();">Logout<i class="fa-solid fa-power-off ms-2"></i></a>
                                      
              </form>
              </li>
                
            @else
            
            <li class="nav-item">
              <a class=" nav-link   me-2"  style="color: white;" href="{{ route('login') }}">Log-in</a>
            </li>
            <li class="nav-item">
              <a class=" nav-link  " style="color: white;" href="{{ route('register') }}">Register</a>
            </li>
            @endauth
            
            
          </ul>
          
        </div>
      </div>

    <!-- category -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Category</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
        
          
          <ul>
            @foreach($categories as $category)
            <li class="" style=""><a class="dropdown-item" href="{{ route('category.product.index',$category->id) }}">{{$category->title}}</a></li>
            <hr>
            @endforeach
          </ul>
      
      </div>




<!-- category -->

  </nav>
  
</header>
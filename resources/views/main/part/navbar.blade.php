<!-- Start Navbar -->
    
  <nav id="Navbar" class="navbar navbar-expand-lg navbar-light fixed-top py-2 d-none">
    <div class="container">
      <a class="navbar-brand fw-light fs-2" href="/">
        <h3 class="text-light"><img src="/assets/image/icon-logo/book-stack.png" alt="" width="50" height="45">
        Buku Explore
      </h3>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav m-3">
          <li class="nav-item nav-btn me-5 mt-1">
            <a class="navbar-button {{ Request::is('/') ? 'active-nav' :'' }}" href="/"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item nav-btn me-5  mt-1">
            <a class="navbar-button {{ Request::is('all-product') ? 'active-nav' :'' }}" href="/all-product"><i class="fas fa-book"></i> All Product</a>
          </li>
          <li class="nav-item nav-btn me-5 mt-1">
            <a class="navbar-button {{ Request::is('cart') ? 'active-nav' :'' }}" href="/cart"><i class="fas fa-shopping-cart"></i> Keranjang</a>
          </li>
        </ul>
        <form action="/all-product">
          @csrf
          <input type="search" class="search-data" placeholder="Search" required>
          <button type="submit" class="fas fa-search"></button>
        </form>

        @auth
          <div class="profil ms-5">
              <a class="" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/assets/image/profil-img/profile-user.png" width="45px" height="40px">
              </a>
            <ul class="dropdown-menu dropdown-navbar-profile dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <li class="name-profile ms-3"><i class="bi bi-person-circle fs-4 me-2"></i> {{ auth()->user()->name }}</li>
              <li class="dropdown-divider bg-white"></li>
              @if (auth()->user()->role_as == '1')
                  <li><a class="dropdown-item mt-2" href="/dashboard"><i class="bi bi-bar-chart-line fs-5 me-2"></i> Dashboard</a></li>
              @endif
              <li><a class="dropdown-item mt-2" href="#"><i class="bi bi-file-earmark-person-fill fs-5 me-2"></i> Profile</a></li>
              <li><a class="dropdown-item mt-2" href="#"><i class="bi bi-gear fs-5 me-2"></i> Setting Profile</a></li>
              <li>
                <form action="/logout" method="POST" class="dropdown-menu-dark" style="outline: none; border: none; ">
                  @csrf
                  <button type="submit" class="dropdown-item mt-2" style="border-radius: 0; height: 100%; margin-bottom: 8px;"><i class="bi bi-box-arrow-left fs-5 me-2"></i> Log Out</button>
                </form>
              </li>
            </ul>
          </div>
        @else
          <div class="tologin ms-5">
            <a href="/login-page/login" class="login-button">Login <i class="bi bi-box-arrow-in-right"></i></a>
          </div>
        @endauth
        
      </div>
    </div>
  </nav>

  <!-- <nav id="Navbar">
    <div class="menu-icon"><span class="fas fa-bars"></span></div>
    <div class="logo" id="logo">
      Buku Explore
    </div>
    <div class="nav-items" id="nav-items">
      <li><a href="#"><i class="bi bi-house-fill"></i> Home</a></li>
      <li><a href="#"><i class="fas fa-book"></i> All Product</li></a>
      <li><a href="#"><i class="fas fa-shopping-cart"></i> Cart</li></a>
    </div>
    <div class="search-icon"><span class="fas fa-search"></span></div>
    <div class="cancel-icon"><span class="fas fa-times"></span></div>
    <form action="#">
      <input type="search" class="search-data" placeholder="search" required>
      <button type="submit" class="fas fa-search"></button>
    </form>
  </nav> -->



  <!-- End Navbar -->
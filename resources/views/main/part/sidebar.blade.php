<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/"><img src="/assets/image/icon-logo/book-stack.png" alt="" width="25" height="25" class="me-2"> Buku Explore</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="POST" class="dropdown-menu-dark" style="outline: none; border: none; ">
        @csrf
        <button type="submit" class="nav-link px-3 bg-dark" style="outline: none; border: none;"> Log Out</button>
      </form>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar bg-light collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link link-sidebar {{ Request::is('dashboard') ? 'active-link-sidebar' :'' }}" aria-current="page" href="/dashboard">
              <i class="bi bi-house-door me-1"></i>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-sidebar" href="#">
              <i class="bi bi-file-earmark me-1"></i>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-sidebar {{ Request::is('dashboard/product-dashboard') ? 'active-link-sidebar' :'' }}" href="">
              <i class="bi bi-cart3 me-1"></i>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-sidebar {{ Request::is('categories') ? 'active-link-sidebar' :'' }} {{ Request::is('add-category') ? 'active-link-sidebar' :'' }}" href="{{ url('categories') }}">
              <i class="bi bi-list-ul me-1"></i>
              Categories
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-sidebar" href="#">
              <i class="bi bi-bar-chart-fill me-1"></i>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-sidebar" href="#">
              <i class="bi bi-person me-1"></i>
              Integrations
            </a>
          </li>
        </ul>
      </div>
    </nav>
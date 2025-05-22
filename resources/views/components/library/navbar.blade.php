<style>
  .custom-dropdown-menu {
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
  }

  .custom-dropdown:hover .custom-dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
  
  /* Dropdown hover behavior */
  .custom-dropdown:hover .custom-dropdown-menu {
    display: block;
  }

  /* Fullscreen mobile nav */
  .mobile-nav-overlay {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100%;
    background-color: #fff3c0;
    z-index: 9999;
    display: none;
    flex-direction: column;
    justify-content: flex-start;
    background-image: url(asset('images/school.webp')); /* kalau ingin motif */
    background-size: cover;
  }

  /* Show overlay */
  .mobile-nav-overlay.show {
    display: flex;
  }

  /* Menu item styling */
  .mobile-nav-overlay .nav-link {
    font-size: 1.2rem;
    font-weight: bold;
    color: #000;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .active {
    background-color: #ffde9e;
    color: #1D3557;
    clip-path: polygon(
    10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
    100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
    75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
    0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
    );
  }

  .visit-btn {
    position: relative;
    display: inline-block;
    overflow: hidden;
    border-radius: 4px;
    transition: transform 0.3s ease;
  }

  .visit-btn .active {
    background-color: #ffde9e;
    color: #1D3557;
    clip-path: polygon(
      10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
      100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
      75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
      0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
    );
  }

  .visit-label {
    position: relative;
    z-index: 2;
    font-weight: bold;
    color: #000;
    transition: transform 0.3s ease;
  }

  .visit-btn::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffde9e;
    transform: rotate(-2deg) scale(0.95);
    transform-origin: center;
    z-index: 1;
    opacity: 0;
    transition: all 0.3s ease-in-out;
    border-radius: 4px;
    clip-path: polygon(
      10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
      100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
      75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
      0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
    );
  }

  /* Hover effect */
  .visit-btn:hover::before {
    opacity: 1;
    transform: rotate(-2deg) scale(1.05);
    clip-path: polygon(
      10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
      100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
      75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
      0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
    );
  }

  /* Optional: text zoom effect on hover */
  .visit-btn:hover .visit-label {
    transform: scale(1.2);
  }

  .custom-dropdown {
    position: relative;
  }

  /* Ubah ini */
  .custom-dropdown-menu {
    display: none;
    position: absolute;
    top: 100%; /* langsung di bawah tombol */
    left: 0;
    background-color: #ffde9e;
    border: 2px dashed #ffde9e;
    z-index: 999;
    border-radius: 40% 20% 70% 15% / 80% 85% 90% 80%;
    width: 240px;
    padding: 1px 0;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
  }

  .custom-dropdown-menu li {
    padding: 5px;
  }

  .custom-dropdown-menu li a {
    font-weight: bold;
    color: #000000;
    text-decoration: none;
  }
  
  .list-group-item {
    border: none;
    padding: 0.75rem 1rem;
    background-color: #f9f9f9;
    margin-bottom: 5px;
    border-radius: 0.5rem;
  }
  .offcanvas {
    width: 250px;
  }

  /* Overlay background */
  .navbar-collapse {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 150px;
      background-color: #fff;
      z-index: 1050;
      padding-top: 60px;
      transition: transform 0.3s ease-in-out;
      transform: translateX(-100%);
      box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
  }

  .navbar-collapse.show {
      transform: translateX(0);
  }

  .navbar-toggler {
      z-index: 1060;
  }

  /* Optional: dark backdrop */
  .mobile-nav-backdrop {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh;
      width: 100vw;
      background-color: rgba(0, 0, 0, 0.3);
      z-index: 1040;
      display: none;
  }

  .mobile-nav-backdrop.active {
      display: block;
  }

  .btn-menu {
      margin-top: 0px;
      padding: 0px;
      width: 72px;
      height: 32px;
      background-color: #ffde9e;
      color: #1D3557;
      clip-path: polygon(
      10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
      100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
      75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
      0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
      );
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  }
  
  .btn-menu-top {
    margin-top: 0px;
    padding: 0px;
    width: 72px;
    height: 32px;
    background-color: #ffde9e;
    color: #1D3557;
    clip-path: polygon(
    10% 0%, 20% 10%, 35% 5%, 50% 15%, 65% 5%, 80% 10%, 90% 0%, 
    100% 20%, 95% 35%, 100% 50%, 95% 65%, 100% 80%, 90% 100%, 
    75% 90%, 60% 95%, 50% 85%, 40% 95%, 25% 90%, 10% 100%, 
    0% 80%, 5% 65%, 0% 50%, 5% 35%, 0% 20%
    );
    border: 3px solid #ffde9e;
    overflow: hidden;
    transition: transform 0.3s;
    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
  }
  .btn-menu-top:hover {
    transform: scale(1.2) rotate(-3deg);
    color: #e47600;
    animation: bounce 0.3s ease-in-out;
  }

  .dropdown-item:hover {
    background-color: transparent;
    color: #fff;
    font-size: 1.1rem;
  }
</style>

<div class="custom-navbar sticky-top bg-light">
    <!-- Topbar -->
    <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom yellow-bg" style="top: 1rem;">
      <div>
        <a href="/" class="text-decoration-none text-dark d-flex align-items-center">
          <span>
            <img src="{{asset('images/logo-school.png')}}" alt="" style="width: 200px;">
          </span> 
        </a>
      </div>
  
      <div class="d-none d-md-block fw-bold">
        <span class="me-3 text-lg">Great Crystal School・Library</span>
        @if (session('role') !== null)
          <button onclick="logout()" 
          id="log-out" type="button" class="btn-logout btn-menu-top fw-bold dynapuff-regular">Exit</button>
        @else
          <button data-toggle="modal" data-target="#modalLogin" id="log-in" type="button" class="btn-login btn-menu-top fw-bold dynapuff-regular">Login</button>
        @endif
      </div>
  
      <!-- Hamburger (only visible on mobile) -->
      <button class="d-md-none border-0 fs-4 btn-menu dynapuff-regular" onclick="toggleMobileNav()">
        Menu
      </button>
    </div>
  
    <nav class="d-none d-md-block navbar navbar-expand-md yellow-bg">
      <div class="container">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'home' ? 'active' : '') : '' }}" href="/">
              <span class="visit-label text-lg">
                Home <i class="bi bi-caret-down-fill"></i>
              </span>
            </a>
          </li>
          <li class="nav-item custom-dropdown">
            <a href="/visit" class="nav-link  visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'visit' ? 'active' : '') : '' }}" href="#" id="visitDropdown" role="button">
              <span class="visit-label text-lg">
                Visit <i class="bi bi-caret-down-fill"></i>
              </span>
              </a>
          </li>
          <li class="nav-item">
            <a class="nav-link visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'explore' ? 'active' : '') : '' }}" href="/explore-library">
              <span class="visit-label text-lg">
                Explore <i class="bi bi-caret-down-fill"></i>
              </span>
            </a>
          </li>
          <li class="nav-item"><a class="nav-link visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'facility' ? 'active' : '') : '' }}" href="/facility"><span class="visit-label text-lg">
            Facility <i class="bi bi-caret-down-fill"></i>
          </span></a></li>
          <li class="nav-item custom-dropdown">
            <a class="nav-link visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'fun' || session('page')->page == 'story' ? 'active' : '') : '' }}" href="#">
              <span class="visit-label text-lg">
                Others <i class="bi bi-caret-down-fill"></i>
              </span>
            </a>
            <ul class="dropdown-menu custom-dropdown-menu">
              <li><a class="dropdown-item" href="/fun-facts">Fun Fact</a></li>
              <li><a class="dropdown-item" href="/short-stories">Short Story</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  
    <!-- Overlay Menu -->
    <div id="mobileNavOverlay" class="mobile-nav-overlay d-md-none">
      <div class="d-flex justify-content-between align-items-center px-3 py-3 border-bottom">
        <a href="/">
          <span>
            <img src="{{asset('images/logo-school.png')}}" alt="" style="width: 250px;">
          </span> 
        </a>
        {{-- <img src="{{ asset('images/greta-face.png') }}" alt="Logo" style="height: 20px;"> --}}
        <button class="btn btn-link fs-3 btn-menu dynapuff-regular" onclick="toggleMobileNav()">
          Close
        </button>
      </div>
      <div class="nav flex-column px-4 py-3 gap-3">
        <a href="/" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'home' ? 'active' : '') : '' }}">Home <i class="bi bi-caret-down-fill"></i></a>
        <a href="/visit" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'visit' ? 'active' : '') : '' }}">Visit <i class="bi bi-caret-down-fill"></i></a>
        <a href="/explore-library" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'explore' ? 'active' : '') : '' }}">Explore <i class="bi bi-caret-down-fill"></i></a>
        <a href="/facility" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'facility' ? 'active' : '') : '' }}">Facility <i class="bi bi-caret-down-fill"></i></a>
        <a href="/fun-facts" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'fun' ? 'active' : '') : '' }}">Fun Fact <i class="bi bi-caret-down-fill"></i></a>
        <a href="/short-stories" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'story' ? 'active' : '') : '' }}">Short Story <i class="bi bi-caret-down-fill"></i></a>
        @if (session('role') !== null)
          <button onclick="logout()" id="log-out" type="button" class="btn-logout btn-menu dynapuff-regular w-100">Exit</button>
        @else
          <button data-toggle="modal" data-target="#modalLogin" id="log-in" type="button" class="btn-login btn-menu dynapuff-regular w-100">Login</button>
        @endif
        <img src="{{ asset('images/greta-greti-baju-olga.png')}}" alt="" class="mascot-mobile">
      </div>
    </div>
</div>

<div class="mobile-nav-backdrop" id="backdrop" onclick="toggleNavbar()"></div>
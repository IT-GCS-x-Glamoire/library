<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Library ・ Great Crystal School</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/style.css') }}">
  <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
  <link rel="icon" href="{{ asset('images/greta-face.png') }}" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Caveat+Brush&family=Caveat:wght@400..700&family=Chewy&family=DynaPuff&display=swap" rel="stylesheet">
  
  <style>
    body {
      background-color: #f8f5f0;
      font-family: 'Noto Sans JP', sans-serif;
    }

    .card-header {
      background: linear-gradient(90deg, #4e73df, #36b9cc);
    }

    .nav-link {
      color: #4a2e1f !important;
    }

    .card-body ul li {
      font-size: 1.05rem;
      padding-left: 0.5rem;
    }

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

    .custom-dropdown {
      position: relative;
    }

    /* Ubah ini */
    .custom-dropdown-menu {
      display: none;
      position: absolute;
      top: 100%; /* langsung di bawah tombol */
      left: 0;
      background-color: #fff;
      border: 2px dashed #000;
      z-index: 999;
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

    .custom-dropdown-menu li a:hover {
      background-color: #ff9000;
    }

    .custom-dropdown-menu li:hover {
      background-color: #ff9000;
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

    .yellow-bg {
      background-color: #fff3c0;
    }

    .orange-bg {
      background-color: #ffde9e;
    }

    .peach-bg {
      background-color: #ffe8d6;
    }

    .visit-btn {
      position: relative;
      display: inline-block;
      overflow: hidden;
      border-radius: 4px;
      transition: transform 0.3s ease;
    }

    .visit-btn::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #ff9000;
      transform: rotate(-2deg) scale(0.95);
      transform-origin: center;
      z-index: 1;
      opacity: 0;
      transition: all 0.3s ease-in-out;
      border-radius: 4px;
    }

    /* Hover effect */
    .visit-btn:hover::before {
      opacity: 1;
      transform: rotate(-2deg) scale(1.05);
    }

    .visit-label {
      position: relative;
      z-index: 2;
      font-weight: bold;
      color: #000;
      transition: transform 0.3s ease;
    }

    .visit-btn:hover .visit-label {
      transform: scale(1.1);
    }
    
    .section {
      position: relative;
      padding: 80px 20px;
      text-align: center;
      background-color: #FFDE9E;
      overflow: hidden;
    }

    .container-title {
      font-size:  clamp(3rem, 3vw + 1rem, 6rem);
      color: #ff9000;
      text-shadow: 2px 2px #ffcc00;
      letter-spacing: 4px;
    }

    .chewy-regular {
      font-family: "Chewy", system-ui;
      font-weight: 400;
      font-style: normal;
    }

    .btn-menu {
      margin-top: 0px;
      padding: 0px;
      width: 72px;
      height: 32px;
      background-color: #FFCC00;
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

    .btn-visit {
      padding: 0px;
      width: 110px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 50% 60% 50% 70% / 80% 60% 50% 70%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .sunday {
      padding: 0px;
      width: 110px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 80% 60% 50% 70% / 80% 80% 50% 70%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .thursday {
      width: 120px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 40% 30% 10% 40% / 20% 50% 50% 60%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .wednesday {
      width: 150px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 70% 60% 40% 80% / 50% 60% 50% 70%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .saturday {
      width: 130px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 80% 40% 60% 70% / 40% 60% 30% 80%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }
    
    .btn-visit:hover, .sunday:hover, .thursday:hover, .wednesday:hover, .saturday:hover, .time-style:hover {
      transform: scale(1.35) rotate(-3deg);
      color: #000000;
      background-color:#ffde9e;
      border: 3px solid #fff3c0;
      animation: bounce 1s ease-in-out;
    }

    .time-style {
      width: 140px;
      height: 60px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 80% 70% 80% 40% / 70% 80% 80% 80%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1); 
    }

    .hero-mascot {
      position: absolute;
      bottom:  25%;
      left: 5%;
      height: 360px;
      /* animation: float 2s ease-in-out infinite; */
      z-index: 4;
    }

    .mascot-form {
      position: absolute;
      bottom:  10%;
      left: 17%;
      max-height: 500px;
      width: auto;
      /* animation: float 2s ease-in-out infinite; */
      z-index: 4;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-15px); }
    }

    .form-visitor {
      padding: 0px;
      width:  300px;
      height: 80px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 50% 60% 50% 70% / 80% 60% 50% 70%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }
    
    .form-plan-visit {
      padding: 20px;
      min-width: 250px;
      height: 45px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 50% 60% 65% 50% / 60% 65% 80% 70%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .terms-intern {
      padding-top: 20px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 100% 0% 100% 0% / 15% 100% 15% 100%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
      min-height: 320px;
      max-height: 330px;
    }

    .terms-public {
      padding-top: 20px;
      background-color: #fff3c0;
      color: #000;
      border-radius: 0% 100% 0% 100% / 85% 15% 85% 15%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
      min-height: 320px;
      max-height: 330px;
    }

    .dynapuff-regular {
      font-family: "DynaPuff", system-ui;
      font-optical-sizing: auto;
      font-weight: 400;
      font-style: normal;
      font-variation-settings:
      "wdth" 100;
    }

    .wave-title span {
      font-family: "DynaPuff", system-ui;
      font-weight: 400;
      font-style: normal;
      display: inline-block;
      animation: wave 2s infinite ease-in-out;
      font-size: 3rem;
      color: #ff9000;
      text-shadow: 1px 1px #ffcc00;
    }

    .wave-title span:nth-child(odd) {
      animation-delay: 0.3s;
    }

    .wave-title span:nth-child(even) {
      animation-delay: 0.5s;
    }

    @keyframes wave {
      0%, 100% { transform: translateY(0deg) rotate(0deg); }
      50% { transform: translateY(-5px) rotate(-2deg); }
    }

    .mascot-mobile {
      position: absolute;
      height: 200px;
      max-width: 100%;
      bottom: 0%;
    }

    .card-form-plan-visit {
      padding: 50px;
      width:  100%;
      height: 100%;
      background-color: #fff3c0;
      color: #000;
      border-radius: 30% 20% 60% 50% / 30% 40% 20% 20%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      transition: transform 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .container-terms {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    @media (min-width: 768px) and (max-width: 1024px) {
      .hero-mascot {
        position: absolute;
        bottom:  35%;
        right: 5%;
        height: 200px;
        /* animation: float 2s ease-in-out infinite; */
        z-index: 4;
      }

      .mascot-form {
        position: absolute;
        bottom:  20%;
        left: 4%;
        max-height: 450px;
        /* animation: float 2s ease-in-out infinite; */
        z-index: 4;
      }
    }

    .custom-modal {
      padding: 50px;
      background-color: #ffde9e;
      color: #000;
      border-radius: 76% 24% 64% 36% / 16% 70% 30% 84% ;
      border: 3px solid #ffcc00;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s;
      box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.1);
    }

    .custom-modal-title {
      background-color: #fff3c0;
      color: #000;
      padding: 12px;
      border-radius: 40% 60% 80% 70% / 20% 40% 40% 20%;
      border: 3px solid #ffde9e;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }

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
      background-color: #fff;
      border: 2px dashed #000;
      z-index: 999;
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

    .custom-dropdown-menu li a:hover {
      background-color: #ff9000;
    }

    .custom-dropdown-menu li:hover {
      background-color: #ff9000;
    }

    .modal-header.bg-info {
      background: linear-gradient(90deg, #17a2b8, #138496);
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
    @keyframes bounce {
      0%   { transform: scale(1) rotate(0deg); }
      30%  { transform: scale(1.25) rotate(-3deg); }
      60%  { transform: scale(1.15) rotate(-2deg); }
      100% { transform: scale(1.2) rotate(-3deg); }
    }
  </style>
</head>


<body>
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
          <li class="nav-item"><a class="nav-link visit-btn {{ session('page') && session('page')->page ? (session('page')->page == 'others' ? 'active' : '') : '' }}" href="/others"><span class="visit-label text-lg">
            Others <i class="bi bi-caret-down-fill"></i>
          </span></a></li>
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
        <a href="/others" class="fw-bold nav-link pl-5
        {{ session('page') && session('page')->page ? (session('page')->page == 'others' ? 'active' : '') : '' }}">Other <i class="bi bi-caret-down-fill"></i></a>
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

  {{-- FORM PENGISIAN KUNJUNGAN PERPUSTAKAAN UNTUK SISWA --}}
  @if (session('role') == 'library')
  <div id="filling-form" class="section" style="background-image: url('images/book-scene-haikei.svg');background-size:cover; 
      background-position: center;height:100vh">
      <div class="container text-center">
        <h1 class="container-title chewy-regular text-uppercase mb-5">
          📋 Library Guest Filling Form
        </h1>
      </div>
      <div class="d-flex">
        <div class="col-12 col-md-8">
          <div class="row d-flex justify-content-center align-items-center text-center col-12">
            <div class="form-visitor">
              <form action="{{route('visit.student')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="name" class="form-label text-xl">Username</label>
            </div>
          </div>
          <div class="row d-flex justify-content-center align-items-center text-center gap-2">
            <div class="col-6 col-md-4 p-0">
              <input type="text" class="form-control form-visitor w-100 text-center text-lg" id="username" name="username" placeholder="..."  required>
            </div>
            <div class="col-4 col-md-3 p-0">
              <button class="btn btn-sm btn-success form-visitor w-100 text-center text-xl fw-bold" type="submit">Submit</button>
            </div>
            </form> 
          </div>
        </div>
        <div class="d-none d-md-block col-md-4">
        </div>
        <img src="{{asset('/images/greta-care.png')}}" alt="" class="d-none d-md-block"
        style="
          position: absolute;
          bottom:  10%;
          right: 17%;
          max-height:400px;
          width: auto;
          /* animation: float 2s ease-in-out infinite; */
          z-index: 4;
        "
        > 
      </div>
    </div>
  @endif

  <div class="section" style="background-image: url('images/blob-scene-haikei-3.svg');background-size:cover; 
    background-position: center;">
    <div class="container text-center">
      <h4 class="container-title chewy-regular text-uppercase mb-5">📚 Terms & Conditions Visitation</h4>
    </div>

    <div class="container-terms">
      <div class="row d-flex justify-content-center text-center align-item-center gap-4">
        <div class="col-12 col-md-5 col-lg-5 terms-intern" data-aos="flip-up" data-aos-duration="600" style="min-height: full-content">
          <img src="{{asset('images/greta-face.png')}}" alt="" style="width:50px;height:50px;">
          <h1 class="wave-title fw-bold">
            <span>I</span><span>N</span><span>T</span><span>E</span><span>R</span><span>N</span><span>A</span><span>L</span>
          </h1>
          <div class="text-end" style="padding-right: 30px;">  
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;">Come according to library visiting hours <span class="text-primary">✔️</span></li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;">Use school clothes correctly <span class="text-primary ">✔️</span></li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;">Visit outside of class teaching hours <span class="text-primary">✔️</span></li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;">Fill in the attendance list at the reception <span class="text-primary">✔️</span></li>
            {{-- <li class="text-decoration-none pb-2 text-lg" style="list-style: none;"> <span class="text-primary">✔️</span></li> --}}
          </div>
        </div>
        <div class="col-12 col-md-5 col-lg-5 terms-public" data-aos="flip-down" data-aos-duration="900">
          <img src="{{asset('images/greta-face.png')}}" alt="" style="width: 50px;height:50px;">
          <h1 class="wave-title fw-bold">
            <span>P</span><span>U</span><span>B</span><span>L</span><span>I</span><span>C</span>
          </h1>
          <div class="text-start" style="padding-left:30px;">
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;"><span class="text-primary">✔️</span> Visitors are required to register a maximum of 2 days before the scheduled visit</li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;"><span class="text-primary">✔️</span> You can visit if you have received approval</li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;"><span class="text-primary">✔️</span> Show the attendance confirmation email sent by the admin library</li>
            <li class="text-decoration-none pb-2 text-lg" style="list-style: none;"><span class="text-primary">✔️</span> Wear neat clothes and shoes</li>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content custom-modal">
        <div class="d-flex gap-4">
          <h5 class="modal-title custom-modal-title fw-bold">Login First</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-danger text-center fw-bold">Login with your student account. <br> If you're external people you can read the book in place</p>
          <form method="POST" action="{{ route('login.library') }}">
            @csrf
            <div class="form-group">
              <label for="name">Username</label>
              <input name="username" type="text" class="form-control input-custom" required>
            </div>
  
            <div class="form-group">
              <label for="name">Password</label>
              <input name="password" type="text" class="form-control input-custom" required >
            </div>
  
            <div class="form-group d-flex justify-content-center align-item-center text-center">
              <input role="button" type="submit" class="btn-custom-login btn btn-success w-fit fw-bold">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  {{-- JADWAL BUKA PERPUSTAKAAN --}}
  <div class="section" style="background-image: url('images/book-scene-haikei-2.svg');background-size:cover; 
    background-position: center;">
    <div class="container text-center">
      <h1 class="container-title chewy-regular text-uppercase mb-5">
        🗓️ LIBRARY SCHEDULE
      </h1>
    </div>
    <div class="container-terms">
      <div class="d-flex justify-content-center align-items-center text-center gap-4">
        <img class="hero-mascot d-none d-md-block" src="{{ asset('/images/greta-greti-baca-buku.png')}}" alt="">
        <div class="d-none d-md-block col-md-2">
        </div>
        <div class="col-12 col-md-10">
          <div class="d-flex justify-content-center align-items-center text-center gap-4">
            <div class="row d-grid gap-4">
              <a class="btn-visit" data-aos="flip-up" data-aos-duration="400"><span class="dynapuff-regular text-lg">Day</span></a>
              <a class="btn-visit" data-aos="flip-down" data-aos-duration="600"><span class="dynapuff-regular text-lg">Sunday</span></a>
              <a class="btn-visit" data-aos="flip-up" data-aos-duration="800"><span class="dynapuff-regular text-lg">Monday</span></a>
              <a class="btn-visit" data-aos="flip-down" data-aos-duration="1000"><span class="dynapuff-regular text-lg">Thursday</span></a>
              <a class="btn-visit" data-aos="flip-up" data-aos-duration="1200"><span class="dynapuff-regular text-lg">Wednesday</span></a>
              <a class="btn-visit" data-aos="flip-down" data-aos-duration="1400"><span class="dynapuff-regular text-lg">Tuesday</span></a>
              <a class="btn-visit" data-aos="flip-up" data-aos-duration="1600"><span class="dynapuff-regular text-lg">Friday</span></a>
              <a class="btn-visit" data-aos="flip-down" data-aos-duration="1800"><span class="dynapuff-regular text-lg">Saturday</span></a>
            </div>
            <div class="row d-grid gap-4">
              <a class="time-style" data-aos="flip-down" data-aos-duration="400"><span class="dynapuff-regular text-lg">Time</span></a>
              <a class="time-style" data-aos="flip-up" data-aos-duration="600"><span class="dynapuff-regular text-lg">Close</span></a>
              <a class="time-style" data-aos="flip-down" data-aos-duration="800"><span class="dynapuff-regular text-lg">10:00 - 15:00</span></a>
              <a class="time-style" data-aos="flip-up" data-aos-duration="1000"><span class="dynapuff-regular text-lg">10:00 - 15:00</span></a>
              <a class="time-style" data-aos="flip-down" data-aos-duration="1200"><span class="dynapuff-regular text-lg">09:00 - 15:00</span></a>
              <a class="time-style" data-aos="flip-up" data-aos-duration="1400"><span class="dynapuff-regular text-lg">09:00 - 15:00</span></a>
              <a class="time-style" data-aos="flip-down" data-aos-duration="1600"><span class="dynapuff-regular text-lg">13:00 - 16:00</span></a>
              <a class="time-style" data-aos="flip-up" data-aos-duration="00"><span class="dynapuff-regular text-lg">Close</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- PLAN  Visit --}}
  <div class="section" style="background-image: url('images/book-scene-haikei.svg');background-size:cover;min-height:100vh;">
    <div>
      <h2 class="container-title chewy-regular text-uppercase mb-5">
        Plan Your Visit
        {{-- <span>Pl</span><span>an</span> <span>Yo</span><span>ur</span> <span>Vis</span> <span>it</span> --}}
      </h2>
      <p class="mb-5" style="font-size:  clamp(1.3rem, 1rem, 3rem);">
        Discover the comfort of reading and exploring knowledge in a quiet, inspiring space. <br> Book today, and make your time more meaningful with our curated collection of books!
      </p>
    </div>

    <div class="container-terms">
      {{-- <div class="row d-flex justify-content-center text-center align-item-center gap-4">
        <div class="col-12 col-md-6 col-lg-5 card-form-plan-visit">
          <form action="{{route('action.plan.visit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group grid align-items-center">
              <label for="name" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Name : </label>
              <input type="text" name="name" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="phone" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Phone : </label>
              <input type="number" name="phone" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="phone" class="form-label" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Email : </label>
              <input type="mail" name="email" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="address" class="form-label" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Address : </label>
              <input type="text" name="address" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="address" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Plan visit : </label>
              <input type="date" name="plan_visit" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <button class="btn btn-success form-plan-visit w-100 text-center text-lg fw-bold" type="submit">Submit</button>
          </form>
        </div>
        <div class="col-12 col-md-6 col-lg-5">
          <img src="{{asset('/images/greta-baca-buku.png')}}" alt="" class="mascot-form">
        </div>
      </div> --}}
      <div class="row d-flex justify-content-center text-center align-item-center gap-4">
        <div class="col-12 card-form-plan-visit" data-aos="flip-up" data-aos-duration="600">
          <form action="{{route('action.plan.visit')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group grid align-items-center">
              <label for="name" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Name : </label>
              <input type="text" name="name" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="phone" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Phone : </label>
              <input type="number" name="phone" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="phone" class="form-label" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Email : </label>
              <input type="mail" name="email" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="address" class="form-label" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Address : </label>
              <input type="text" name="address" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <div class="form-group grid align-items-center">
              <label for="address" class="form-label w-100" style="font-size:  clamp(1.3rem, 1rem, 3rem);">Plan visit : </label>
              <input type="date" name="plan_visit" class="ml-2 form-plan-visit form-control text-center" required>
            </div>
            <button class="btn btn-success form-plan-visit w-100 text-center text-lg fw-bold" type="submit">Submit</button>
          </form>
        </div>
        <img src="{{asset('/images/greta-baca-buku.png')}}" alt="" class="d-none d-lg-block mascot-form">
      </div>
    </div>
  </div>


  {{-- @include('components.library.footer') --}}

  <link rel="stylesheet" href="{{ asset('template') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('template') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <script>
    AOS.init();
    
    function toggleMobileNav() {
      document.getElementById('mobileNavOverlay').classList.toggle('show');
    }

    function logout(){
      Swal.fire({
        title: "Are you sure want to exit?",
        icon: "warning",
        showCancelButton: true,
        cancelButtonColor: "#d33",
        confirmButtonColor: "#00b527",
        confirmButtonText: "Continue",
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                      "content"
                  ),
              },
              accepts: {
                  mycustomtype: "application/x-some-custom-type",
              },
              url: `/logout`,
              type: "GET",
              cache: false,
              // data: {
              //     id: value,
              //     _token: token,
              // },
          })
          .then((res) => {
              if (res.success) {
                  window.location.href = "/explore-library";
              } else {
                  Swal.fire({
                      icon: "error",
                      title: "Oops...",
                      text: "Something went wrong!",
                      footer: '<a href="#">Why do I have this issue?</a>',
                  });
              }
          })
          .catch((err) => {
              Swal.fire({
                  icon: "error",
                  title: "Oops...",
                  text: "Something went wrong!",
                  footer: '<a href="#">Why do I have this issue?</a>',
              });
          });
        }
      });
    }
  </script>

  @if (session('success'))
  <script>
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: "Silahkan masuk ke perpustakaan",
        timer: 2500,
        showConfirmButton: false
    });
  </script>
  @endif

  @if (session('error'))
  <script>
    Swal.fire({
        icon: 'error',
        title: 'Unregistered Account',
        text: "Please contact the receptionist",
        timer: 4000,
        showConfirmButton: false
    });
  </script>
  @endif
  
  @if (session('plan_visit'))
  <script>
    Swal.fire({
        icon: 'success',
        title: 'Thank You',
        text: "We have received your visit form. We will send you an email for more info",
        timer: 4000,
        showConfirmButton: false
    });
  </script>
  @endif
</body>

</html>

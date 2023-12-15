<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/material-dashboard-master/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/material-dashboard-master/assets/img/favicon.png">
  <title>
    Add Up Coming Event
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="/material-dashboard-master/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/material-dashboard-master/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="/material-dashboard-master/assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" {{ route('Admindashboard') }} " target="_blank">
        <img src="/material-dashboard-master/assets/img/Logo_Sekolah_Cendrawasih_resize-removebg-preview.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Halaman Admin</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('Admindashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
              <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                <linearGradient id="gradient1">
                  <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                  <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                </linearGradient>
              </defs>
              
              <g id="group" transform="translate(0,0) scale(1)">
                <path d="M53.333 32.000H202.667C214.449 32.000 224.000 41.551 224.000 53.333V74.667V202.667C224.000 214.449 214.449 224.000 202.667 224.000H96.000H53.333C41.551 224.000 32.000 214.449 32.000 202.667V74.667V53.333C32.000 41.551 41.551 32.000 53.333 32.000Z" fill="#3c77b1" stroke-width="14" id="filltone" stroke="url(#gradient1)" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M32.000 74.667V202.667C32.000 214.449 41.551 224.000 53.333 224.000L96.000 224.000M32.000 74.667L32.000 53.333C32.000 41.551 41.551 32.000 53.333 32.000H202.667C214.449 32.000 224.000 41.551 224.000 53.333V74.667M32.000 74.667H96.000M224.000 74.667V202.667C224.000 214.449 214.449 224.000 202.667 224.000H96.000M224.000 74.667H96.000M96.000 74.667V224.000" stroke="url(#gradient1)" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" id="stroketone"/>
              </g>
            </svg>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('Galery') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
                <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                  <linearGradient id="gradient1">
                    <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                    <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                  </linearGradient>
                </defs>

                <g id="group" transform="translate(0,0) scale(1)">
                  <path d="M64.000 224.000C52.218 224.000 42.667 214.449 42.667 202.667V53.333C42.667 41.551 52.218 32.000 64.000 32.000H213.333V181.333H202.667V224.000H64.000Z" fill="#3c77b1" stroke-width="14" id="filltone" stroke="url(#gradient1)" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M117.333 32.000V144.000L149.333 117.333L181.333 144.000V32.000M42.667 202.667C42.667 214.449 52.218 224.000 64.000 224.000H202.667M42.667 202.667C42.667 190.884 52.218 181.333 64.000 181.333H202.667M42.667 202.667V53.333C42.667 41.551 52.218 32.000 64.000 32.000H213.333V181.333H202.667M202.667 224.000H213.333M202.667 224.000V181.333" stroke="url(#gradient1)" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" id="stroketone"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Tambah Galeri</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('showuserlist') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
                <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                  <linearGradient id="gradient1">
                    <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                    <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                  </linearGradient>
                </defs>

                <g id="group" transform="translate(0,0) scale(1)">
                  <path x="5" y="4" width="12" height="16" rx="2" fill="#3c77b1" d="M74.667 42.667H160A21.333 21.333 0 0 1 181.333 64V192A21.333 21.333 0 0 1 160 213.333H74.667A21.333 21.333 0 0 1 53.333 192V64A21.333 21.333 0 0 1 74.667 42.667z" id="filltone" stroke="url(#gradient1)" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M117.333 138.667a21.333 21.333 0 1 0 0 -42.667 21.333 21.333 0 0 0 0 42.667Zm0 0s-32 0 -32 26.667m32 -26.667s32 0 32 26.667m64 26.667v-21.333m0 -32v-21.333m0 -53.333v21.333M53.333 64c0 -10.667 10.667 -21.333 21.333 -21.333h85.333c10.667 0 21.333 10.667 21.333 21.333v128c0 10.667 -10.667 21.333 -21.333 21.333H74.667c-10.667 0 -21.333 -10.667 -21.333 -21.333V64Z" stroke="url(#gradient1)" stroke-width="14" stroke-linecap="round" id="stroketone" stroke-linejoin="round"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">List Guru</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('index.fasilitas') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
                <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                  <linearGradient id="gradient1">
                    <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                    <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                  </linearGradient>
                </defs>

                <g id="group" transform="translate(0,0) scale(1)">
                  <path d="M202.667 202.667H53.333C41.551 202.667 32.000 193.116 32.000 181.333V170.667V74.667C32.000 62.885 41.551 53.333 53.333 53.333H106.667C117.333 53.333 128.000 74.667 138.667 74.667H202.667C213.333 74.667 224.000 85.333 224.000 96.000L224.000 181.333C224.000 193.116 213.333 202.667 202.667 202.667Z" fill="#3c77b1" stroke="url(#gradient1)" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" id="filltone"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">List Fasilitas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{ route('index.acara') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
                <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                  <linearGradient id="gradient1">
                    <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                    <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                  </linearGradient>
                </defs>

                <g id="group" transform="translate(0,0) scale(1)">
                  <path d="M128.000 32.000C116.218 32.000 106.667 41.551 106.667 53.333V106.667H53.333C41.551 106.667 32.000 116.218 32.000 128.000C32.000 139.782 41.551 149.333 53.333 149.333H106.667V202.667C106.667 214.449 116.218 224.000 128.000 224.000C139.782 224.000 149.333 214.449 149.333 202.667V149.333H202.667C214.449 149.333 224.000 139.782 224.000 128.000C224.000 116.218 214.449 106.667 202.667 106.667H149.333V53.333C149.333 41.551 139.782 32.000 128.000 32.000Z" fill="#3c77b1" stroke="url(#gradient1)" stroke-width="14" stroke-linejoin="round" id="filltone" stroke-linecap="round"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Upcoming Event</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('logout') }}">
            @csrf
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 256 256" fill="none" id="my-svg">
                <defs><pattern id="a" patternUnits="userSpaceOnUse" width="80" height="80" patternTransform="scale(3.19) rotate(0)"><rect x="0" y="0" width="100%" height="100%" fill="none"/><path d="M-20.133 4.568C-13.178 4.932-6.452 7.376 0 10c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 24.568C-13.178 24.932-6.452 27.376 0 30c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 44.568C-13.178 44.932-6.452 47.376 0 50c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/><path d="M-20.133 64.568C-13.178 64.932-6.452 67.376 0 70c6.452 2.624 13.036 5.072 20 5 6.967-.072 13.56-2.341 20-5 6.44-2.659 13.033-4.928 20-5 6.964-.072 13.548 2.376 20 5s13.178 5.068 20.133 5.432" stroke-width="30" stroke="url(#gradient1)" fill="none"/></pattern>
                  <linearGradient id="gradient1">
                    <stop class="stop1" offset="0%" stop-color="#8f66ff"/>
                    <stop class="stop2" offset="100%" stop-color="#e6e600"/>
                  </linearGradient>
                </defs>
                
                <g id="group" transform="translate(0,0) scale(1)">
                  <path d="M128.000 213.333L128.000 42.667L85.333 42.667C73.551 42.667 64.000 52.218 64.000 64.000L64.000 192.000C64.000 203.782 73.551 213.333 85.333 213.333L128.000 213.333Z" fill="#3c77b1" stroke-width="14" id="filltone" stroke="url(#gradient1)" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M128.000 42.667L85.333 42.667C73.551 42.667 64.000 52.218 64.000 64.000V192.000C64.000 203.782 73.551 213.333 85.333 213.333H128.000M202.667 128.000H106.667M202.667 128.000L170.667 96.000M202.667 128.000L170.667 160.000" stroke="url(#gradient1)" stroke-width="14" stroke-linecap="round" stroke-linejoin="round" id="stroketone"/>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Upcoming Events</li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Acara</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- content -->
    <div class="container">
        <h2>Add Acara Selanjutnya</h2>
        <form action="{{ route('events.stored') }}" method="POST">
            @csrf
            <div class="input-group input-group-dynamic mb-4">
                <!-- <label for="nama_acara">Nama Acara:</label> -->
                <input type="text" class="form-control" name="nama_acara" placeholder="Nama Acara" required>
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <!-- <label for="detail_acara">Detail Acara:</label> -->
                <textarea class="form-control" name="detail_acara"  placeholder="Detail Acara" required></textarea>
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <!-- <label for="tanggal_acara">Tanggal Acara:</label> -->
                <input type="date" class="form-control" name="tanggal_acara" placeholder="Tanggal Acara" required>
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <!-- <label for="penanggung_jawab">Penanggung Jawab:</label> -->
                <input type="text" class="form-control" name="penanggung_jawab"  placeholder="Penanggung Jawab" required>
            </div>
            <div class="input-group input-group-dynamic mb-4">
                <!-- <label for="jam">Jam:</label> -->
                <input type="time" class="form-control" name="jam"  placeholder="Jam" required>
            </div>
            <button type="submit" class="btn btn-success">Add Event</button>
            <a href="{{ route('index.acara') }}" class="btn btn-primary">Kembali</a>
        </form>
    </div>
  <!-- script tambahan -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
      setTimeout(function() {
          var alert = document.querySelector('.alert-success');
          if (alert) {
              alert.style.display = 'none';
          }
      }, 3000);
  </script>
  <!--   Core JS Files   -->
  <script src="/material-dashboard-master/assets/js/core/popper.min.js"></script>
  <script src="/material-dashboard-master/assets/js/core/bootstrap.min.js"></script>
  <script src="/material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="/material-dashboard-master/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="/material-dashboard-master/assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
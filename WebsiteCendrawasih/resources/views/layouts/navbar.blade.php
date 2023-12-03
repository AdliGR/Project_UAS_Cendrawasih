<nav class="navbar navbar-expand-lg custom_nav-container ">
  <a class="navbar-brand" href="{{ route('home') }}">
    <img src="/material-dashboard-master/assets/img/Logo_Sekolah_Cendrawasih_resize-removebg-preview.png" alt="" />
    <!-- <span>
      Brighton
    </span> -->
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
      <ul class="navbar-nav  ">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('aboutus') }} "> About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('gallery') }}"> Gallery </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('penjurusan') }}"> Penjurusan </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
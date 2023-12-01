<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <link rel="icon" type="image/png" href="/material-dashboard-master/assets/img/favicon.png">

  <title>Sekolah Kristen Cendrawasih</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/brighton-html/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="/brighton-html/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/brighton-html/css/responsive.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
      .Gallery {
          margin-top: 20px;
          margin-left: auto;
          margin-right: auto;
          max-width: 1500px;
          text-align: center;
      }

      .Gallery h2 {
          margin-bottom: 20px;
      }

      .carousel-item {
            background-size: cover;
            background-position: center;
            height: 250px;
      }

      .card-body {
          opacity: 0;
          transition: opacity 0.3s ease-in-out;
          background-color: rgba(60, 119, 177, 0.7);
          color: white;
          padding: 100px;
      }

      .card:hover .card-body {
          opacity: 1;
      }

      .img-fluid {
          border-radius: 10px;
      }

      .user-details p {
          text-align: center;
      }

      .user-details h5 {
          text-align: center;
      }

      h2 {
        text-align: center;
        margin-bottom: 50px;
      }

      .navbar-nav .nav-item:hover {
        color: #e6e600; 
        text-decoration: none;
        position: relative;
        transition: color 0.3s ease, border-bottom 0.3s ease;
      }

      .navbar-nav .nav-item:hover a {
        color: #e6e600;
        border-bottom: 2px solid #e6e600;
      }

      .fasilitas-img {
        max-width: 100%; 
        margin-bottom: 20px;
      }

      .offer_section .container {
        min-height: 700px; 
      }

      .carousel-item {
        min-height: 800px;
      }
      
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
      @include('layouts.navbar')
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section position-relative">
      <div class="container">
        <div class="detail-box">
          <h1>
            Welcome to <br />
            <span>
              Sekolah Kristen Cendrawasih
            </span>
          </h1>
          <p>
        
          </p>
          <div class="btn-box">
            <a href="{{ route('aboutus') }}" class="btn-1">
              Read More
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section hero_next_section-margin layout_padding">
    <div class="container mt-5">
      <h2>Fasilitas</h2>
      <p class="text-center">Sekolah Cendrawasih memiliki fasilitas yang cukup untuk membantu proses pembelajaran para siswa di sekolah</p>
      <div id="imageCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="fasilitas-img w-100" src="/fasilitas/Panggung Gereja.jpg" class="d-block w-100" alt="Image 1">
            <h2><strong>Gereja</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/perpustakaan 2.jpg" alt="Perpustakaan 2">
            <h2><strong>Perpustakaan 2</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Ruang Komputer.jpg" alt="Ruang Komputer">
            <h2><strong>Ruang Komputer</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Ruang Kelas.jpg" alt="Ruang Kelas">
            <h2><strong>Ruang Kelas</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Lobby.jpg" alt="Lobby">
            <h2><strong>Lobby</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Hallway.jpg" alt="Hallway">
            <h2><strong>Hallway</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Hallway 2.jpg" alt="Hallway 2">
            <h2><strong>Hallway 2</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/kantin.jpg" alt="Kantin">
            <h2><strong>Kantin</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Parkiran.jpg" alt="Parkiran">
            <h2><strong>Parkiran</strong></h2>
          </div>
          <div class="carousel-item">
            <img class="fasilitas-img w-100" src="/fasilitas/Ruang Kepsek.jpg" alt="Ruang Kepsek">
            <h2><strong>Ruang Kepsek</strong></h2>
          </div>
        </div>
        <a class="carousel-control-prev" href="#imageCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#imageCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>

  <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageModalLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img src="" class="d-block w-100" alt="Image" id="modalImage">
        </div>
      </div>
    </div>
  </div>

  <!-- end offer section -->

<!-- about section -->
<!-- <section class="about_section ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/gedung.jpg" alt="">
          </div>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                VISI DAN MISI SMK KRISTEN CENDRAWASIH
              </h2>
            </div>
            <br />
            <div class="about_section">
              <div class="visi-box">
                  <h3>VISI</h3>
                  <p>
                      “Menciptakan lulusan yang Jujur, Unggul, Kreatif, Peduli Lingkungan dan Siap Kerja (JUTEKS PLUS) dan
                      berkualitas, terampil dalam berkarya dan berakhlak mulia di era globalisasi”
                  </p>
              </div>
              <div class="misi-box">
                <div class="misi-heading">
                    <h3>MISI</h3>
                </div>
                <div class="misi-list">
                    <ul>
                        <li>Meningkatkan kualitas manajemen Pendidikan dan layanan Pendidikan</li>
                        <li>Meningkatkan sumber daya manusia</li>
                        <li>Meningkatkan kualitas Sarana dan Prasarana</li>
                        <li>Meningkatkan Kualitas dan Kuantitas Tenaga Pendidik dan Kependidikan</li>
                        <li>Meningkatkan kerjasama dengan instansi DUDIKA yang bergerak di bidang Teknologi melalui PKL (Praktek Kerja
                            Lapangan) dan rekrutmen</li>
                        <li>Meningkatkan kerjasama dengan orang tua peserta didik, DUDIKA, dan alumni.</li>
                        <li>Mewujudkan Profil Pelajar Pancasila</li>
                        <li>Mewujudkan sekolah sebagai pusat keunggulan</li>
                        <li>Mengembangkan kurikulum sesuai dengan kebutuhan DUDIKA</li>
                        <li>Melaksanakan kegiatan pembelajaran berbasis pada minat dan kebutuhan peserta didik dan DUDIKA yang
                            didukung oleh Teknologi Informasi dan Komunikasi</li>
                        <li>Mengoptimalkan pembinaan dan pembimbingan kegiatan akademik dan non-akademik</li>
                        <li>Mewujudkan lingkungan yang sehat, bersih, dan nyaman</li>
                    </ul>
                </div>
            </div>
                        
          </div>
          </div>
        </div>
      </div>
    </div>  
  </section> -->
  <!-- end about section -->

  <!-- gallery section -->
  <section class="Gallery">
    <div class="container-fluid">
    <h2><strong>Gallery</strong></h2>
        <div id="eventCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($galleries->chunk(3) as $galleryChunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="card-group">
                            @foreach($galleryChunk as $gallery)
                                <div class="card d-inline-block mb-4" style="margin-right: 15px; background-image: url('{{ $gallery->gambar_path }}'); background-size: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $gallery->name_event }}</h5>
                                        <p class="card-text">{{ Str::limit($gallery->deskripsi, 25) }}</p>
                                        <p class="card-text">Date: {{ $gallery->date }}</p>
                                        <!-- Add other fields as needed -->
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
  </section>

  <!-- end about section -->

  <section>
  <div class="container">
        <h2><strong>Our Staff</strong></h2>
        <div class="row">
            @foreach($users as $user)
                <div class="col-md-4 mb-4">
                    @if($user->photo)
                        <img src="{{ asset($user->photo) }}" class="img-fluid" alt="User Photo">
                    @endif

                    <div class="user-details">
                        <h5>{{ $user->name }}</h5>
                        <p>
                            {{ $user->role }}<br>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- info section -->
  @include('layouts.footerhome')

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <!-- <p>
      &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p> -->
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="/brighton-html/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/brighton-html/js/bootstrap.js"></script>

  <script>
    // This example adds a marker to indicate the position of Bondi Beach in Sydney,
    // Australia.
    function initMap() {
      var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 11,
        center: {
          lat: 40.645037,
          lng: -73.880224
        }
      });

      var image = "/brighton-html/images/maps-and-flags.png";
      var beachMarker = new google.maps.Marker({
        position: {
          lat: 40.645037,
          lng: -73.880224
        },
        map: map,
        icon: image
      });
    }
  </script>
  <!-- google map js -->

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
  </script>
  <!-- end google map js -->

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>
  <script>
    const imageList = ['Panggung Gereja.jpg', 'Perpustakaan.jpg', 'perpustakaan 2.jpg', 'Ruang Komputer.jpg', 'Ruang Kelas.jpg', 'Lobby.jpg', 'Hallway.jpg', 'Hallway 2.jpg', 'kantin.jpg', 'Lobby.jpg', 'Parkiran.jpg', 'Ruang Kepsek.jpg'];

    const carouselInner = document.querySelector('.carousel-inner');

    imageList.forEach((imageName, index) => {
      const carouselItem = document.createElement('div');
      carouselItem.classList.add('carousel-item');
    
      if (index === 0) {
        carouselItem.classList.add('active');
      }
    
      const imageSrc = `WebsiteCendrawasih/public/fasilitas/${imageName}`;
      const imgElement = document.createElement('img');
      imgElement.src = imageSrc;
      imgElement.classList.add('d-block', 'w-100');
    
      carouselItem.appendChild(imgElement);
      carouselInner.appendChild(carouselItem);
    });
  </script>
  <script>
    $('#imageCarousel').on('click', '.carousel-item img', function () {
      var src = $(this).attr('src');
      var title = $(this).siblings('h2').text();
      $('#imageModalLabel').text(title);
      $('#imageModal').modal('show');
      $('#modalImage').attr('src', src);
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
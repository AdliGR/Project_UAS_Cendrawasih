<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.header')
  <style>
      .heading_container {
          text-align: center;
      }

      .heading_container h2 {
          margin-bottom: 20px;
      }

      .about_section {
          background: url('/brighton-html/images/gedung.jpg') center center/cover no-repeat;
          position: relative;
          padding: 50px 0;
          opacity: 0.7;
      }

      .card {
          background-color: rgba(255, 255, 255, 0.8); 
          border-radius: 15px; 
          padding: 20px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
  </style>
</head>

<body>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        @include('layouts.navbar')
      </div>
    </header>
    <!-- end header section -->


<!-- about section -->
<!-- <section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-5 col-lg-4">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            VISI DAN MISI SMK KRISTEN CENDRAWASIH
                        </h2>
                    </div>
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
                                <li>Meningkatkan kualitas sarana dan Prasarana</li>
                                <li>Meningkatkan kualitas dan Kuantitas Tenaga Pendidik dan Kependidikan</li>
                                <li>Meningkatkan kerjasama dengan instansi DUDIKA yang bergerak di bidang Teknologi melalui PKL (Praktek
                                    Kerja Lapangan) dan rekrutmen</li>
                                <li>Meningkatkan kerjasama dengan orang tua peserta didik, DUDIKA, dan alumni</li>
                                <li>Mewujudkan Profil Pelajar Pancasila</li>
                                <li>Mewujudkan sekolah sebagai pusat keunggulan</li>
                                <li>Mengembangkan kurikulum sesuai dengan kebutuhan DUDIKA</li>
                                <li>Melaksanakan kegiatan pembelajaran berbasis pada minat dan kebutuhan peserta didik dan DUDIKA yang
                                    didukung oleh Teknologi Informasi dan Komunikasi</li>
                                <li>Mengoptimalkan pembinaan dan pembimbingan kegiatan akademik dan non akademik</li>
                                <li>Mewujudkan lingkungan yang sehat, bersih, dan nyaman</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-5 col-lg-4">
                <div class="card">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                VISI DAN MISI SMK KRISTEN CENDRAWASIH
                            </h2>
                        </div>
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
                                  <li>Meningkatkan kualitas sarana dan Prasarana</li>
                                  <li>Meningkatkan kualitas dan Kuantitas Tenaga Pendidik dan Kependidikan</li>
                                  <li>Meningkatkan kerjasama dengan instansi DUDIKA yang bergerak di bidang Teknologi melalui PKL (Praktek
                                      Kerja Lapangan) dan rekrutmen</li>
                                  <li>Meningkatkan kerjasama dengan orang tua peserta didik, DUDIKA, dan alumni</li>
                                  <li>Mewujudkan Profil Pelajar Pancasila</li>
                                  <li>Mewujudkan sekolah sebagai pusat keunggulan</li>
                                  <li>Mengembangkan kurikulum sesuai dengan kebutuhan DUDIKA</li>
                                  <li>Melaksanakan kegiatan pembelajaran berbasis pada minat dan kebutuhan peserta didik dan DUDIKA yang
                                      didukung oleh Teknologi Informasi dan Komunikasi</li>
                                  <li>Mengoptimalkan pembinaan dan pembimbingan kegiatan akademik dan non akademik</li>
                                  <li>Mewujudkan lingkungan yang sehat, bersih, dan nyaman</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about section -->

@include('layouts.footerhome')

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

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

      var image = "images/maps-and-flags.png";
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
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
    <style>
        body {
            /* background-color: rgb(60, 119, 177);
            color: #ffff00; */
        }

        .jumbotron {
            background-color: rgb(60, 119, 177);
            color: rgb(60, 119, 177);
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin-bottom: 20px;
            border: 3px solid rgb(60, 119, 177);
        }

        h1 {
            color: white;
        }

        .info_pengenalan_akuntan,
        .info_pengenalan_otomasi,
        .info_prospek_akuntan,
        .info_prospek_otomasi {
            /* background-color: ; */
            color: white;
            padding: 15px;
            margin-bottom: 15px;
            box-shadow: 0 0 10px rgba(30, 50, 0, 0.8);
        }

        ul {
            list-style-type: none;
        }

        .list-group-item {
            background-color: rgb(60, 119, 177);
            color: white;
            margin-bottom: 5px;
        }

        .prospek-image {
            max-width: 100%;
            height: auto;
            max-height: 200px;
            margin-top: 10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>
    <header class="header_section">
        <div class="container">
            @include('layouts.navbar')
        </div>
    </header>
    <section>
    <div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">JURUSAN AKUNTANSI</h1>

        <div class="info_pengenalan_akuntan">
            <h3>Pengenalan:</h3>
            <p>Jurusan Akuntansi adalah tempat di mana siswa diberikan pengetahuan dan keterampilan praktis yang
                diperlukan untuk memahami dan mengelola keuangan suatu entitas. Program ini dirancang untuk
                membekali siswa dengan pemahaman mendalam tentang prinsip akuntansi, perpajakan, audit, dan
                sistem informasi keuangan.</p>
        </div>

        <div class="info_prospek_akuntan">
            <h3>Prospek Kerja:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Asisten Administratif:</strong> Mendukung kegiatan administratif sehari-hari, seperti
                    penyusunan jadwal, penanganan telepon, dan manajemen berkas.
                    <img src="/penjurusan/akuntansi.jpg" alt="Asisten Administratif Image" class="img-fluid prospek-image">
                </li>
            </ul>
        </div>
    </div>
    <div class="jumbotron">
        <h1 class="display-4">JURUSAN OTOMOTISASI PERKANTORAN</h1>

        <div class="info_pengenalan_otomasi">
            <h3>Pengenalan:</h3>
            <p>Jurusan ini memberikan siswa pengetahuan dan keterampilan yang diperlukan untuk menjadi profesional
                administratif yang terampil dan efisien. Program ini dirancang untuk mengajarkan siswa tentang
                penggunaan teknologi perkantoran, manajemen waktu, komunikasi bisnis, dan keahlian administratif
                lainnya</p>
        </div>

        <div class="info_prospek_otomasi">
            <h3>Prospek Kerja:</h3>
            <ul class="list-group">
                <li class="list-group-item">
                    <strong>Asisten Administratif:</strong> Mendukung kegiatan administratif sehari-hari, seperti
                    penyusunan jadwal, penanganan telepon, dan manajemen berkas.
                    <img src="/penjurusan/otomisasi perkantoran.jpg" alt="Asisten Administratif Image" class="img-fluid prospek-image">
                </li>
            </ul>
        </div>
    </div>

</div>
    </section>

    @include('layouts.footerhome')

    <script type="text/javascript" src="/brighton-html/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/brighton-html/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/css/lightgallery.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-thumbnail.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-fullscreen.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-zoom.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-rCzABXV/cL8nGf3gI0KNBRsAJ9fHVauQY2SYxgStQFZgmi1Bw21tQK7LEQDFMl"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFvRT5f6PyIepR6FfowrD3NuJiSaa+q2Q"
        crossorigin="anonymous"></script>

</body>
</html>
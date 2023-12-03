<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')
    <style>
        .list-group {
            margin-bottom: 20px;
            
        }

        .list-group-item {
            cursor: pointer;
            border: 1px solid rgb(60, 119, 177); 
            margin-bottom: 5px;
            transition: background-color 0.3s ease, border-color 0.3s ease; 
        }

        .list-group-item:hover {
            background-color: rgb(60, 119, 177); 
            border-color: rgb(60, 119, 177);
        }

        .list-group-item a {
            display: block;
            padding: 10px 15px;
            color: #343a40;
            text-decoration: none;
        }

        .list-group-item a:hover{
            color: white;
        }

        #photo-list {
            margin-top: 20px;
        }

        .img-thumbnail {
            width: 100%;
            height: auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: box-shadow 0.3s ease;
        }

        .img-thumbnail:hover {
            box-shadow: 0 0 10px rgba(30, 50, 0, 0.8);
        }

        /* CSS untuk styling LightGallery */
        .lg-toolbar {
            background-color: rgba(255, 255, 255, 0.8) !important;
        }

        .lg-toolbar .lg-close {
            color: #000 !important;
        }

        .lg-sub-html {
            color: #000 !important;
        }

        h2 {
        text-align: center;
        margin-bottom: 20px;
        }

        body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        }

        .container {
            flex: 1;
        }

        .row{
            margin-top: 100px;
        }

        /* .footer_section { 
        } */
    </style>
</head>
<body>
    <header class="header_section">
        <div class="container">
            @include('layouts.navbar')
        </div>
    </header>
    <div class="container mt-5">
        <h2><strong>Gallery</strong></h2>
        <div class="row">
            <div class="col-md-4">
                <h2>List Acara</h2>
                <ul class="list-group">
                    @foreach ($acaraList as $acaraItem)
                        <li class="list-group-item">
                            <a href="{{ url('/gallery/'.$acaraItem) }}">{{ $acaraItem }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-8">
                <!-- <h2>Foto</h2> -->
                <div id="photo-list" class="row">
                    <!-- Gallery photos will be loaded here using JavaScript -->
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footerhome')

    <script type="text/javascript" src="/brighton-html/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="/brighton-html/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/css/lightgallery.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-thumbnail.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-fullscreen.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.2.1/dist/js/plugins/lg-zoom.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const photoList = document.getElementById('photo-list');
        lightGallery(photoList, {
            selector: '.lg-item',
            plugins: [lgThumbnail, lgFullscreen, lgZoom],
        });
    });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const photoList = document.getElementById('photo-list');
            let lg;

            function showGalleryByAcara(acara) {
                fetch(`/gallery/${acara}`)
                    .then(response => response.json())
                    .then(data => {
                        const photos = data.photos;
                        photoList.innerHTML = '';
                    
                        photos.forEach(photo => {
                            const colDiv = document.createElement('div');
                            colDiv.classList.add('col-md-4', 'mb-4');
                        
                            const imgLink = document.createElement('a');
                            imgLink.href = photo.file_path_foto;
                            imgLink.classList.add('lg-item');
                        
                            const img = document.createElement('img');
                            img.src = photo.file_path_foto_comp;
                            img.alt = photo.nama_file;
                            img.classList.add('img-thumbnail', 'w-100');
                        
                            imgLink.appendChild(img);
                            colDiv.appendChild(imgLink);
                            photoList.appendChild(colDiv);
                        });
                    
                        if (lg) {
                            lg.destroy();
                        }
                    
                        lg = lightGallery(photoList, {
                            selector: '.lg-item',
                            plugins: [lgFullscreen, lgZoom],
                        });
                    
                        lg.on('onAfterOpen.lg', () => {
                            document.addEventListener('keydown', function (e) {
                                if (e.key === 'Escape') {
                                    lg.closeGallery();
                                }
                            });
                        });
                    });
            }
        
            const firstAcaraLink = document.querySelector('.list-group-item a');
            if (firstAcaraLink) {
                const firstAcara = firstAcaraLink.textContent;
                showGalleryByAcara(firstAcara);
            }
        
            const acaraLinks = document.querySelectorAll('.list-group-item a');
            acaraLinks.forEach((acaraLink) => {
                acaraLink.addEventListener('click', (event) => {
                    event.preventDefault();
                    const acara = event.target.textContent;
                    showGalleryByAcara(acara);
                });
            });
        });
    </script>
</body>
</html>
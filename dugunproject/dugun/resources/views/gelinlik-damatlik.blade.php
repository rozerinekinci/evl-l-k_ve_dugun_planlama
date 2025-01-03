@extends('layouts.app')

@section('title', 'Gelinlik ve Damatlık')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Gelinlik ve Damatlık Koleksiyonu</h1>

        <!-- Gelinlik ve Damatlık Kartları -->
        <div class="row">
            <!-- Gelinlik Kartı -->
            <div class="col-md-4 mb-4">
                <div class="carousel-inner">
                    <img src="https://i.dugun.com/gallery/20407/preview_aysun-gelinlik_ZTNAERk9.jpg" class="card-img-top" alt="Gelinlik">
                    <div class="card-body">
                        <h5 class="card-title">Şık Gelinlik</h5>
                        <p class="card-text">Düğününüzde zarif ve şık bir görünüm için gelinlik koleksiyonumuzdan seçim yapabilirsiniz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>

            <!-- Damatlık Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://static.ticimax.cloud/cdn-cgi/image/width=-,quality=85/56971/uploads/urunresimleri/buyuk/acik-krem-cikarilabilir-kirlangic-yaka-750-48.jpg" class="card-img-top" alt="Damatlık">
                    <div class="card-body">
                        <h5 class="card-title">Modern Damatlık</h5>
                        <p class="card-text">Düğün gününüzde şıklığınızı tamamlayacak modern ve zarif damatlık seçeneklerimiz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>

            <!-- konsept Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://i.dugun.com/articles/body/ETRXYbeUW1JNdWI6.jpg" class="card-img-top" alt="Vintage Gelinlik">
                    <div class="card-body">
                        <h5 class="card-title">Konsept</h5>
                        <p class="card-text">konsept seçeneğimiz ile sizlerin seçimini kolaylaştırıyoruz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtreleme Butonu -->
        <div class="text-center mt-5">
            <button id="filterBtn" class="btn btn-secondary">Koleksiyonu Filtrele</button>
        </div>
    </div>

    <!-- Stil ve JS Kodları -->
    <style>
        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .card-text {
            color: #666;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }

        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .text-center {
            text-align: center;
        }
    </style>

    <script>
        document.getElementById("filterBtn").addEventListener("click", function() {
            alert("Filtreleme işlemi şu an aktif değil.");
        });
    </script>
@endsection

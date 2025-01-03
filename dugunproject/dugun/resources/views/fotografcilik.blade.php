@extends('layouts.app')

@section('title', 'Fotoğrafçılık')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Fotoğrafçılık Hizmetleri</h1>

        <!-- Fotoğrafçılık Hizmet Kartları -->
        <div class="row">
            <!-- Düğün Fotoğrafçılığı Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://cdn.myikas.com/images/e99580d7-47a2-4686-b55b-0172e2768516/9a06a1fb-812d-4e55-bcc4-5896d4af71a8/image_1080.jpg" class="card-img-top" alt="Düğün Fotoğrafçılığı">
                    <div class="card-body">
                        <h5 class="card-title">Düğün Fotoğrafçılığı</h5>
                        <p class="card-text">Düğün gününüzde en özel anları ölümsüzleştirmek için profesyonel fotoğrafçılık hizmetimizden yararlanabilirsiniz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>

            <!-- Dış Mekan Fotoğrafçılığı Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://www.tutkufotograf.com/resimler/Izmir-Dis-Mekam-Dugun-Albumu-Cekimi-Alacati-Profesyonel-Fotograf-Cekimi--5-192859.jpg">
                    <div class="card-body">
                        <h5 class="card-title">Dış Mekan Fotoğrafçılığı</h5>
                        <p class="card-text">Dış mekan çekimleri ile doğal ve samimi fotoğraflar elde etmek için hizmetimizden faydalanabilirsiniz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>

            <!-- Portre Fotoğrafçılığı Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://dilaratuzun.com/wp-content/uploads/2021/11/kore-dugun-fotografi-cekimi-kore-tarzi-fotograf-cekimi-1-1.jpg" class="card-img-top" alt="Portre Fotoğrafçılığı">
                    <div class="card-body">
                        <h5 class="card-title">Portre Fotoğrafçılığı</h5>
                        <p class="card-text">Bireysel ya da grup portre fotoğrafları için profesyonel fotoğrafçılık hizmetimiz.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filtreleme Butonu -->
        <div class="text-center mt-5">
            <button id="filterBtn" class="btn btn-secondary">Hizmetleri Filtrele</button>
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

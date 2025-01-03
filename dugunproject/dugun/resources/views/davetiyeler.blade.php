@extends('layouts.app')

@section('title', 'Davetiyeler')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Davetiyeler</h1>


        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src=https://davetiyeruzgari.com/wp-content/uploads/2022/03/Vintage-Dugun-Davetiyesi-362-1-1-600x600.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Klasik Davetiye</h5>
                        <p class="card-text">Şık ve zarif bir tasarıma sahip klasik davetiyemizle, düğününüzü unutulmaz kılın.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src=https://davetiye.market/wp-content/uploads/2023/04/kut-kesimli-luks-davetiye-1.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Modern Davetiye</h5>
                        <p class="card-text">Modern çizgiler ve renklerle tasarlanmış davetiyemizle düğününüzü stil sahibi kılın.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>

            <!-- Vintage Davetiye Kartı -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src=https://i.dugun.com/gallery/g_47064/preview_vintage-davetiye-modelleri_OzFaau0e.jpg>
                    <div class="card-body">
                        <h5 class="card-title">Vintage Davetiye</h5>
                        <p class="card-text">Geçmişin zarif izlerini taşıyan vintage davetiyemizle düğününüzde nostaljik bir hava yaratın.</p>
                        <a href="#" class="btn btn-primary">Detaylar</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Davetiye Filtreleme Butonu -->
        <div class="text-center mt-5">
            <button id="filterBtn" class="btn btn-secondary">Davetiyeleri Filtrele</button>
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

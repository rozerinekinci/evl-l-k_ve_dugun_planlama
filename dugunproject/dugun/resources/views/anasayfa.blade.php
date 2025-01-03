@extends('layouts.app')

@section('title', 'Ana Sayfa')

@section('content')
    <!-- Hero Section -->
    <section class="hero bg-cover bg-center" style="background-image: url('https://3dduvarkagitlari.com/Content/images/2022/11/2/l/3dduvarkagitlari-385f614a.jpg');">
        <div class="overlay">
            <div class="container text-center text-white">
                <h1 class="display-4">Hayalinizdeki Düğünü Planlayın</h1>
                <p class="lead">Her detayda mükemmel bir düğün için bizimle çalışın</p>
                <a href="{{ route('dugunler') }}" class="btn btn-primary btn-lg">Düğünleri Görüntüle</a>
            </div>
        </div>
    </section>

    <!-- Hizmetlerimiz Section -->
    <section class="services py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Hizmetlerimiz</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="service-card">
                        <img src=data:image/jpeg;base64,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>
                        <h4 class="mt-3">Düğün Planlama</h4>
                        <p>Hayalinizdeki düğün için her detayı planlıyoruz.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src=https://st3.depositphotos.com/1177973/14616/i/450/depositphotos_146168929-stock-photo-photographer-taking-photo-of-bride.jpg>
                        <h4 class="mt-3">Fotoğrafçılık</h4>
                        <p>Özel anlarınızı ölümsüzleştiriyoruz.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-card">
                        <img src=https://cdn-europe.dugunbuketi.com/media/1014/conversions/istanbul-acik-hava-dugun-mekanlari-md.jpg>
                        <h4 class="mt-3">Mekan Kiralama</h4>
                        <p>En güzel mekanlarda düğün organizasyonları.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog py-5">
        <div class="container">
            <h2 class="text-center mb-4">Blog Yazıları</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="https://platincdn.com/701/pictures/DTALXCVNNY523201923330_IMG_E5992.jpg" alt="Blog 1" class="img-fluid">
                        <h5 class="mt-3">Düğün Hazırlıkları İçin İpuçları</h5>
                        <p>En güzel düğün için hazırlık sürecini nasıl yönetebilirsiniz?</p>
                        <a href="#" class="btn btn-secondary">Devamını Oku</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="https://binlercepresets.shop/wp-content/uploads/2023/11/Screenshot_4-6.png">
                        <h5 class="mt-3">Düğün Fotoğrafçılığı: Nelere Dikkat Etmelisiniz?</h5>
                        <p>Fotoğrafçılık seçiminde nelere dikkat etmelisiniz?</p>
                        <a href="#" class="btn btn-secondary">Devamını Oku</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTZ4T8jBjNALGmtc2jNT7097Fvk8G1Vhw3_sA&s" alt="Blog 3" class="img-fluid">
                        <h5 class="mt-3">Düğün Mekanları: Seçim Rehberi</h5>
                        <p>Düğün mekanınızı seçerken göz önünde bulundurmanız gerekenler.</p>
                        <a href="#" class="btn btn-secondary">Devamını Oku</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- İletişim Section -->
    <section class="contact py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4">Bize Ulaşın</h2>
            <form action= >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="name" placeholder="Adınız" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" placeholder="E-posta Adresiniz" required>
                    </div>
                </div>
                <div class="mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Mesajınız" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg mt-3">Mesaj Gönder</button>
            </form>
        </div>
    </section>
@endsection

@section('styles')
    <style>


        .hero {
            height: 100vh;
            weight: 10;
            margin-bottom:auto ;

            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background-repeat: no-repeat;
            background-position-x:center;
        }

        .overlay {
            background: rgba(0, 0, 0, 0.5);
            padding: 50px;
        }

        .service-card img, .blog-card img {
            width: 100%;
            height: 100px;
            overflow: hidden;
            object-fit: cover;

        }

        .service-card, .blog-card {
            margin-bottom: 30px;
        }

        .contact form {
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact textarea {
            resize: none;
        }

        .contact button {
            background-color: #ff6f61;
            color: #fff;
            border: none;
        }
    </style>
@endsection

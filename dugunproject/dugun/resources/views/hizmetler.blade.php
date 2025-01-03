@extends('layouts.app')

@section('title', 'Hizmetlerimiz')

@section('content')
    <div class="services-container">
        <h1>Hizmetlerimiz</h1>
        <p>En özel gününüzü unutulmaz kılmak için sunduğumuz hizmetler hakkında bilgi alabilirsiniz.</p>

        <div class="service-item">
            <h2>Düğün Planlama</h2>
            <p>Hayalinizdeki düğünü gerçekleştirmek için profesyonel organizasyon hizmeti sunuyoruz. Her detayı sizin için planlıyoruz.</p>
        </div>

        <div class="service-item">
            <h2>Fotoğrafçılık Hizmeti</h2>
            <p>En özel anlarınızı ölümsüzleştirmek için profesyonel fotoğrafçılarımızla hizmetinizdeyiz. Düğün fotoğraflarınızda kalitenin farkını hissedeceksiniz.</p>
        </div>

        <div class="service-item">
            <h2>Mekan Seçimi</h2>
            <p>Hayalinizdeki düğün mekanını bulmanıza yardımcı oluyoruz. Farklı mekan seçenekleriyle size en uygun olanını seçebilirsiniz.</p>
        </div>

        <div class="service-item">
            <h2>Gelinlik ve Damatlık</h2>
            <p>Gelinlik ve damatlık seçiminde size yardımcı oluyoruz. Tarzınıza uygun en güzel modelleri sunuyoruz.</p>
        </div>

        <div class="service-item">
            <h2>Davetiyeler</h2>
            <p>Düğün davetiyenizi kişiselleştirin. Farklı tasarımlar ve seçeneklerle davetiyenizi oluşturuyoruz.</p>
        </div>
    </div>

    <!-- Inline CSS -->
    <style>
        /* Hizmetlerimiz Sayfası Tasarımı */
        .services-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .services-container h1 {
            font-size: 2.5em;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .services-container p {
            text-align: center;
            color: #666;
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .service-item {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .service-item h2 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 10px;
        }

        .service-item p {
            color: #777;
            font-size: 1.1em;
            line-height: 1.6;
        }
    </style>

    <!-- Inline JavaScript -->
    <script>
        // İlerleyen zamanlarda JavaScript eklemek isterseniz burada kullanabilirsiniz
    </script>
@endsection


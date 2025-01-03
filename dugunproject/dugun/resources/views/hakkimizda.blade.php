@extends('layouts.app')

@section('title', 'Hakkımızda')

@section('content')
    <div class="about-container">
        <h1>Hakkımızda</h1>
        <p>Biz, en özel gününüzü unutulmaz kılmak için profesyonel hizmetler sunan bir organizasyon ekibiyiz. Düğün planlamadan fotoğrafçılığa, gelinlik ve damatlık seçiminden mekan önerilerine kadar her detayda yanınızdayız.</p>

        <div class="about-item">
            <h2>Vizyonumuz</h2>
            <p>Vizyonumuz, her çiftin hayalindeki düğünü gerçeğe dönüştürmek ve onların en özel anlarını unutulmaz kılmaktır. Kaliteli hizmet, müşteri memnuniyeti ve profesyonellik bizim önceliğimizdir.</p>
        </div>

        <div class="about-item">
            <h2>Değerlerimiz</h2>
            <p>Her projede müşteri odaklı yaklaşımı benimsiyoruz. Güven, şeffaflık, ve kalite bizim temel değerlerimizdir. Düğün sürecinin her aşamasında yanınızda olmaktan gurur duyuyoruz.</p>
        </div>

        <div class="about-item">
            <h2>Ekibimiz</h2>
            <p>Alanında uzman profesyonel ekibimiz, her türlü organizasyonu başarıyla tamamlayacak deneyime ve bilgiye sahiptir. Bizimle çalışarak, hayalinizdeki düğünü gerçeğe dönüştürebilirsiniz.</p>
        </div>
    </div>

    <!-- Inline CSS -->
    <style>
        /* Hakkımızda Sayfası Tasarımı */
        .about-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .about-container h1 {
            font-size: 2.5em;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .about-container p {
            text-align: center;
            color: #666;
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .about-item {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .about-item h2 {
            font-size: 1.8em;
            color: #333;
            margin-bottom: 10px;
        }

        .about-item p {
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

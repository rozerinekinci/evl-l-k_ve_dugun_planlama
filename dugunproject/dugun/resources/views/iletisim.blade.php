@extends('layouts.app')

@section('title', 'İletişim')

@section('content')
    <div class="contact-container">
        <h1>Bizimle İletişime Geçin</h1>
        <p>Herhangi bir sorunuz veya öneriniz varsa, lütfen bizimle iletişime geçin. Yardımcı olmaktan memnuniyet duyarız.</p>

        <form action="{{ route('iletisim.store') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-group">
                <label for="name">Adınız</label>
                <input type="text" id="name" name="name" required placeholder="Adınızı girin" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" required placeholder="E-posta adresinizi girin" class="form-control">
            </div>

            <div class="form-group">
                <label for="message">Mesajınız</label>
                <textarea id="message" name="message" required placeholder="Mesajınızı yazın" class="form-control"></textarea>
            </div>

            <button type="submit" class="submit-btn">Gönder</button>
        </form>
    </div>

    <!-- Inline CSS -->
    <style>
        /* İletişim Sayfası Tasarımı */
        .contact-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .contact-container h1 {
            font-size: 2.5em;
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-container p {
            text-align: center;
            color: #666;
            font-size: 1.2em;
            margin-bottom: 30px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-size: 1.1em;
            color: #333;
            margin-bottom: 8px;
        }

        .form-control {
            padding: 12px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 6px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .submit-btn {
            background-color: #007bff;
            color: white;
            font-size: 1.2em;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0056b3;
        }

        .submit-btn:active {
            background-color: #004085;
        }
    </style>

    <!-- Inline JavaScript -->
    <script>
        document.querySelector('.contact-form').addEventListener('submit', function(event) {
            event.preventDefault();

            // Kullanıcıya başarı mesajı göster
            alert("Mesajınız başarıyla gönderildi!");

            // Formu gönder
            this.submit();
        });
    </script>
@endsection

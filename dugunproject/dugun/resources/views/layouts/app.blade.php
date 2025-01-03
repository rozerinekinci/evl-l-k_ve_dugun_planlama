<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Ana Sayfa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    @yield('styles')
</head>
<body>

<!-- Navbar Başlangıcı -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Logo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hakkimizda">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/dugunler">Düğünler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/hizmetler">Hizmetlerimiz</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/fotografcilik">Fotoğrafçılık</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gelinlik-damatlik">Gelinlik ve Damatlık</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/davetiyeler">Davetiyeler</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/iletisim">İletişim</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar Bitişi -->

<!-- Sayfa İçeriği -->
<div class="container mt-4">
    @yield('content')
</div>

<!-- Footer (isteğe bağlı) -->
<footer class="bg-light text-center py-3 mt-5">
    <p>&copy; 2024 Tüm hakları saklıdır.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

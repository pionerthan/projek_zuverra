<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan Saya</title>
    <link rel="stylesheet" href="{{ asset('css/style-pesanan.css') }}">
</head>
<body>
<header>
  <div class="navbar">
  <a href="{{ route('beranda') }}">
    <button class="menu-icon">☰</button>
    </a>
    <div class="logo">Hotel Zuverra 𓅪⟢</div>
    <a href="{{ route('pencarian') }}">
        <div class="search-icon">🔍</div>
    </a>
    <a href="{{ route('keranjang') }}">
    <div class="cart-icon">🛒</div>
    </a>
  </div>
</header>




    <footer>
    <a href="{{ route('beranda') }}" class="footer-btn">Halaman utama</a>
    <a href="{{ route('pesanan') }}" class="footer-btn active">Pesanan saya</a>
</footer>


    <script src="{{ asset('js/script-pesanan.js') }}"></script>
</body>
</html>

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

<main>
        <h2>Pesanan Saya</h2>
        <div class="pesanan-container">
        <a href="{{ route('kamar.pesanan') }}">
            <img src="{{ asset('images/fotohotel2.jpeg') }}" alt="Foto Kamar">
            <div class="detail-pesanan">
        </a>
                <h3>Kamar no 12</h3>
                <p>Anda telah memesan kamar no 12 di Hotel Zuverra.
Check-in dijadwalkan pada 10 Mei 2025 pukul 14.00, dan check-out pada 12 Mei 2025 pukul 12.00.<br>
Total biaya pemesanan sebesar Rp 1.200.000, telah dibayarkan melalui metode GoPay.
Terima kasih telah memesan bersama kami. <br> Kami menantikan kedatangan Anda!.</p>
            </div>
        </div>
    </main>


    <footer>
    <a href="{{ route('beranda') }}" class="footer-btn">Halaman utama</a>
    <a href="{{ route('pesanan') }}" class="footer-btn active">Pesanan saya</a>
</footer>


    <script src="{{ asset('js/script-pesanan.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Beranda</title>
  <link rel="stylesheet" href="{{ asset('css/style-beranda.css') }}">
  
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
  <section class="hero-section">
    <div class="booking-form">
      <h2>Pesan Kamar</h2>

      <form action="{{ route('proses.booking') }}" method="POST">
        @csrf
        <input type="text" name="room_number" placeholder="Masukkan nomor kamar" required>

        <div class="date-inputs">
          <input type="date" name="checkin_date" required>
          <span> - </span>
          <input type="date" name="checkout_date" required>
        </div>

        <div class="button-group">
          <button type="submit" name="action" value="pesan">Pesan Sekarang</button>
          <button type="submit" name="action" value="keranjang">Masukkan Keranjang</button>
        </div>
      </form>
    </div>
  </section>
</main>

<footer>
  <button class="footer-btn" data-href="{{ route('beranda') }}" id="btn-beranda">Halaman Utama</button>
  <button class="footer-btn" data-href="{{ route('pesanan') }}" id="btn-pesanan">Pesanan Saya</button>
</footer>


<script src="{{ asset('js/beranda.js') }}"></script> 

<script>
  document.querySelectorAll('.footer-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      window.location.href = this.getAttribute('data-href');
    });
  });

  // Highlight tombol aktif berdasarkan URL
  const currentUrl = window.location.pathname;

  if (currentUrl.includes('/beranda')) {
    document.getElementById('btn-beranda').classList.add('active');
  } else if (currentUrl.includes('/pesanan')) {
    document.getElementById('btn-pesanan').classList.add('active');
  }
</script>


</body>
</html>

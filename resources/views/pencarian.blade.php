<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hasil Pencarian Kamar</title>
  <link rel="stylesheet" href="{{ asset('css/style-pencarian.css') }}">
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
  <div class="kamar-container" id="kamarList">
    <div class="kamar-card" data-nama="Deluxe Room">
    <a href="{{ route('infokamar1') }}">
      <img src="{{ asset('images/fotohotel1.jpeg') }}" alt="Deluxe Room">
    </a>
      <h3>Kamar no 8</h3>
    </div>
    <div class="kamar-card" data-nama="Superior Room">
    <a href="{{ route('infokamar2') }}">
      <img src="{{ asset('images/fotohotel2.jpeg') }}" alt="Superior Room">
    </a>
      <h3>Kamar no 12</h3>
    </div>
    <div class="kamar-card" data-nama="Suite Room">
    <a href="{{ route('infokamar3') }}">
      <img src="{{ asset('images/fotohotel3.jpeg') }}" alt="Suite Room">
    </a>
      <h3>Kamar no 21</h3>
    </div>
  </div>
</main>

<script src="{{ asset('js/pencarian.js') }}"></script>
</body>
</html>

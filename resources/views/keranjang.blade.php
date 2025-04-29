<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Pemesanan</title>
    <link rel="stylesheet" href="{{ asset('css/style-keranjang.css') }}">
</head>
<body>
    <div class="container">
        <h2>Keranjang Pemesanan</h2>
        <form id="formPemesanan" action="{{ route('pembayaran') }}" method="POST">
            @csrf
        <div class="room-list">
            <div class="room-item">
                <input type="checkbox" class="room-checkbox" value="Kamar Deluxe 1">
                <img src="{{ asset('images/fotohotel1.jpeg') }}" alt="Foto Kamar 1">
                <p>Kamar no 8</p>
            </div>
            <div class="room-item">
                <input type="checkbox" class="room-checkbox" value="Kamar Deluxe 2">
                <img src="{{ asset('images/fotohotel2.jpeg') }}" alt="Foto Kamar 2">
                <p>Kamar no 12</p>
            </div>
        </div>

        <div class="footer">
            <label><input type="checkbox" id="checkAll"> Semua</label>
            <button id="pesanBtn" type="button">Pesan</button>
        </div>
    </div>

    <script src="{{ asset('js/keranjang.js') }}"></script>
</body>
</html>
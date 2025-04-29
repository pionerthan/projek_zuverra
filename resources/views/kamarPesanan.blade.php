<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pesanan Kamar</title>
    <link rel="stylesheet" href="{{ asset('css/style-kamarPesanan.css') }}">
</head>
<body>
<header>
    <div class="navbar">
    <a href="{{ route('beranda') }}">
    <button class="menu-icon">☰</button>
    </a>
        <div class="logo">Hotel Zuverra 𓅪⟢</div>
        <a href="{{ route('pencarian') }}"><div class="search-icon">🔍</div></a>
        <a href="{{ route('keranjang') }}"><div class="cart-icon">🛒</div></a>
    </div>
</header>

<main>
    <h2>Pesanan Saya</h2>
    <div class="pesanan-container">
        <img src="{{ asset('images/fotohotel2.jpeg') }}" alt="Foto Kamar">
        <div class="detail-pesanan">
            <h3>Kamar no 12</h3><p>
            <p>Temukan kesempurnaan dalam kenyamanan dan gaya di Kamar Superior No. 12, dirancang untuk para tamu yang menghargai ketenangan, pemandangan kota yang menakjubkan, dan desain modern yang elegan. Terletak di lantai atas, kamar ini menawarkan jendela besar panorama yang menghadap langsung ke cakrawala kota. Dengan fasilitas kamar: <br>
- 1 tempat tidur king size dengan sprei berkualitas tinggi<br>
- Spot duduk di jendela (window lounge) yang nyaman untuk bersantai sambil menikmati pemandangan<br>
- Interior bernuansa hangat dengan pencahayaan ambient<br>
- Meja kerja dan area makan kecil<br>
- TV layar datar, AC, minibar, dan Wi-Fi cepat<p>
Penataan ruang yang minimalis namun fungsional dengan suasana yang tenang dan privacy tinggi. Ideal untuk menikmati sunrise atau city lights di malam hari.<p>
Check-in dijadwalkan pada 10 Mei 2025 pukul 14.00, dan check-out pada 12 Mei 2025 pukul 12.00.
Total biaya pemesanan sebesar Rp 1.200.000, telah dibayarkan melalui metode GoPay.
Terima kasih telah memesan bersama kami. Kami menantikan kedatangan Anda!
</p></p>
        </div>
    </div>

    <div class="button-group">
        <button class="action-btn" data-action="batal">Batal</button>
        <button class="action-btn" data-action="checkin">Check-in</button>
        <button class="action-btn" data-action="checkout">Check-out</button>
    </div>
</main>

<!-- Popup Modal -->
<div id="popupModal" class="modal">
    <div class="modal-content">
        <p id="modalText">Konfirmasi?</p>
        <form id="popupForm">
            <input type="hidden" name="action" id="popupAction">
            <button type="submit">Ya</button>
            <button type="button" id="closeModal">Tidak</button>
        </form>
    </div>
</div>

<script>
    const pesananUrl = "{{ route('pesanan.kosong') }}"; 
</script>
<script src="{{ asset('js/script-kamarPesanan.js') }}"></script>
</body>
</html>
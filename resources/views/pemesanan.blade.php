<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Kamar</title>
    <link rel="stylesheet" href="{{ asset('css/style-pemesanan.css') }}">
</head>
<body>
    <main>
        <section class="hero-section">
            <div class="booking-form">
                <h2>Formulir Pemesanan</h2>
                <form id="formPemesanan" action="{{ route('pembayaran') }}" method="POST">
                    @csrf
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap" required>
                    <input type="text" name="telepon" placeholder="Masukkan nomor telepon" required>
                    <input type="email" name="email" placeholder="Masukkan email" required>
                    
                    <div class="date-inputs">
                        <input type="date" name="tanggal_masuk" required>
                        <span> - </span>
                        <input type="date" name="tanggal_keluar" required>
                    </div>

                    <label for="metode">Metode pembayaran yang dipakai</label>
                    <select name="metode" id="metode" required>
                        <option value="e-wallet">E-Wallet</option>
                        <option value="transfer">Transfer Bank</option>
                        <option value="kartu">Kartu Kredit</option>
                        <option value="cash">Bayar di Tempat</option>
                    </select>

                    <div class="button-group">
                        <button type="submit">Pesan</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <!-- Popup Modal -->
<div id="popupModal" class="modal">
  <div class="modal-content">
    <p>Pesanan Anda berhasil dikirim!</p>
    <button id="closeModal">Tutup</button>
  </div>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Halaman Pembayaran</title>
    <link rel="stylesheet" href="{{ asset('css/style-pembayaran.css') }}">
</head>
<body>

    <div class="container">
        <div class="form-box">
            <h2>Pembayaran</h2>
            <form id="formPemesanan" action="{{ route('pesanan') }}" method="POST">
            @csrf
            <label for="tujuan">Kepada</label>
            <select id="tujuan" class="input">
                <option value="">Pilih E-wallet atau Bank</option>
                <option value="ovo">OVO</option>
                <option value="gopay">GoPay</option>
                <option value="bca">BCA</option>
                <option value="bni">BNI</option>
            </select>

            <label for="jumlah">Sejumlah</label>
            <input type="text" id="jumlah" name="jumlah" class="input" placeholder="Masukkan jumlah" required>

            <button id="bayarBtn">Bayar</button>
        </div>
    </div>

    <script>
    const jumlahInput = document.getElementById('jumlah');

    // Format ke "Rp 1.000.000"
    jumlahInput.addEventListener('input', function (e) {
        let value = e.target.value.replace(/[^0-9]/g, ''); // hanya angka
        if (!value) {
            e.target.value = '';
            return;
        }
        let formatted = new Intl.NumberFormat('id-ID').format(value);
        e.target.value = 'Rp ' + formatted;
    });

    // Validasi sebelum submit
    document.getElementById('formPemesanan').addEventListener('submit', function (e) {
        const tujuan = document.getElementById('tujuan').value;
        let jumlahValue = jumlahInput.value.replace(/[^0-9]/g, ''); // ambil angka bersih

        if (!tujuan || !jumlahValue || parseInt(jumlahValue) <= 0) {
            e.preventDefault();
            alert('Harap isi semua kolom dengan benar sebelum melanjutkan.');
            return;
        }

        // Ubah nilai input jadi angka bersih sebelum kirim
        const hiddenInput = document.createElement('input');
        hiddenInput.type = 'hidden';
        hiddenInput.name = 'jumlah';
        hiddenInput.value = jumlahValue;
        document.getElementById('formPemesanan').appendChild(hiddenInput);

        // Hapus input yang terlihat agar tidak ganggu form
        jumlahInput.disabled = true;

        alert('Terima kasih! Pembayaran berhasil, anda akan diarahkan ke halaman pesanan saya.');
    });
</script>
</body>
</html>
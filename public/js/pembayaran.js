document.getElementById('bayarBtn').addEventListener('click', function () {
    const tujuan = document.getElementById('tujuan').value;
    const jumlah = document.getElementById('jumlah').value;

    if (!tujuan || !jumlah || jumlah <= 0) {
        alert('Silakan isi semua data dengan benar.');
        return;
    }

    alert(`Pembayaran sebesar Rp${jumlah} ke ${tujuan.toUpperCase()} berhasil diproses!`);
});
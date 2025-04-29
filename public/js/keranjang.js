document.getElementById('checkAll').addEventListener('change', function () {
        const checkboxes = document.querySelectorAll('.room-checkbox');
        checkboxes.forEach(cb => cb.checked = this.checked);
    });
    
    document.getElementById('pesanBtn').addEventListener('click', function () {
        const selectedRooms = [];
        document.querySelectorAll('.room-checkbox:checked').forEach(cb => {
    selectedRooms.push(cb.value);
        });
    
    if (selectedRooms.length === 0) {
        alert('Silakan pilih minimal satu kamar untuk dipesan.');
        return;
        }
    
    // Simpan data ke sessionStorage dan submit form
        sessionStorage.setItem('rooms', JSON.stringify(selectedRooms));
        document.getElementById('formPemesanan').submit();
    });
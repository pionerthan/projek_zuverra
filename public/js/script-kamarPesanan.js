document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('popupModal');
    const modalText = document.getElementById('modalText');
    const popupAction = document.getElementById('popupAction');
    const actionButtons = document.querySelectorAll('.action-btn');
    const closeModalBtn = document.getElementById('closeModal');

    let currentAction = '';

    actionButtons.forEach(button => {
        button.addEventListener('click', () => {
            currentAction = button.getAttribute('data-action');
            modalText.textContent = `Yakin ingin melakukan tindakan "${currentAction}"?`;
            popupAction.value = currentAction;
            modal.style.display = 'flex';
        });
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    document.getElementById('popupForm').addEventListener('submit', (e) => {
        e.preventDefault();
        if (currentAction === 'batal') {
            window.location.href = pesananUrl;
;
        } else {
            alert(`Tindakan "${currentAction}" berhasil diproses.`);
        }
        modal.style.display = 'none';
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("form");
    const button = form.querySelector("button[type='submit']");
    const modal = document.getElementById("popupModal");
    const closeModal = document.getElementById("closeModal");
  
    button.addEventListener("click", (e) => {
      e.preventDefault();
  
      const room = form.querySelector("input[name='room_number']").value.trim();
      const checkin = form.querySelector("input[name='checkin_date']").value;
      const checkout = form.querySelector("input[name='checkout_date']").value;
  
      if (!room || !checkin || !checkout) {
        showToast("Semua kolom harus diisi!");
        return;
      }
  
      modal.style.display = "flex"; // Tampilkan modal
    });
  
    closeModal.addEventListener("click", () => {
      modal.style.display = "none";
      form.submit(); // Submit form setelah tutup modal
    });
  });
  
  function showToast(msg) {
    const toast = document.createElement("div");
    toast.className = "toast";
    toast.innerText = msg;
    document.body.appendChild(toast);
  
    setTimeout(() => toast.classList.add("show"), 100);
    setTimeout(() => toast.classList.remove("show"), 2000);
    setTimeout(() => toast.remove(), 2500);
  }
  
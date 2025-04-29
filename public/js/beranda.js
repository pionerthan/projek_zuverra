document.addEventListener("DOMContentLoaded", function () {
    // Highlight footer saat diklik
    const footerBtns = document.querySelectorAll(".footer-btn");
    footerBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        footerBtns.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
      });
      button.addEventListener('mouseenter', () => {
        button.style.opacity = 0.85;
      });
  
      button.addEventListener('mouseleave', () => {
        button.style.opacity = 1;
      });
    });
  
    // Validasi form sebelum submit
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
      const room = form.querySelector('input[name="room_number"]').value;
      const checkin = form.querySelector('input[name="checkin_date"]').value;
      const checkout = form.querySelector('input[name="checkout_date"]').value;
  
      if (!room || !checkin || !checkout) {
        e.preventDefault();
        alert("Semua kolom harus diisi!");
      } else if (new Date(checkout) <= new Date(checkin)) {
        e.preventDefault();
        alert("Tanggal checkout harus setelah check-in.");
      }
    });
  });
  
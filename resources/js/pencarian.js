function filterKamar() {
    const input = document.getElementById('searchBox').value.toLowerCase();
    const cards = document.querySelectorAll('.kamar-card');
  
    cards.forEach(card => {
      const nama = card.getAttribute('data-nama').toLowerCase();
      if (nama.includes(input)) {
        card.style.display = '';
      } else {
        card.style.display = 'none';
      }
    });
  }
  
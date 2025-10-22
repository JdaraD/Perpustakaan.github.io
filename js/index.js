// genre random color
document.addEventListener('DOMContentLoaded', () => {
  const listItems = document.querySelectorAll('#genre-list li');

  listItems.forEach(item => {
    // warna acak
    const randomColor = `hsl(${Math.random() * 360}, 70%, 70%)`;
    item.style.backgroundColor = randomColor;

    // event klik
    item.addEventListener('click', () => {
      listItems.forEach(i => i.classList.remove('active'));
      item.classList.add('active');
    });
  });
});


// buku random color
document.addEventListener('DOMContentLoaded', () => {
    const bukuItems = document.querySelectorAll('#buku-list li');

    bukuItems.forEach(item => {
        // warna acak
        const randomColor = `hsl(${Math.random() *360}, 70%, 70%)`;
        item.style.backgroundColor = randomColor;

        // event klik
        item.addEventListener('click', () => {
            bukuItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        });
    });
});
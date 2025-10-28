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


// mapel random color
document.addEventListener('DOMContentLoaded', () => {
    const mapelItems = document.querySelectorAll('#mapel-list li');

    mapelItems.forEach(item => {
        // warna acak
        const randomColor = `hsl(${Math.random() *360}, 70%, 70%)`;
        item.style.backgroundColor = randomColor;

        // event klik
        item.addEventListener('click', () => {
            mapelItems.forEach(i => i.classList.remove('active'));
            item.classList.add('active');
        });
    });
});

// overlay form tambah buku
document.addEventListener('DOMContentLoaded', () => {
  const overlay = document.getElementById('tambah');
  const formContainer = document.querySelector('.container-form');

  overlay.addEventListener('click', (e) => {
    // Jika area yang diklik bukan form di tengah, maka tutup
    if (!formContainer.contains(e.target)) {
      closeTambah();
    }
  });
});

function openTambah() {
    document.getElementById("tambah").style.display = "block";
    document.body.classList.add("no-scroll");
};

function closeTambah() {
    document.getElementById("tambah").style.display = "none";
    document.body.classList.remove("no-scroll");
};

// notifikasi tambah buku
document.addEventListener("DOMContentLoaded", function() {
    const pesan = document.getElementById("pesan");
    if (pesan && pesan.innerText.trim() !== "") {
      pesan.style.display = "block";
      setTimeout(() => {
        pesan.style.display = "none";
        window.location.href = "index.php?page=daftarBuku";
      }, 3000);
    }
})


// overlay form edit buku
document.addEventListener('DOMContentLoaded', () => {
  const overlayEdit = document.getElementById('edit');
  const formContainerEdit = document.querySelector('.container-form-edit');

  overlayEdit.addEventListener('click', (e) => {
    // Jika area yang diklik bukan form di tengah, maka tutup
    if (!formContainerEdit.contains(e.target)) {
      closeEdit();
    }
  });
});

function openEdit() {
  document.getElementById("edit").style.display = "block";
  document.body.classList.add("no-scroll");
};

function closeEdit() {
  document.getElementById("edit").style.display = "none";
  document.body.classList.remove("no-scroll");
}
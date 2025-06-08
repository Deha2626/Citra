<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tree Age Calculator</title>
  <link rel="stylesheet" href="style1.css">
  <!-- Font Awesome untuk ikon kontak -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

  <!-- Header -->
  <header class="header">
    <!-- LOGO WEB DI SINI -->
    <img src="images/TreeLogo.png" alt="Logo" class="logo"> 
    <h1 class="site-title">Tree Age Calculator</h1>
  </header>

  <!-- Konten Utama -->
  <div class="container">
    <div class="card">
      <h1>Ayoo Hitung Umur Pohonmuuu!</h1>

      <div class="image-box">
        <img id="preview" class="tree-image" src="#" alt="Preview Gambar" style="display: none;">
      </div>
      <p id="filename" class="filename" style="display: none;"></p>


      <div class="buttons">
        <label for="upload" class="btn">Upload File</label>
        <input type="file" id="upload" style="display:none;">
        <button class="btn" onclick="hitungUmur()">Hitung</button>
      </div>

      <div class="subtitle">Umur Pohon Anda</div>
      <div class="age-box">
        <p id="hasil" class="age-text"></p>
      </div>
    </div>

    <!-- GAMBAR TINGKAT PERTUMBUHAN -->
    <div class="illustration">
      <div class="tree-level level-1" id="level-muda">
        <img src="images/TreeAge.png" alt="Pohon Muda" class="tree-stage">
        <div>Pohon Muda</div>
      </div>
      <div class="tree-level level-2" id="level-remaja">
        <img src="images/TreeAge.png" alt="Pohon Remaja" class="tree-stage">
        <div>Pohon Remaja</div>
      </div>
      <div class="tree-level level-3" id="level-pertengahan">
        <img src="images/TreeAge.png" alt="Pohon Pertengahan" class="tree-stage">
        <div>Pohon Pertengahan</div>
      </div>
      <div class="tree-level level-4" id="level-dewasa">
        <img src="images/TreeAge.png" alt="Pohon Dewasa" class="tree-stage">
        <div>Pohon Dewasa</div>
      </div>
      <div class="tree-level level-5" id="level-tua">
        <img src="images/TreeAge.png" alt="Pohon Tua" class="tree-stage">
        <div>Pohon Tua</div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="footer">
      <div class="footer-logo-center">
        <img src="images/TreeLogo.png" alt="Logo" class="footer-logo">
      </div>

      <hr class="footer-line">

      <div class="footer-content">
        <div class="footer-left">
          <p>© 2025 Website Pehitung Umur Pohon</p>
          <p>Dibuat Oleh – Agung Gunawan, Gilberd Lamuer, Dhea Adelia</p>
          <p>Proyek Akhir Semester 6 – Pengolahan Citra Digital</p>
        </div>

        <div class="footer-right">
          <h4>Kontak Kami</h4>
          <p><i class="fas fa-phone"></i> 081234567890</p>
          <p><i class="fas fa-envelope"></i> Kelompok6PCD@gmail.com</p>
          <p><i class="fas fa-map-marker-alt"></i> Jl. Amal Lama, Kel. Amal, Kec. Tarakan Timur, Kota Tarakan, Prov. Kalimantan Utara</p>
        </div>
      </div>
    
  </footer>  

  <script>
      document.getElementById('upload').addEventListener('change', function (e) {
      const file = e.target.files[0];
      const preview = document.getElementById('preview');
      const filename = document.getElementById('filename');

      if (file) {
        const reader = new FileReader();
        reader.onload = function (event) {
          preview.src = event.target.result;
          preview.style.display = 'block';
          filename.textContent = file.name;
          filename.style.display = 'block';
        };
        reader.readAsDataURL(file);
      }
    });

    function hitungUmur() {
      // --- 1. Hitung umur secara normal (ganti sesuai logika sebenarnya) ---
      let umur = 25; // ← Ganti dengan rumus kalau perlu
      document.getElementById("hasil").textContent = umur + " Tahun";

      // --- 2. Tentukan kategori berdasarkan umur ---
      let kategori = "";
      if (umur <= 5) kategori = "muda";
      else if (umur <= 15) kategori = "remaja";
      else if (umur <= 30) kategori = "pertengahan";
      else if (umur <= 60) kategori = "dewasa";
      else kategori = "tua";

      // --- 3. Reset semua pohon jadi abu (dimmed) ---
      const semuaLevel = ["muda", "remaja", "pertengahan", "dewasa", "tua"];
      semuaLevel.forEach(level => {
        const elemen = document.getElementById("level-" + level);
        if (elemen) {
          elemen.classList.add("dimmed");
        }
      });

      // --- 4. Aktifkan pohon kategori sesuai umur
      const aktif = document.getElementById("level-" + kategori);
      if (aktif) {
        aktif.classList.remove("dimmed");
      }
    }
  </script>

</body>
</html>

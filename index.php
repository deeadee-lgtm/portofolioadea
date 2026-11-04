<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Kerja</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h2 class="logo">MyCareer<span>.</span></h2>

    <nav>
        <button onclick="pindah('home')">Home</button>
        <button onclick="pindah('profil')">Profil</button>
        <button onclick="pindah('pengalaman')">Pengalaman</button>
        <button onclick="pindah('keahlian')">Keahlian</button>
        <button onclick="pindah('pendidikan')">Pendidikan</button>
        <button onclick="pindah('kontak')">Kontak</button>
    </nav>
</header>

<!-- HALAMAN HOME -->
<section id="home" class="halaman aktif">
    <div class="teks">
        <p class="label">PORTOFOLIO PROFESIONAL</p>

        <h1>Halo, Saya <span>ADEA FRISCIILA</span></h1>

        <h2>Calon Profesional Masa Depan</h2>

        <p>
            Selamat datang di portofolio saya.
            Website ini berisi informasi tentang diri saya,
            pendidikan, keahlian, dan pengalaman yang saya miliki.
        </p>

        <button class="tombol" onclick="pindah('profil')">
            Kenali Saya →
        </button>
    </div>

    <div class="foto">
        <img src="dede.jpeg" alt="Foto profil">
    </div>
</section>

<!-- HALAMAN PROFIL -->
<section id="profil" class="halaman">
    <div class="kotak">
        <h1>Tentang <span>Saya</span></h1>

        <p>
            Perkenalkan, nama saya adea friscilla.
            Saya adalah pribadi yang bertanggung jawab,
            disiplin, mau belajar, dan mampu bekerja sama
            dengan orang lain.
        </p>

        <p>
            Saya ingin terus mengembangkan kemampuan dan
            mendapatkan pengalaman baru untuk mempersiapkan
            diri memasuki dunia kerja.
        </p>

        <button class="tombol" onclick="pindah('pengalaman')">
            Selanjutnya →
        </button>
    </div>
</section>

<!-- HALAMAN PENGALAMAN -->
<section id="pengalaman" class="halaman">
    <div class="kotak">
        <h1>Pengalaman <span>Saya</span></h1>

        <div class="kartu">
            <h3>Pengalaman Organisasi</h3>
            <p>
                Belajar bekerja sama, berkomunikasi,
                dan bertanggung jawab dalam kegiatan kelompok.
            </p>
        </div>

        <div class="kartu">
            <h3>Proyek Sekolah</h3>
            <p>
                Membuat tugas dan proyek sesuai bidang
                pembelajaran untuk meningkatkan keterampilan.
            </p>
        </div>

        <p class="catatan">
            Ganti bagian ini dengan pengalaman asli kamu.
            Jika belum memiliki pengalaman kerja, bagian ini
            bisa diisi dengan proyek sekolah atau organisasi.
        </p>

        <button class="tombol" onclick="pindah('keahlian')">
            Lihat Keahlian →
        </button>
    </div>
</section>

<!-- HALAMAN KEAHLIAN -->
<section id="keahlian" class="halaman">
    <div class="kotak">
        <h1>Keahlian <span>Saya</span></h1>

        <div class="kartu-container">
            <div class="kartu">
                <h3>💻 Komputer</h3>
                <p>Menggunakan aplikasi komputer dasar.</p>
            </div>

            <div class="kartu">
                <h3>🤝 Kerja Sama</h3>
                <p>Mampu bekerja sama dalam kelompok.</p>
            </div>

            <div class="kartu">
                <h3>🎨 Desain</h3>
                <p>Membuat desain dan tampilan sederhana.</p>
            </div>
        </div>

        <button class="tombol" onclick="pindah('pendidikan')">
            Pendidikan →
        </button>
    </div>
</section>

<!-- HALAMAN PENDIDIKAN -->
<section id="pendidikan" class="halaman">
    <div class="kotak">
        <h1>Riwayat <span>Pendidikan</span></h1>

        <div class="kartu">
            <h3>Nama Sekolah</h3>
            <p>SMK NEGRI 1 TANJUNG PURA.</p>
            <p>Tahun: 2023–sekarang</p>
        </div>

        <button class="tombol" onclick="pindah('kontak')">
            Hubungi Saya →
        </button>
    </div>
</section>

<!-- HALAMAN KONTAK -->
<section id="kontak" class="halaman">
    <div class="kotak">
        <h1>Hubungi <span>Saya</span></h1>

        <p>
            Terima kasih telah mengunjungi portofolio saya.
            Saya terbuka untuk belajar, berkolaborasi,
            dan mendapatkan kesempatan baru.
        </p>

        <p>Email: adeafriscilla@gmail.com</p>

        <button class="tombol" onclick="pindah('home')">
            ← Kembali ke Home
        </button>
    </div>
</section>

<footer>
    <p>© 2026 MyCareer | Portofolio Kerja</p>
</footer>

<script>
    function pindah(id) {
        document.querySelectorAll('.halaman').forEach(function(halaman) {
            halaman.classList.remove('aktif');
        });

        document.getElementById(id).classList.add('aktif');

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>

</body>
</html>
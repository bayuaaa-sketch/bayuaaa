<summary><b>Klik untuk melihat kode lengkap</b> (coba kerjakan sendiri dulu!)</summary><?php
// ============================================
// BAGIAN 1: DATA & LOGIKA (PHP)
// ============================================

// Atur zona waktu ke WITA (Bali) agar jam sesuai
date_default_timezone_set('Asia/Makassar');

// Data diri (ganti dengan data kamu sendiri)
$nama       = "Ahmad Asroni";
$panggilan  = "Asroni";
$peran      = "Mahasiswa Teknik Informatika";
$tahunLahir = 2006;
$kota       = "Denpasar";
$github     = "ahmadasroni38";
$email      = "email@contoh.com";
$instagram  = "https://www.instagram.com/bayuaaa_08?cplk=MWpjdHRscmtiZW51cA==";
$minat      = "Memiliki minat dalam teknologi informasi dan jaringan komputer";
$tentang    = " termimakasih sudah membuka CV ini,
                saya merupakan lulusan SMK Negeri 1 Denpasar
                jurusan Teknik Komputer dan Jaringan, dan saya melanjutkan pendidikan 
                saya di kampus Institut Bisnis dan Teknologi Indonesia (INSTIKI). Saya memiliki
                pemahaman mengenai komponen komputer, pengelolaan
                sistem jaringan, dan pengoperasian komputer.
                Saya juga memiliki minat untuk terus mengembangkan
                kemampuan di bidang teknologi informasi.";
$pendidkan1 = "SMK Negeri 1 Denpasar ";
$pendidkan2 = "Institut Bisnis dan Teknologi Indonesia (INSTIKI)";
$jurusan1   = "Teknik Komputer dan Jaringan (TKJ)";
$jurusan2   = "Rekayasa Sistem Komputer";
$pengalaman = "<li>PKL Technical Support - PT Biseka</li>
                <li>PKL Pemasangan Jaringan FTTH - PT Greenet</li>
                <li>PSB Provisioning IndiHome, IndiBase - PT Telkom Akses</li>
                <li>Anggota HIMA RSK - Seksi Humas</li>";
$keahlian   ="<li>Memahami konsep FTTH (Fiber To The Home)</li>
                <li>Memahami IP Address dan jaringan komputer</li>
                <li>Menggunakan Cisco Packet Tracer</li>
                <li>Mengoperasikan Windows dan Linux Debian</li>
                <li>Memahami komponen dan perakitan komputer</li>
                <li>Menggunakan Microsoft Office</li>
                <li>Memahami dasar pemrograman Python</li>";
$hobiminat  = "<li>Mempelajari teknologi informasi</li>
                <li>Mempelajari bahasa dan budaya Jepang</li>
                <li>Membaca berita dan perkembangan teknologi,politik, dan ekonomi</li>
                <li>menonton anime</li>";


// Menghitung umur dari tahun lahir
$tahunSekarang = (int) date('Y');
$umur          = $tahunSekarang - $tahunLahir;

// Menentukan sapaan berdasarkan jam sekarang (0-23)
$jam = (int) date('H');

if ($jam >= 4 && $jam < 11) {
    $sapaan = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

// Status: masih remaja atau sudah dewasa (operator ternary)
$kategoriUmur = ($umur >= 18) ? "dewasa" : "remaja";

// Tanggal hari ini dalam format 13-10-2026
$tanggalHariIni = date('d-m-Y');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Curriculum Vitae I Putu Bayu Aryanata">
    <title>CV - I Putu Bayu Aryanata</title>

    <style>
        * {
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f1f3f5;
            color: #333;
            line-height: 1.7;
        }

        header {
            background: #17365d;
            color: white;
            text-align: center;
            padding: 35px 20px;
        }

        header h1 {
            margin-bottom: 5px;
        }

        header p {
            margin-top: 5px;
        }

        nav {
            background: #102744;
            padding: 12px;
            text-align: center;
            position: sticky;
            top: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 12px;
            font-weight: bold;
        }

        nav a:hover {
            color: #8ed8ff;
        }

        main {
            max-width: 900px;
            margin: 25px auto;
            padding: 0 15px;
        }

        section {
            background: white;
            margin-bottom: 20px;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #00000012;
            scroll-margin-top: 70px;
        }

        h2 {
            color: #17365d;
            border-bottom: 2px solid #17365d;
            padding-bottom: 8px;
        }

        .foto {
            width: 150px;
            height: 180px;
            object-fit: cover;
            border-radius: 5px;
            border: 3px solid white;
            margin-top: 15px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #17365d;
            color: white;
        }

        ul, ol {
            padding-left: 25px;
        }

        .sosial a {
            display: inline-block;
            margin-right: 15px;
            color: #175a9c;
        }

        label {
            display: block;
            margin-top: 12px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #bbb;
            border-radius: 5px;
            font: inherit;
        }

        button {
            background: #17365d;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 15px;
        }

        button:hover {
            background: #28558a;
        }

        footer {
            background: #102744;
            color: white;
            text-align: center;
            padding: 20px;
        }

        @media (max-width: 600px) {
            nav a {
                display: inline-block;
                margin: 5px;
                font-size: 14px;
            }

            section {
                padding: 18px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>


    <header>
        <h1> <?= $nama ?> </h1>
        <p>Umur: <?= $umur ?> tahun (<?= $kategoriUmur ?>)</p>
        <p><strong><?= $peran?></strong></p>
        <p>
            <em> <?= $minat?></em>
        </p>

    
        <img
            src="fotocv.jpg"
            alt="Foto profil I Putu Bayu Aryanata"
            class="foto"
        >
    </header>


    <nav>
        <a href="#tentang">Tentang</a>
        <a href="#pendidikan">Pendidikan</a>
        <a href="#keahlian">Keahlian</a>
        <a href="#kontak">Kontak</a>
    </nav>

    <main>


        <section id="tentang">
            <h2>Tentang Saya</h2>

            <p>
                <?= $sapaan ?> <?=$tentang?>
            </p>

            <p>
                Saya adalah pribadi yang disiplin, teliti,
                bertanggung jawab, dan terbuka untuk mempelajari
                hal-hal baru.
            </p>
        </section>


        <section id="pendidikan">
            <h2>Riwayat Pendidikan</h2>

            <ol>
                <li>
                    <?= $pendidkan1 ?> -
                    <?= $jurusan1 ?> 
                </li>
                <li>
                    <?= $pendidkan2 ?> -
                    <?= $jurusan2 ?>
                </li>
            </ol>

            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Institusi</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td><?= $pendidkan1 ?></td>
                        <td><?= $jurusan2 ?></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td><?= $pendidkan2 ?></td>
                        <td><?= $jurusan2 ?></td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- PENGALAMAN -->
        <section id="pengalaman">
            <h2>Pengalaman</h2>

            <ul>
                <?=$pengalaman?>
            </ul>
        </section>

        <!-- 6. KEAHLIAN DAN HOBI -->
        <section id="keahlian">
            <h2>Keahlian</h2>

            <ul>
                <?= $keahlian ?>
            </ul>

            <h2>Hobi dan Minat</h2>

            <ul>
                <?=$hobiminat?>
            </ul>
        </section>

        <section id="media-sosial">
            <h2>Media Sosial dan Portofolio</h2>

            <p>
                Berikut tempat untuk mengunjungi profil dan
                portofolio saya:
            </p>

            <div class="sosial">
                <a href="https://github.com/"
                   target="_blank"
                   rel="noopener noreferrer">
                    GitHub
                </a>

                <a href="<?= $instagram ?>"
                   target="_blank"
                   rel="noopener noreferrer">
                    instagram
                </a>

                <a href="https://wa.me/qr/S7KSIOYR7Q2OO1"
                   target="_blank"
                   rel="noopener noreferrer">
                    kontak
                </a>

                <a href="bayuaryanata07@gmail.com=="
                   target="_blank"
                   rel="noopener noreferrer">
                    email
                </a>

            </div>

        
        </section>


        <section id="kontak">
            <h2>Hubungi Saya</h2>

            <form action="mailto:iputubayuaryanata07@gmail.com"
                  method="post"
                  enctype="text/plain">

                <label for="nama">Nama:</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    placeholder="Masukkan nama kamu"
                    required
                >

                <label for="email">Email:</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="nama@email.com"
                    required
                >

                <label for="pesan">Pesan:</label>
                <textarea
                    id="pesan"
                    name="pesan"
                    rows="5"
                    placeholder="Tuliskan pesan kamu..."
                    required
                ></textarea>

                <button type="submit">Kirim Pesan</button>
            </form>
        </section>

    </main>


    <footer>
        <p>
           Halaman ini dibuat dengan PHP 
           &middot; Diakses pada <?= $tanggalHariIni ?>, pukul <?= date('H:i') ?> WITA 
           <br>&copy; <?= $tahunSekarang ?> <?=$nama?>.Semua hak dilindungi.
        </p>
    </footer>

</body>
</html>
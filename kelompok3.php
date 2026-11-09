<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="kelompok3.css">
    <link rel="stylesheet" href="kelompok3_bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@700&family=Nunito:wght@500;700&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeshop</title>
</head>

<body class="body-kelompok-3">
    <header class="header-kelompok-3"> <?php include __DIR__ . '/includes/header_kelompok_3.php'; ?> </header>
    <div class="container-sm container-kelompok-3">
        <?php
        $tampil_sidebar_kelompok_3 = !isset($_GET['hal']) || in_array($_GET['hal'], ['beranda', 'gallery'], true);
        ?>
        <div class="row g-3">
            <?php if ($tampil_sidebar_kelompok_3): ?>
                <aside class="col-md-4 col-lg-3">
                    <div class="card-kelompok-3 sidebar-kelompok-3">
                        <h2 class="section-title-kelompok-3">Jam Operasional</h2>
                        <p class="jam-hari-kelompok-3">Setiap Hari</p>
                        <p class="jam-waktu-kelompok-3">09.00 - 24.00</p>

                        <hr class="sidebar-garis-kelompok-3">

                        <h2 class="section-title-kelompok-3">Lokasi &amp; Kontak</h2>
                        <ul class="sidebar-kontak-kelompok-3">
                            <li><i class="fa-solid fa-location-dot"></i><span>Jl. Contoh No. 1, Kota Anda</span></li>
                            <li><i class="fa-solid fa-phone"></i><span>0812-3456-7890</span></li>
                            <li><i class="fa-brands fa-instagram"></i><span>@cerita.seduh</span></li>
                        </ul>

                        <hr class="sidebar-garis-kelompok-3">

                        <h2 class="section-title-kelompok-3">Join Member</h2>
                        <p class="sidebar-member-teks-kelompok-3">Kumpulkan poin dan nikmati penawaran eksklusif setiap kali
                            berkunjung.</p>
                        <a href="kelompok3.php?hal=member"
                            class="button-kelompok-3 button-dark-kelompok-3 sidebar-member-tombol-kelompok-3">Daftar
                            Sekarang</a>
                    </div>
                </aside>
            <?php endif; ?>
            <div class="<?= $tampil_sidebar_kelompok_3 ? 'col-md-8 col-lg-9' : 'col-12' ?>">
                <main class="main-container-kelompok-3">
                    <?php
                    if (isset($_GET['hal'])) {
                        if ($_GET['hal'] == "beli") {
                            include __DIR__ . "/pages/831_beli.php";
                        } else if ($_GET['hal'] == "reservasi") {
                            include __DIR__ . "/pages/841_reservasi.php";
                        } else if ($_GET['hal'] == "member") {
                            include __DIR__ . "/pages/838_member.php";
                        } else if ($_GET['hal'] == "gallery") {
                            include __DIR__ . "/pages/gallery_kelompok_3.php";
                        } else {
                            echo "halaman tidak ditemukan";
                        }
                    } else { ?>
                        <section class="card-kelompok-3 card-hero-kelompok-3">
                            <h2>
                                <span>Satu Cangkir</span><span>Seribu Cerita</span>
                            </h2>
                            <div class="hero-action-kelompok-3">
                                <a href="kelompok3.php?hal=beli" class="button-kelompok-3 button-light-kelompok-3">Pesan
                                    Kopi</a>
                                <a href="kelompok3.php?hal=reservasi"
                                    class="button-kelompok-3 button-outline-light-kelompok-3">Reservasi</a>
                            </div>
                        </section>

                        <!-- Bagian Rekomendasi Produk -->
                        <section class="card-kelompok-3 card-wide-kelompok-3" id="menu">
                            <h2 class="section-title-kelompok-3">Rekomendasi Kami</h2>
                            <p class="section-intro-kelompok-3">Tiga sajian pilihan untuk menemani hari Anda, dari seduhan
                                house blend
                                hingga
                                pastry yang dipanggang segar.</p>
                            <div class="produk-grid-kelompok-3">
                                <article class="produk-card-kelompok-3">
                                    <img class="produk-foto-kelompok-3" src="./assets/galeri/Guren.jpeg"
                                        alt="Secangkir kopi hitam di atas meja marmer" width="600" height="450"
                                        loading="lazy" />
                                    <div class="product-body-kelompok-3">
                                        <h3>Iced Kospu Guren</h3>
                                        <p>
                                            Paduan espresso house blend dengan susu creamy dan kemanisan
                                            seimbang dari gula aren murni.
                                        </p>
                                </article>
                                <article class="produk-card-kelompok-3">
                                    <img class="produk-foto-kelompok-3" src="./assets/galeri/CreamCheese.jpeg"
                                        alt="Secangkir kopi hitam di atas meja marmer" width="600" height="450"
                                        loading="lazy" />
                                    <div class="produk-body">
                                        <h3>Iced Cheezy Latte</h3>
                                        <p>
                                            Paduan Susu dan Krim dengan tambahan keju lokal yang semakin menambah cita rasa.
                                        </p>
                                </article>
                                <article class="produk-card-kelompok-3">
                                    <img class="produk-foto-kelompok-3" src="./assets/galeri/magic.jpeg"
                                        alt="Secangkir kopi hitam di atas meja marmer" width="600" height="450"
                                        loading="lazy" />
                                    <div class="product-body">
                                        <h3>Magic Seasonal</h3>
                                        <p>
                                            Paduan double ristretto dengan susu dan notes seasonal beans dari berbagai
                                            origin dan kisah
                                            yang
                                            menarik.
                                        </p>
                                </article>
                            </div>
                        </section>

                        <!-- Bagian Jam Operasional -->
                        <section class="card-kelompok-3 card-wide-kelompok-3" id="jam-operasional">
                            <h2 class="section-title-kelompok-3">Jam Operasional</h2>
                            <p class="jam-hari-kelompok-3">Setiap Hari</p>
                            <p class="jam-waktu-kelompok-3">09.00 - 24.00</p>
                            <p>
                                Mampir kapan saja dari pagi hingga malam. Pastry kami dipanggang segar
                                setiap pagi.
                            </p>
                        </section>

                        <!-- Bagian Promo -->
                        <section class="card-kelompok-3 card-wide-kelompok-3" id="promo">
                            <h2 class="section-title-kelompok-3">Promo</h2>
                            <p class="section-intro-kelompok-3">
                                Penawaran khusus untuk menemani seduhan Anda.
                            </p>
                            <div class="promo-grid-kelompok-3">
                                <article class="promo-card-kelompok-3">
                                    <span class="promo-tag-kelompok-3">KOPAG!!!</span>
                                    <h3>Paket Kopi & Pastry</h3>
                                    <p>
                                        Nikmati kopi pilihan bersama pastry segar dengan harga spesial
                                        untuk memulai hari.
                                    </p>
                                </article>
                                <article class="promo-card-kelompok-3">
                                    <span class="promo-tag-kelompok-3">Lunch Hour</span>
                                    <h3>Paket Kopi & Pastry</h3>
                                    <p>
                                        Nikmati kopi ataupun menu segar lain bersama dengan savory lunch menu kami.
                                    </p>
                                </article>
                                <article class="promo-card-kelompok-3">
                                    <span class="promo-tag-kelompok-3">Dinner Services</span>
                                    <h3>Paket Kopi & Pastry</h3>
                                    <p>
                                        Nongkrong malam ataupun begadang ditemani kopi kami yang fresh dan berkualitas.
                                    </p>
                                </article>
                            </div>
                        </section>

                        <!-- Bagian Bagian Keuntungan Member -->
                        <section class="card-kelompok-3 card-wide-kelompok-3" id="member">
                            <h2 class="section-title-kelompok-3">Keuntungan Member</h2>
                            <p class="section-intro-kelompok-3">Jadi bagian dari Cerita Seduh dan nikmati manfaat setiap
                                kali
                                berkunjung. Tanyakan kepada barista kami untuk bergabung.
                            </p>
                            <div class="keuntungan-member-grid-kelompok-3">
                                <article class="keuntungan-item-kelompok-3">
                                    <span class="keuntungan-ikon-kelompok-3">⭐</span>
                                    <div>
                                        <h3>Kumpulkan Poin</h3>
                                        <p>Setiap pembelian menambah poin yang bisa ditukar dengan minuman
                                            atau pastry.</p>
                                    </div>
                                </article>
                                <article class="keuntungan-item-kelompok-3">
                                    <span class="keuntungan-ikon-kelompok-3">⭐</span>
                                    <div>
                                        <h3>Special Offers</h3>
                                        <p>Member mendapatkan akses eksklusif ke penawaran khusus dan promo menarik.</p>
                                    </div>
                                </article>
                                <article class="keuntungan-item-kelompok-3">
                                    <span class="keuntungan-ikon-kelompok-3">⭐</span>
                                    <div>
                                        <h3>Suprise Bonus</h3>
                                        <p>Member berkesempatan mendapatkan bonus spesial secara acak seperti tumbler hingga
                                            lunch
                                            container.
                                        </p>
                                    </div>
                                </article>
                                <article class="keuntungan-item-kelompok-3">
                                    <span class="keuntungan-ikon-kelompok-3">⭐</span>
                                    <div>
                                        <h3>Special Services</h3>
                                        <p>Member mendapatkan akses ke layanan khusus seperti reservasi area pribadi dan
                                            layanan
                                            pelanggan yang
                                            lebih personal.</p>
                                    </div>
                                </article>
                            </div>
                        </section>
                        <?php
                    }
                    ?>
                </main>
            </div>
        </div>
    </div>
    <footer> <?php include __DIR__ . '/includes/footer_kelompok_3.php'; ?> </footer>
</body>

</html>
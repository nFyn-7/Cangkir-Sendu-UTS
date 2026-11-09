
<div class="card-wide-kelompok-3 card-kelompok-3">
    <h2 class="section-title-kelompok-3">Formulir Reservasi_841</h2>
    <p class="section-intro-kelompok-3">Silakan lengkapi detail di bawah ini untuk mereservasi meja Anda. Informasi yang
        Anda berikan akan diproses secara aman oleh sistem kami.</p>

    <div class="layout-split-kelompok-3">
        
        <div>
            <img src="./assets/Cerita-Seduh.png" alt="Profile Picture" class="profile-pic-kelompok-3">
        </div>

        <div>
            <form method="POST" action="" class="form-wrapper-kelompok-3">
                <div class="form-group-kelompok-3">
                    <label for="nama_841" class="form-label-kelompok-3">Nama Lengkap</label>
                    <input type="text" id="nama_841" name="nama_841" required class="form-input-kelompok-3">
                </div>
                <div class="form-group-kelompok-3">
                    <label for="tanggal_841" class="form-label-kelompok-3">Tanggal Reservasi</label>
                    <input type="date" id="tanggal_841" name="tanggal_841" required class="form-input-kelompok-3">
                </div>
                <div class="form-group-kelompok-3">
                    <label for="seat_841" class="form-label-kelompok-3">Jumlah Seat</label>
                    <input type="number" id="seat_841" name="seat_841" min="1" required class="form-input-kelompok-3">
                </div>
                <div class="form-group-kelompok-3">
                    <label for="kontak_841" class="form-label-kelompok-3">Nomor Kontak</label>
                    <input type="number" id="kontak_841" name="kontak_841" required class="form-input-kelompok-3">
                </div>
                <div class="form-group-kelompok-3">
                    <label for="detail_841" class="form-label-kelompok-3">Detail Tambahan</label>
                    <textarea id="detail" name="detail_841" rows="4" class="form-input-kelompok-3"></textarea>
                </div>
                <button type="submit" name="submit_reservasi_841"
                    class="button-kelompok-3 button-dark-kelompok-3 section-action-kelompok-3"
                    style="width: 100%; margin-top: 10px;">
                    Konfirmasi Reservasi
                </button>
            </form>
        </div>
        
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit_reservasi_841'])) {

    $nama_841 = htmlspecialchars($_POST['nama_841']);
    $tanggal_841 = htmlspecialchars($_POST['tanggal_841']);
    $seat_841 = htmlspecialchars($_POST['seat_841']);
    $kontak_841 = htmlspecialchars($_POST['kontak_841']);
    $detail_841 = htmlspecialchars($_POST['detail_841']);

    echo '<div class="card-wide-kelompok-3 card-kelompok-3 result-container-kelompok-3">';
    echo '<h3 class="section-title-kelompok-3" style="margin-bottom: 15px;">Ringkasan Reservasi Anda</h3>';

    echo '<div class="result-grid-kelompok-3">';

    echo '<div class="result-label-kelompok-3">Nama</div>';
    echo '<div>: ' . $nama_841 . '</div>';

    echo '<div class="result-label-kelompok-3">Tanggal</div>';
    echo '<div>: ' . $tanggal_841 . '</div>';

    echo '<div class="result-label-kelompok-3">Jumlah Seat</div>';
    echo '<div>: ' . $seat_841 . ' Kursi</div>';

    echo '<div class="result-label-kelompok-3">Kontak</div>';
    echo '<div>: ' . $kontak_841 . '</div>';

    echo '<div class="result-label-kelompok-3">Detail Tambahan</div>';
    echo '<div>: ' . nl2br($detail_841) . '</div>';

    echo '</div>';
    echo '</div>';
}
?>

<style>
.layout-split-kelompok-3 {
    display: grid;
    grid-template-columns: 2fr 10fr;
    gap: 20px;
    width: 100%;
    align-items: start;
}

.profile-pic-kelompok-3 {
    width: 160px;
    height: 160px;
    object-fit: cover;
    border-radius: 5%;
    background-color: var(--header-bg);
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: border-radius 0.4s ease;
}

@media (max-width: 300px) {
    .profile-pic-kelompok-3 {
        border-radius: 50%;
    }
    .layout-split-kelompok-3 {
        grid-template-columns: 1fr; 
        justify-items: center;      
    }
}

.form-wrapper-kelompok-3 {
    width: 100%;
    max-width: 600px;
    text-align: left;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.form-group-kelompok-3 {
    display: flex;
    flex-direction: column;
}

.form-label-kelompok-3 {
    font-weight: 700;
    margin-bottom: 6px;
    color: var(--primary-dark);
}

.form-input-kelompok-3 {
    padding: 12px;
    border: 2px solid var(--primary);
    border-radius: 12px;
    font-family: var(--font-body);
    font-size: 1rem;
    color: var(--text-dark);
    background-color: var(--white);
    resize: vertical;
}

.result-container-kelompok-3 {
    margin-top: 20px;
    background-color: var(--card-bg);
    text-align: left;
    align-items: flex-start;
    border-left: 6px solid var(--primary-dark);
    padding: 30px;
}

.result-grid-kelompok-3 {
    display: grid;
    grid-template-columns: 150px 1fr;
    gap: 10px;
    width: 100%;
    font-family: var(--font-body);
    color: var(--text-dark);
    font-size: 1.05rem;
}

.result-label-kelompok-3 {
    font-weight: 700;
}
</style>
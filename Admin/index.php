<?php include '../assets/template/head.php'; ?>
<main><br>
<div class="container-fluid px-4">
    <h2><b>DASHBOARD</b></h2>
    <p>Halaman Utama Admin</p>
    <div class="row">

    <div class="col col-lg-4">
        <a href="master_berita.php">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Berita</div>
                <div class="card-footer d-flex align-item-center justify-content-between">Lihat Detail</div>
            </div>
            </a>
        </div>

        <div class="col col-lg-4">
        <a href="master_jabatan.php">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Jabatan</div>
                <div class="card-footer d-flex align-item-center justify-content-between">Lihat Detail</div>
            </div>
            </a>
        </div>

        <div class="col col-lg-4">
        <a href="master_jurusan.php">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Jurusan</div>
                <div class="card-footer d-flex align-item-center justify-content-between">Lihat Detail</div>
            </div>
            </a>  
        </div>

        <div class="col col-lg-4">
        <a href="master_mapel.php">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Mata Pelajaran</div>
                <div class="card-footer d-flex align-item-center justify-content-between">Lihat Detail</div>
            </div>
            </a>
        </div>

        <div class="col col-lg-4">
        <a href="master_gtk.php">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Guru & Tenaga Kerja</div>
                <div class="card-footer d-flex align-item-center justify-content-between">Lihat Detail</div>
            </div>
            </a>
        </div>

    </div>
</div>
</main>
<?php include '../assets/template/footer.php'; ?>
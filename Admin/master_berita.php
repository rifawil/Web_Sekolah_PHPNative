<?php include '../assets/template/head.php'; ?>
<main><br>
    <div class="container-fluid px-4">
        <h2><b>MASTER BERITA</b></h2>
        <p>BERITA</p>
        
            <a href="input_berita.php">
                <button class = "btn btn primary mb-3">Tambahkan Berita Baru +</button>
            </a>
            <table class="table" id="datatablesSimple">
            <thead>
                <th>ID Berita</th>
                <th>Judul</th>
                <th>Isi Berita</th>
                <th>Nama Pengupload</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </thead>

            <?php
                $sql = "SELECT * FROM berita;";
                $result = $conn->query($sql);
            ?>

            <tbody>
            <?php while ($row = $result->fetch_array()) : ?>
                <tr>
                    <td><?=$row['id_berita']?></td>
                    <td><?=$row['judul']?></td>
                    <td><?=$row['isi_berita']?></td>
                    <td><?=$row['nama']?></td>
                    <td><?=$row['tanggal']?></td>
                    <td>
					   <img src="../assets/img/<?= $row['foto'] ?>" width=100 height=100>
                    </td>
            
                <td>
                <a href ="edit_berita.php?ID=<?= $row['id_berita'] ?>">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>

                <a href ="hapus_berita.php?ID=<?= $row['id_berita'] ?>">
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </a>
            </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</main>
<?php include '../assets/template/footer.php'; ?>
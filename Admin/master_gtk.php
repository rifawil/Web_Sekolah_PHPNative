<?php include '../assets/template/head.php'; ?>
<main><br>
    <div class="container-fluid px-4">
        <h2><b>MASTER GTK</b></h2>
        <p>GURU & TENAGA KERJA</p>
        
            <a href="input_gtk.php">
                <button class = "btn btn primary mb-3">Tambahkan GTK Baru +</button>
            </a>
            <table class="table" id="datatablesSimple">
            <thead>
                <th>ID GTK</th>
                <th>Nama</th>
                <th>Mapel</th>
                <th>Jurusan</th>
                <th>Jabatan</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </thead>

            <?php
                $sql = "SELECT gtk.id_gtk, nama_gtk, gtk.nama_gtk as nama_gtk, mapel.nama_mapel as nama_mapel, jurusan.nama_jurusan as nama_jurusan, jabatan.nama_jabatan as nama_jabatan, gtk.foto FROM gtk
                INNER JOIN mapel
                ON mapel.id_mapel = gtk.id_mapel
                INNER JOIN jurusan
                ON jurusan.id_jurusan = gtk.id_jurusan
                INNER JOIN jabatan
                ON jabatan.id_jabatan = gtk.id_jabatan ORDER by gtk.id_gtk asc";
                $result = $conn->query($sql);
            ?>

            <tbody>
            <?php while ($row = $result->fetch_array()) : ?>
                <tr>
                    <td><?=$row['id_gtk']?></td>
                    <td><?=$row['nama_gtk']?></td>
                    <td><?=$row['nama_mapel']?></td>
                    <td><?=$row['nama_jurusan']?></td>
                    <td><?=$row['nama_jabatan']?></td>
                    <td>
					   <img src="../assets/img/<?= $row['foto'] ?>" width=100 height=100>
                    </td>
            
                <td>
                <a href ="edit_gtk.php?ID=<?= $row['id_gtk'] ?>">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>

                <a href ="hapus_gtk.php?ID=<?= $row['id_gtk'] ?>">
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
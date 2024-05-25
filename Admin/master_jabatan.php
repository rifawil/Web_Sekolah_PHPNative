<?php include '../assets/template/head.php'; ?>
<main><br>
    <div class="container-fluid px-4">
        <h2><b>MASTER Jabatan</b></h2>
        <p>JABATAN</p>
        
            <a href="input_jabatan.php">
                <button class = "btn btn primary mb-3">Tambahkan Jabatan Baru+</button>
            </a>
            <table class="table" id="datatablesSimple">
            <thead>
                <th>ID Jabatan</th>
                <th>Nama Jabatan</th>
            </thead>

            <?php
                $sql = "SELECT * FROM jabatan;";
                $result = $conn->query($sql);
            ?>

            <tbody>
            <?php while ($row = $result->fetch_array()) : ?>
                <tr>
                    <td><?=$row['id_jabatan']?></td>
                    <td><?=$row['nama_jabatan']?></td>
            
                <td>
                <a href ="edit_jabatan.php?IDJAB=<?= $row['id_jabatan'] ?>">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>

                <a href ="hapus_jabatan.php?IDJAB=<?= $row['id_jabatan'] ?>">
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
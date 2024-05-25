<?php include '../assets/template/head.php'; ?>
<main><br>
    <div class="container-fluid px-4">
        <h2><b>MASTER JUrusan</b></h2>
        <p>JURUSAN</p>
        
            <a href="input_jurusan.php">
                <button class = "btn btn primary mb-3">Tambahkan Jurusan Baru +</button>
            </a>
            <table class="table" id="datatablesSimple">
            <thead>
                <th>ID Jurusan</th>
                <th>Judul</th>
                 <th>Gambar</th>
            </thead>

            <?php
                $sql = "SELECT * FROM jurusan;";
                $result = $conn->query($sql);
            ?>

            <tbody>
            <?php while ($row = $result->fetch_array()) : ?>
                <tr>
                    <td><?=$row['id_jurusan']?></td>
                    <td><?=$row['nama_jurusan']?></td>

                         
                    <td>
                         <img src="../assets/img/<?= $row['foto'] ?>" width=100 height=100>
                    </td>
                </td>
            
                <td>
                <a href ="edit_jurusan.php?IDJUR=<?= $row['id_jurusan'] ?>">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>

                <a href ="hapus_jurusan.php?IDJUR=<?= $row['id_jurusan'] ?>">
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
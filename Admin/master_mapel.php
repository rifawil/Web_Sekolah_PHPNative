<?php include '../assets/template/head.php'; ?>
<main><br>
    <div class="container-fluid px-4">
        <h2><b>MASTER MAPEL</b></h2>
        <p>MAPEL</p>
        
            <a href="input_mapel.php">
                <button class = "btn btn primary mb-3">Tambahkan Mapel Baru +</button>
            </a>
            <table class="table" id="datatablesSimple">
            <thead>
                <th>ID Mapel</th>
                <th>Nama Mapel</th>
            </thead>

            <?php
                $sql = "SELECT * FROM mapel;";
                $result = $conn->query($sql);
            ?>

            <tbody>
            <?php while ($row = $result->fetch_array()) : ?>
                <tr>
                    <td><?=$row['id_mapel']?></td>
                    <td><?=$row['nama_mapel']?></td>
                    <td>
                </td>
            
                <td>
                <a href ="edit_mapel.php?IDMAP=<?= $row['id_mapel'] ?>">
                    <button class="btn btn-primary"><i class="fas fa-edit"></i></button>
                </a>

                <a href ="hapus_mapel.php?IDMAP=<?= $row['id_mapel'] ?>">
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
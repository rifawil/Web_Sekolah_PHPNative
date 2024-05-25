<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Edit Berita</h2>
		<p>Perbarui Mapel terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Edit Mapel</b>
			</div>
			<div class="card-body">
				<?php
                    $sql = "SELECT * FROM mapel WHERE id_mapel='" . $_GET['IDMAP'] . "';";
                    $result = $conn->query($sql);
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <form action="edit_mapel.php?IDMAP=<?= $_GET['IDMAP'] ?>" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDMAP" id="IDMAP" value="<?= $data['id_mapel'] ?>" readonly>
						<label for="IDMAP">ID Mapel</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_mapel" id="nama_mapel"
						placeholder="nama_mapel" value="<?= $data['nama_mapel'] ?>">
						<label for="nama_mapel">Nama Mapel</label>
					</div>

					<input class="btn btn-primary w-100" type="submit" name="submit" value="Submit">
				</form>
			</div>			
		</div>
	</div>
</main>
<?php include '../assets/template/footer.php'; ?>

<?php 
	if (isset($_POST['submit'])){
        {
            $sql = "UPDATE mapel SET nama_mapel='" . $_POST['nama_mapel']
            . "' WHERE id_mapel='" . $_GET['IDMAP']
            ."'; ";

        }
         
        {
            $sql = "UPDATE mapel SET nama_mapel='" . $_POST['nama_mapel']
            . "' WHERE id_mapel='" . $_GET['IDMAP']
            ."'; ";
        }
        $result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_mapel.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Edit Berita</h2>
		<p>Perbarui Jabatan terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Edit Jabatan</b>
			</div>
			<div class="card-body">
				<?php
                    $sql = "SELECT * FROM jabatan WHERE id_jabatan='" . $_GET['IDJAB'] . "';";
                    $result = $conn->query($sql);
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <form action="edit_jabatan.php?IDJAB=<?= $_GET['IDJAB'] ?>" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDJAB" id="IDJAB" value="<?= $data['id_jabatan'] ?>" readonly>
						<label for="IDJAB">ID Jabatan</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_jabatan" id="nama_jabatan"
						placeholder="Nama Jabatan" value="<?= $data['nama_jabatan'] ?>">
						<label for="nama_jabatan">Nama Jabatan</label>
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
			
            $sql = "UPDATE jabatan SET nama_jabatan='" . $_POST['nama_jabatan'] 
            . "' WHERE id_jabatan='" . $_GET['IDJAB']
            ."'; ";
        
        
       $result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_jabatan.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
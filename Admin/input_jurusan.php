<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Input Jurusan Baru</h2>
		<p>Tambahkan Jurusan terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Entery Data</b>
			</div>
			<div class="card-body">
				<form action="input_jurusan.php" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDJUR" id="IDJUR" value="">
						<label for="IDJUR">ID Jurusan</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_jurusan" id="nama_jurusan"
						placeholder="nama_jurusan">
						<label for="nama_jurusan">Nama Jurusan</label>
					</div>
					<div class="mb-3">
						<input class="form-control" type="file" name="foto_jurusan" id="foto_jurusan">
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
		//INSERT INTO alat VALUES('123','esfs','3','0','')
		$sql = "INSERT INTO jurusan VALUES('". $_POST['IDJUR'] . "','"
									. $_POST['nama_jurusan'] . "','"
									. $_FILES['foto_jurusan']['name'] . "')";

		move_uploaded_file($_FILES['foto_jurusan']['tmp_name'] , '../assets/img/'.
		$_FILES['foto_jurusan']['name']);



		$result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_jurusan.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
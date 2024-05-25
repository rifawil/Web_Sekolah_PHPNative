<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Input Jabatan Baru</h2>
		<p>Tambahkan Jabatan.</p>

		<div class="card">
			<div class="card-header">
					<b>Entery Data</b>
			</div>
			<div class="card-body">
				<form action="input_jabatan.php" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDJAB" id="IDJAB" value="">
						<label for="IDJAB">ID Jabatan</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_jabatan" id="nama_jabatan"
						placeholder="NAMA JABATAN">
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
		//INSERT INTO alat VALUES('123','esfs','3','0','')
		$sql = "INSERT INTO jabatan VALUES('". $_POST['IDJAB'] . "','"
									. $_POST['nama_jabatan'] . "')";

		$result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_jabatan.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
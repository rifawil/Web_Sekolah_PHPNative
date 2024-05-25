<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Input Mapel Baru</h2>
		<p>Tambahkan Mapel terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Entery Data</b>
			</div>
			<div class="card-body">
				<form action="input_mapel.php" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDMAP" id="IDMAP" value="">
						<label for="IDMAP">ID Mapel</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_mapel" id="nama_mapel"
						placeholder="nama_mapel">
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
		//INSERT INTO alat VALUES('123','esfs','3','0','')
		$sql = "INSERT INTO mapel VALUES('". $_POST['IDMAP'] . "','"
									. $_POST['nama_mapel'] . "')";

		$result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_mapel.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
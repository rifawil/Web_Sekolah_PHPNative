<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Input Berita Baru</h2>
		<p>Tambahkan Berita terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Entery Data</b>
			</div>
			<div class="card-body">
				<form action="input_berita.php" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="ID" id="ID" value="">
						<label for="ID">ID Berita</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="judul" id="judul"
						placeholder="Judul">
						<label for="judul">Judul</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="isi_berita" id="isi_berita"
						placeholder="Isi Berita">
						<label for="isi_berita">Isi Berita</label>
					</div>

                    <div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama" id="nama"
						placeholder="nama">
						<label for="Nama">Nama Pengupload</label>
					</div>

                    <div class="form-floating mb-3">
						<input class="form-control" type="date" name="tanggal" id="tanggal"
						placeholder="tanggal">
						<label for="Tanggal">Tanggal</label>
					</div>

					<div class="mb-3">
						<input class="form-control" type="file" name="foto_berita" id="foto_berita">
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
		$sql = "INSERT INTO berita VALUES('". $_POST['ID'] . "','"
									. $_POST['judul'] . "','"
									. $_POST['isi_berita'] . "','"
                                    . $_POST['nama'] . "','"
                                    . $_POST['tanggal'] . "','"
									. $_FILES['foto_berita']['name'] . "')";


		move_uploaded_file($_FILES['foto_berita']['tmp_name'] , '../assets/img/'.
		$_FILES['foto_berita']['name']);

		$result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_berita.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
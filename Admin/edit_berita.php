<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Edit Berita</h2>
		<p>Perbarui Berita terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Edit Berita</b>
			</div>
			<div class="card-body">
				<?php
                    $sql = "SELECT * FROM berita WHERE id_berita='" . $_GET['ID'] . "';";
                    $result = $conn->query($sql);
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <form action="edit_berita.php?ID=<?= $_GET['ID'] ?>" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="ID" id="ID" value="<?= $data['id_berita'] ?>" readonly>
						<label for="ID">ID Berita</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="judul" id="judul"
						placeholder="Judul" value="<?= $data['judul'] ?>">
						<label for="judul">Judul</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="isi_berita" id="isi_berita"
						placeholder="Isi Berita" value="<?= $data['isi_berita'] ?>">
						<label for="isi_berita">Isi Berita</label>
					</div>

                    <div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama" id="nama"
						placeholder="nama" value="<?= $data['nama'] ?>">
						<label for="Nama">Nama Pengupload</label>
					</div>

                    <div class="form-floating mb-3">
						<input class="form-control" type="date" name="tanggal" id="tanggal"
						placeholder="tanggal" value="<?= $data['tanggal'] ?>">
						<label for="Tanggal">Tanggal</label>
					</div>

					<div class="mb-3">
						<input class="form-control" type="file" name="foto_berita" id="foto_berita" >
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
		if(!$_FILES['foto_berita']['name'] == '')
        {
            $sql = "UPDATE berita SET judul='" . $_POST['judul']
            . "', isi_berita='" . $_POST['isi_berita']
            . "', nama='" . $_POST['nama']
            . "', tanggal='" . $_POST['tanggal']
            . "', foto='" . $_FILES['foto_berita']['name'] . "' WHERE id_berita='" . $_GET['ID']
            ."'; ";

            move_uploaded_file($_FILES['foto_berita']['tmp_name'] , '../assets/img/' . $_FILES['foto_berita']['name']);
        }
        else 
        {
            $sql = "UPDATE berita SET judul='" . $_POST['judul']
            . "', isi_berita='" . $_POST['isi_berita']
            . "', nama='" . $_POST['nama']
            . "', tanggal='" . $_POST['tanggal'] . "' WHERE id_berita='" . $_GET['ID']
            ."'; ";
        }
        $result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_berita.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
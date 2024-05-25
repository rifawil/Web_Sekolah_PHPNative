<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Edit Jurusan</h2>
		<p>Perbarui Jurusan terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Edit Jurusan</b>
			</div>
			<div class="card-body">
				<?php
                    $sql = "SELECT * FROM jurusan WHERE id_jurusan='" . $_GET['IDJUR'] . "';";
                    $result = $conn->query($sql);
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <form action="edit_jurusan.php?IDJUR=<?= $_GET['IDJUR'] ?>" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="IDJUR" id="IDJUR" value="<?= $data['id_jurusan'] ?>" readonly>
						<label for="IDJUR">ID Jurusan</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama_jurusan" id="nama_jurusan"
						placeholder="nama_jurusan" value="<?= $data['nama_jurusan'] ?>">
						<label for="nama_jurusan">Nama Jurusan</label>
					</div>
					<div class="mb-3">
						<input class="form-control" type="file" name="foto_jurusan" id="foto_jurusan" >
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
		if(!$_FILES['foto_jurusan']['name'] == '')
        {
            $sql = "UPDATE jurusan SET nama_jurusan='" . $_POST['nama_jurusan']
            . "', foto='" . $_FILES['foto_jurusan']['name'] . "' WHERE id_jurusan= '" . $_GET['IDJUR']
            ."'; ";
             move_uploaded_file($_FILES['foto_jurusan']['tmp_name'] , '../assets/img/' . $_FILES['foto_jurusan']['name']);
        }
        else 
        {
            $sql = "UPDATE mapel SET nama_jurusan='" . $_POST['nama_jurusan']
            . "' WHERE id_jurusan='" . $_GET['IDJUR']
            ."'; ";
        }
        $result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_jurusan.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
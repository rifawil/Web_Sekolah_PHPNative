<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Input GTK Baru</h2>
		<p>Tambahkan GTK</p>

		<div class="card">
			<div class="card-header">
					<b>Entery Data</b>
			</div>
			<div class="card-body">
				<form action="input_gtk.php" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="ID" id="ID" value="">
						<label for="ID">ID GTK</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama" id="nama"
						placeholder="Nama">
						<label for="nama">Nama</label>
					</div>

                    <?php
                        $query = "SELECT * FROM mapel";
                        $data = mysqli_query($conn, $query);
                    ?>
                    <div class="form-floating mb-3">
                    <select class="form-control" name="nama_mapel">
                    <?php
                        while ($d = mysqli_fetch_array($data)){
                    ?>
                    <option value="<?= $d['id_mapel']; ?>"><?= $d['nama_mapel']; ?></option>
                    <?php
                        }
                        ?>
                    </select>
                    <label for="mapel">Mapel</label>
                    </div>

                    <?php
                        $query = "SELECT * FROM jurusan";
                        $data = mysqli_query($conn, $query);
                    ?>
                    <div class="form-floating mb-3">
                    <select class="form-control" name="nama_jurusan">
                    <?php
                        while ($d = mysqli_fetch_array($data)){
                    ?>
                    <option value="<?= $d['id_jurusan']; ?>"><?= $d['nama_jurusan']; ?></option>
                    <?php
                        }
                        ?>
                    </select>
                    <label for="jurusan">Jurusan</label>
                    </div>

                    <?php
                        $query = "SELECT * FROM jabatan";
                        $data = mysqli_query($conn, $query);
                    ?>
                    <div class="form-floating mb-3">
                    <select class="form-control" name="nama_jabatan">
                    <?php
                        while ($d = mysqli_fetch_array($data)){
                    ?>
                    <option value="<?= $d['id_jabatan']; ?>"><?= $d['nama_jabatan']; ?></option>
                    <?php
                        }
                        ?>
                    </select>
                    <label for="jabatan">Jabatan</label>
                    </div>

					<div class="mb-3">
						<input class="form-control" type="file" name="foto_gtk" id="foto_gtk">
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
		$sql = "INSERT INTO gtk VALUES('". $_POST['ID'] . "','"
									. $_POST['nama'] . "','"
									. $_POST['nama_mapel'] . "','"
                                    . $_POST['nama_jurusan'] . "','"
                                    . $_POST['nama_jabatan'] . "','"
									. $_FILES['foto_gtk']['name'] . "')";


		move_uploaded_file($_FILES['foto_gtk']['tmp_name'] , '../assets/img/'.
		$_FILES['foto_gtk']['name']);

		$result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_gtk.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
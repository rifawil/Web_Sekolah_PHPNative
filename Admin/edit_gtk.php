<?php include '../assets/template/head.php'; ?>
<main>
	<div class="container-fluid px-4"><br>
		<h2>Edit GTK</h2>
		<p>Perbarui GTK terbaru.</p>

		<div class="card">
			<div class="card-header">
					<b>Edit GTK</b>
			</div>
			<div class="card-body">
				<?php
                    $sql = "SELECT * FROM gtk WHERE id_gtk='" . $_GET['ID'] . "';";
                    $result = $conn->query($sql);
                    $data = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <form action="edit_gtk.php?ID=<?= $_GET['ID'] ?>" method="post" enctype="multipart/form-data">

					<div class="form-floating mb-3">
						<input class="form-control" type="text" name="ID" id="ID" value="<?= $data['id_gtk'] ?>" readonly>
						<label for="ID">ID GTK</label>
					</div>

                    <div class="form-floating mb-3">
						<input class="form-control" type="text" name="nama" id="nama"
						placeholder="nama" value="<?= $data['nama_gtk'] ?>">
						<label for="nama">Nama GTK</label>
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
		if(!$_FILES['foto_gtk']['name'] == '')
        {
            $sql = "UPDATE gtk SET nama_gtk='" . $_POST['nama']
            . "', id_mapel='" . $_POST['nama_mapel']
            . "', id_jurusan='" . $_POST['nama_jurusan']
            . "', id_jabatan='" . $_POST['nama_jabatan']
            . "', foto='" . $_FILES['foto_gtk']['name'] . "' WHERE id_gtk='" . $_GET['ID']
            ."'; ";

            move_uploaded_file($_FILES['foto_gtk']['tmp_name'] , '../assets/img/' . $_FILES['foto_gtk']['name']);
        }
        else 
        {
            $sql = "UPDATE gtk SET nama_gtk='" . $_POST['nama']
            . "', id_mapel='" . $_POST['nama_mapel']
            . "', id_jurusan='" . $_POST['nama_jurusan']
            . "', id_jabatan='" . $_POST['nama_jabatan'] . "' WHERE id_gtk='" . $_GET['ID']
            ."'; ";
        }
        $result = $conn->query($sql);
		if($result){
			echo "<script>window.location.replace('master_gtk.php')</script>";

		}

	}

?>
<?php include '../assets/template/footer.php'; ?>
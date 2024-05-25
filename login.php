<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- LOGIN FORM -->
    <div class="container d-flex justify-content-center">
        <div class="card" style="width:350px;">
            <div class="card-body">
                <h4 class="card-title text-center">LOG IN</h4>

                <form action="login.php" method="post">

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="username" id="user"
                        placeholder="username" required />
                        <label for="user">Username</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="password"
                        id="pass" placeholder="password" required />
                        <label for="pass">Password</label>
                    </div>

                    <input type="submit" class="btn btn-primary w-100" name="submit"/>
                </form>

            </div>
        </div>
    </div>

</body>
</html>

    <!-- PROSES LOGIN -->
    <?php
        session_start();
        if(isset($_POST['submit'])) {
            include 'config/Koneksi.php';

            $sql = "SELECT * FROM admin WHERE username='" . @$_POST['username']
            . "' AND password='" . md5(@$_POST['password']) . "'";
            
            $result = $conn->query($sql);
            $data = $result->fetch_array();

            //echo $sql;
            //var_dump($result);

            if($result->num_rows == 1){
                $_SESSION['nama'] = $data['nama'];
                header('location:Admin/index.php');
                //echo $data['nama'];
            }
            else{
                echo "<script>alert('Username/Password Salah')</script>";
            }
        }
    ?>
<?php
session_start();
if (isset($_SESSION["login"])) {
  header("location:index.php");
}
// $_SESSION["login"] = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
              <form class="user" method="post" action="">
                <div class="form-group row">
                  <div class="col-sm-12">
                    <input type="text" name="username" class="form-control form-control-user" id="exampleFirstName" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" name="password1" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <!-- <a href="logout.php" class="btn btn-danger" name="register">logout</a> -->
                <button class="btn btn-primary" name="register">Register</button>
              </form>
              <div class="text-center">
                <a class="small" href="forgot-password.php">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <?php
  if (isset($_POST["register"])) {
    if (empty($_POST["username"]) || empty($_POST["email"]) || empty($_POST["password"])) {
      echo "<script>swal('isi semua dengan lengkap!', 'login gagal', 'error');</script>";
    } else {
      $conn = mysqli_connect("localhost", "root", "", "db_server");
      $nama = $_POST["username"];
      $email = $_POST["email"];
      $password = $_POST["password"];
      $password1 = $_POST["password1"];
      $result = mysqli_query($conn, "SELECT * FROM tb_database WHERE nama = '$nama'");
      $data = mysqli_fetch_assoc($result);
      if ($nama == $data["nama"] || $email == $data["email"]) {
        echo "<script>alert('pengguna sudah ada');</script>";
        return false;
      }
      if ($password == $password1) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $query = mysqli_query($conn, "INSERT INTO tb_database VALUES(NULL,'$nama','$email','$password')");
        if ($query) {
          echo "<script>alert('register sukses')</script>";
          $_SESSION["login"] = true;
          header("location:index.php");
        } else {
          echo "<script>alert('register gagal')</script>";
          return false;
        }
      } else {
        echo "<script>alert('verifikasi password anda!');</script>";
      }
    }
  }
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
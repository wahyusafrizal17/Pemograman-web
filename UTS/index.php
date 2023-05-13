<?php
SESSION_START();
if(empty($_SESSION['status_login'])){
    header("location:login.php");
}
$user = $_SESSION['user_email'];

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/style.css">
  
  </head>
  <body>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">

          <div class="alert alert-primary">
            Berhasil login
          </div>

            <div class="wrap">
              <div class="login-wrap p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    
                    Selamat datang, <?= $user['name'] ?>
                    

                    <div class="mt-2">
                        <a href="logout.php">Keluar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
  </body>
</html>
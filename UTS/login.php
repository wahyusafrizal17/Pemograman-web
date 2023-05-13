
<!doctype html>
<html lang="en">
  <head>
    <title>Halaman Login</title>
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

            <?php
              SESSION_START();
              if(!empty($_SESSION['status_login'])):
            ?>

            <div class="alert alert-warning">
              <i class="fa fa-info-circle"></i> <?= $_SESSION['error_message'] ?>
            </div>

            <?php endif ?>

            <div class="wrap">
              <div class="login-wrap p-md-5">
                <div class="d-flex">
                  <div class="w-100">
                    <h3 class="mb-4">Sign In</h3>
                  </div>
                </div>
                <form action="proses-login.php" class="signin-form" method="post">
                    <div class="form-group mt-3">
                        <input type="email" class="form-control" name="email" required>
                        <label class="form-control-placeholder" for="email">Email</label>
                    </div>
                    <div class="form-group">
                        <input id="password-field" type="password" name="password" class="form-control" required>
                        <label class="form-control-placeholder" for="password">Password</label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                    </div>
                </form>
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
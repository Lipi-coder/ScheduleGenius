<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Schedule Genius</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./admin/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="./admin/assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="./admin/assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-4 mx-auto" style="background-color:#1a1919a3">
            <div class="card-body px-5 py-5">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-center align-items-center"><img src="./scg.png" style="width:120px"
                    alt=""></div>
                <div class="d-flex justify-content-center align-items-center w-100 pt-3">
                  <h3 class="card-title text-left mb-3">Login as an Admin</h3>
                </div>
              </div>

              <form method="post" action="./admin/controller/login.php">
                <div class="form-group mt-2">
                  <label>Email ID *</label>
                  <input required type="email" class="form-control p_input bg-light text-dark" name="email">
                </div>
                <div class="form-group">
                  <label>Password *</label>
                  <input required type="password" class="form-control p_input bg-light text-dark" name="password">
                </div>
                <!-- <div class="form-group d-flex align-items-center justify-content-between">
                  <a href="#" class="forgot-pass"></a>
                </div> -->
                <div class="text-center">
                  <button type="submit" name="alogin" class="btn btn-primary btn-block enter-btn">Login</button>
                </div>

                <p class="sign-up"><a href="./lecturer/">Click here</a> to login as a lecturer</p>
              </form>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./admin/assets/js/off-canvas.js"></script>
  <script src="./admin/assets/js/hoverable-collapse.js"></script>
  <script src="./admin/assets/js/misc.js"></script>
  <script src="./admin/assets/js/settings.js"></script>
  <script src="./admin/assets/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
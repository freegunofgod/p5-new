<?php 

$title = "Login page";

ob_start();

?>

<?php if(!isset($loggedUser)){ ?>
  <section class="gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login Page</h2>
              <p class="text-white-50 mb-5">Please enter your login and password</p>

              <div class="form-outline form-white mb-4">
                <form method="POST" action="">
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Login</label>
                    <input type="text" id="login" name="login" class="form-control form-control-lg my-2" />
                  </div>
                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg my-2" />
                  </div>

                  <p class="small mb-5 pb-lg-2 text-center"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <?php if(isset($errorMessage)) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errorMessage; ?>
                    </div>
                  <?php endif; ?>

                  <p class="small mb-5 pb-lg-2 text-center"><button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button></p>
                </form>
          </div>

              <div>
                <p class="mb-0 text-center">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $content = ob_get_clean();

}else {?>
    <section class="gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5">
              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Login Page</h2>
                <p class="text-white-50 mb-5">Vous êtes connecté</p>

                <div class="form-outline form-white mb-4">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $content = ob_get_clean();
}

require('layout.php') ?>
<section class="gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5">

            <?php if (isset($error)): ?>
              
              <div class="alert alert-danger" role="alert">
                  <span><?= $error ?></span>
              </div>
      
            <?php elseif (isset($success)): ?>
      
              <div class="alert alert-success" role="alert">
                  <span><?= $success ?></span>
                  <br>    
                  <a href="/login" class="btn-back-index"><i class="fal fa-hand-point-right"></i> Redirection vers la page de connexion</a>
              </div>
      
                  
            <?php endif ?>

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Create your account</h2>
              <p class="text-white-50 mb-5">Please fill all input to create your account</p>

              <form action="#" method="POST">

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeIdentifiantX">Identifiant</label>
                    <input type="identifiant" id="typeIdentifiantX" name="login" class="form-control form-control-lg my-2" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                    <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg my-2" />
                  </div>

                  <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                    <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg my-2" />
                  </div>

                  <p class=" small my-5 pb-lg-2 text-center"><button class="btn btn-outline-light btn-lg px-5" type="submit">Create your account</button></p>
               
              </form>
              

            <div>
              <p class="mb-0 text-center">Already have an account? <a href="index.php?action=login" class="text-white-50 fw-bold">Sign in</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<main id="main" class="mt-5" style="margin-top:100px">



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5" style="margin-top:100px">
      <div class="container mt-5" style="margin-top:100px">

 

      <div class="container mt-5" style="margin-top:100px">

        <div class="row mt-5">

          <div class="col-md-6 mx-auto">
            <h1>
              <?php 
                if ( isset( $msg ) )
                {
                  echo $msg;
                }
              ?>
            </h1>
            <form style="margin-top:100px" action="" method="post" role="form" class="php-email-form">
            <h3>Register</h3>
              <div class="row">
                <div class="col-md-6 form-group mt-3">
                  <input type="text" name="first_name" class="form-control" id="first_name" placeholder="first name" value="<?php echo $web_app->persistData('first_name'); ?>" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last_name" value="<?php echo $web_app->persistData('last_name'); ?>" required>
                </div>
                <div class="col-md-6 form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="email" value="<?php echo $web_app->persistData('email'); ?>" required>
                </div><div class="col-md-6 form-group mt-3">
                  <input type="Password" class="form-control" name="password" id="password" alue="<?php echo $web_app->persistData('password'); ?>" placeholder="password" required>
                </div>
              </div>
              
              <div class="text-center mt-3"><button type="submit" name="sign_up_btn">SignUp</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
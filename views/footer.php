
<?php 
  if ( isset( $_COOKIE[ 'stud_id' ] ) )
  {
?>

  <!-- Start Change Password Modal-->
  <div class="modal fade" id="passwordModal" tabindex="-1">
   <div class="modal-dialog">
    <div class="modal-content">
     <div class="modal-header">
      <h3 class="modal-title"><strong>Change Password</strong></h3>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
     </div>
     <div class="modal-body">
      <!-- START FORM -->
      <form action="" method="POST">
        

        <h5>Please, fill in the details below!</h5>
        <div class="row">
          <div class="form-group mt-3">
            <label class="fw-bold" for="new_pword">Password <span class="text-danger">*</span></label>
            <input type="password" name="new_pword" id="new_pword" class="form-control" required placeholder="Enter Password" maxlenght="10" autocomplete="false">
          </div>
          <div class="form-group mt-3">
            <label class="fw-bold" for="con_new_pword">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="con_new_pword" class="form-control" id="con_new_pword" required placeholder="Enter Password" maxlenght="10">
          </div>
          <div class="text-center mt-3">
            <button type="submit" name="change_pword_btn" id="change_pword_btn" class="btn btn-success" >Change</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button> 
          </div>

        </div>
      </form>
      <!-- END FORM -->
     </div>
    </div>
   </div>
  </div>
  <!-- End Change Password Modal-->

  <!-- Start Image Upload Modal -->
  <div class="modal fade" id="imageUploadModal" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fw-bold">Image Upload</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="col-md-6 m-auto">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img text-center">
                  <?php 
                    
                    if ( isset( $old_img_x ) ) 
                    {
                      echo '<img class="img img-fluid rounded-circle" src="' . $old_img_x . '" alt="Previous Image" style="width: 150px; height: 200px;">';
                    }
                  ?>
              </div>
            </div>
          </div>

          <form method="POST" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3 mb-3">
              <label class="fw-bold" for="image">Image <span class="text-danger">*</span></label>

              <input type="hidden" name="app_no"  id="app_no" value="<?= $app_no ?>"> 
              
              <input type="hidden" name="old_img" value="<?= $old_img ?>">

              <input type="file" name="image" id="image" required class="form-control" accept=".jpg, .jpeg, .png">
            </div>
            <div class="row">
              <div class="text-center col-md-6 mb-3">
                <input type="submit" name="upload_btn" id="upload_btn" value="Upload" class="form-control bg-info text-white fw-bold">
              </div>
              <div class="text-center col-md-6 mb-3">
                <button type="button" class="form-control btn btn-danger" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div><!-- End Image Upload Modal-->

<?php 
  }
?>

<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-md-4">
            <div class="footer-info">
              <p>
                <strong>Phone:</strong> 07036681700, 08034060114<br>
                <strong>Email:</strong> <br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              </div>
            </div>
          </div>

          <div class="col-md-4 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i><a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="#">About us</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i><a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i><a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright text-white">
        &copy; Copyright 
          <?php 
                
            $year = date( 'Y' );

            if ( $year != 2022 ) {
              $year  = '2022-'.$year;
            }

            echo $year;
            
          ?>
          <strong><?= $website_title ?></strong>. All Rights Reserved
      </div>
      <div class="credits text-white">
       <!--  Designed by <a href="" class="text-white"> </a> -->
      </div>
    </div>
  </footer><!-- End Footer -->

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= $server_name ?>/assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?= $server_name ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?= $server_name ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= $server_name ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?= $server_name ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= $server_name ?>/assets/js/main.js"></script>

  <script src="<?= $server_name ?>/assets/vendor/jquery/jquery-3.6.0.min.js"></script>
  <script src="<?= $server_name ?>/assets/js/app.js"></script>

  <script type="text/javascript">
    const server_name = <?= json_encode( $server_name ) ?>;
    const app_url = <?= json_encode( $app_url ) ?>;
  </script> 

  <?php
    /*dynamically loading all js_modules*/
    $js_scripts = '';

    foreach ( $js_modules as $js_mod ) 
    {
      $js_scripts .= "<script src='$server_name/assets/js/$js_mod.js'></script>";
    }

    echo $js_scripts;
  ?>
</body>

</html>
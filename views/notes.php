

<main id="main" class="mt-5" style="margin-top:100px">



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact mt-5" style="margin-top:500px">
      <div class="container mt-5" style="margin-top:50px">

 

      <div class="container mt-5" style="margin-top:50px">

        <div class="row mt-5">

          <div class="col-md-6 mx-auto">
            
            <form style="margin-top:50px" action="" method="post" role="form" class="php-email-form">
                  <h3> Add New Note</h3>
            <?php 
                if ( isset( $msg ) )
                {
                  echo $msg;
                }
              ?>
              <div class="row">
         
                <div class="col-md-12 mb-3 form-group mt-3">
                  <label for="description"></label>
                  <textarea placeholder="Enter Note" id="description"  class="form-control" name="description" rows="4" cols="50"></textarea>
                </div>
              
              <div class="text-center"><button type="submit" name="notes_btn">Add</button></div>
            </form>
          </div>

        


        </div>

        <div class="row">
        <div class="col-md-12 mx-auto card shadow mt-5">
        <?php
          if ( $note_arr ){
            $content = '';
                echo  ' <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">S/N</th>
                <th scope="col">Description</th>
                <th scope="col">Action </th>
              </tr>
            </thead>
            <tbody>';

            $sn = 0;
            foreach ( $note_arr as $note_dt ) {

              $id = $note_dt['id'];
              $description = $note_dt['description'];
              //var_dump($description);
              $sn++;

              $content .= "<tr>
              <th scope='row'>$sn</th>
              <td>$description</td>
              <td>
              <a class='btn btn-primary' href='view_note?id=$id' target=''> View</a>
              <a class='btn btn-primary' href='edit_note?id=$id'> Edit</a>
              <a class='btn btn-danger' href='delete?id=$id'> Delete</a>
                
              </td>
            </tr>";

            }

                $content .= "</tbody>
              </table>";
              echo $content;
          } 
        ?>


</div>

        </div>

      </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
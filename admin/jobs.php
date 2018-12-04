<?php include "includes/header.php"; ?>
<?php include "includes/top_nav.php"; ?>
<?php include "includes/side_nav.php"; ?>

      <div id="content-wrapper">

        <div class="container-fluid">
            
            <?php 
                if ( isset( ($_GET['source']) ) ) {

                    $source = $_GET['source'];

                } else {
                    $source = '';
                }

                switch ( $source ) {

                    // add job post
                    case "add_job";
                    include "includes/add_job.php";
                    break;

                    // edit job post
                    case "edit_job";
                    include "includes/edit_job.php";
                    break;

                    default;
                    include "includes/view_all_jobs.php";

                }
            ?>
          
        </div>

        </div>
        <!-- /.container-fluid -->


<?php include "includes/footer.php"; ?>
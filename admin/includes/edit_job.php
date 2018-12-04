<div class="row">


            
    <div class="heading_title">
        <h4> Add Job Post </h4>
    </div>
    <div class="col-lg-12 mt-2">

<?php 
    if ( isset($_GET['job_id']) ) {

        $job_id = $_GET['job_id'];

        $sql = "SELECT * FROM job_post WHERE job_id = $job_id ";
        $query = mysqli_query($con, $sql);

        while ($rows = mysqli_fetch_assoc( $query )) {

            $job_r_title  = $rows['job_title'];
            $job_r_detail  = $rows['job_detail'];
            $job_r_exp = $rows['job_exp'];
            $job_r_salary  = $rows['job_salary'];

        }
        
    }

    if ( isset( $_POST['update_post']) ) {

        $job_u_title = $_POST['job-title'];
        $job_u_exp = $_POST['job-exp'];
        $job_u_salary = $_POST['job-salary'];
        $job_u_detail = $_POST['job-detail'];


        $sql_update = "UPDATE job_post SET job_title = '$job_u_title', job_detail = '$job_u_detail' , job_exp = '$job_u_exp', job_salary = '$job_u_salary', job_post_date = now(), job_date = now() WHERE job_id = $job_id ";

        $sql = mysqli_query($con , $sql_update);


    }

?>

        <form action="" method="post" enctype="multipart/form-data">
        
            <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" class="form-control" name="job-title" id="job-title" value= "<?php echo $job_r_title;?>">
            </div>
            <div class="form-group">
                <label for="job-exp">Job Experience</label>
                <input type="text" class="form-control" name="job-exp" id="job-exp" value= "<?php echo $job_r_exp; ?>">
            </div>
            <div class="form-group">
                <label for="job-salary">Job Salary</label>
                <input type="text" class="form-control" name="job-salary" id="job-salary"  value= "<?php echo $job_r_salary;?>">
            </div>
            <div class="form-group">
                <label for="editor">Job Detail</label>
                <textarea name="job-detail" cols="30" rows="10" class="form-control" id="editor"><?php echo $job_r_detail; ?></textarea>
            </div>
            <input type="submit" value="Add Job" class="btn btn-success my-4" name="update_post" >
        </form>
    </div>
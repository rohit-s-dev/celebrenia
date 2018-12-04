<div class="row">


            
    <div class="heading_title">
        <h4> Add Job Post </h4>
    </div>
    <div class="col-lg-12 mt-2">

<?php 
    if ( isset( $_POST['add_post'] ) ) {
        
        $job_title = $_POST['job-title'];
        $job_exp = $_POST['job-exp'];
        $job_salary = $_POST['job-salary'];
        $job_detail = $_POST['job-detail'];
        $job_date = date('d-m-y');

        $sql = "INSERT INTO job_post(job_title, job_detail, job_exp, job_salary, job_post_date, job_date) VALUES ( '$job_title' , '$job_detail' , '$job_exp' ,'$job_salary' , now(), now() )";

        $sql_query = mysqli_query($con, $sql);


    }


?>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="job-title">Job Title</label>
                <input type="text" class="form-control" name="job-title" id="job-title">
            </div>
            <div class="form-group">
                <label for="job-exp">Job Experience</label>
                <input type="text" class="form-control" name="job-exp" id="job-exp">
            </div>
            <div class="form-group">
                <label for="job-salary">Job Salary</label>
                <input type="number" class="form-control" name="job-salary" id="job-salary">
            </div>
            <div class="form-group">
                <label for="editor">Job Detail</label>
                <textarea name="job-detail" cols="30" rows="10" class="form-control" id="editor"></textarea>
            </div>
            <input type="submit" value="Add Job" class="btn btn-success my-4" name="add_post" >
        </form>
    </div>
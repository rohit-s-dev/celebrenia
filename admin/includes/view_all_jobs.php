<div class="row">
            
          <div class="heading_title">
             <h4> ALL Jobs POST </h4>
            </div>
            <div class="col-lg-12 mt-2">
            <table class="table table-striped table-dark table-hover text-center">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Job Id</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Job Details</th>
                        <th scope="col">Job Salary</th>
                        <th scope="col">Job Post</th>
                        <th scope="col">Job Post Date</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql = "SELECT * FROM job_post";
                $sql_query = mysqli_query($con, $sql);    
                
                while ( $rows = mysqli_fetch_assoc( $sql_query ) ) {
                    $job_id = $rows['job_id'];
                    $job_title = ucwords($rows['job_title']);
                    $job_detail = substr($rows['job_detail'], 0, 20);
                    $job_salary = $rows['job_salary'];
                    $job_post_date = $rows['job_post_date'];
                    $job_date = $rows['job_date'];

                
                ?>
                    <tr>
                        <th scope='row'><?php echo $job_id ?></th>
                        <td><?php echo $job_title ?></td>
                        <td><?php echo $job_detail ?></td>
                        <td><?php echo $job_salary ?></td>
                        <td><?php echo $job_post_date ?></td>
                        <td><?php echo $job_date ?></td>
                        <td><a href='jobs.php?source=edit_job&job_id=<?php echo $job_id; ?>' class='btn btn-success btn-block'> edit</a></td>

                        <td><a href='jobs.php?delete=<?php echo $job_id; ?>' class='btn btn-danger btn-block'>delete</a></td>
                    </tr>
                <?php
                }     
                ?>

                <?php 
                
                
                    if ( isset($_GET['delete']) ) {

                        $sql = "DELETE FROM job_post WHERE job_id = $job_id";
                        $sql_query = mysqli_query( $con, $sql );
                        header("LOCATION: jobs.php");
                    
                    }
                
                ?>
                </tbody>
            </table>
            </div>
<?php $title = "Celebrania:: Careers"; 
include "inc/header.inc.php"; ?>
<?php include "inc/m-nav.inc.php"; ?>

<section class="careers_hero_p">
    <div class="container">
        <div class="careers_hero_titl_anim">
            <h1 class="careers_anim_title">
                CELEBRANIA
            </h1>
            <div class="carrers_join_us">Join Us</div>
        </div>
    </div>
</section>

<section class="join_our_team">
    <div class="container">
        <div class="row j_o_t_box">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h6 class="j_o_t_title"><span>Join</span> Our Team</h6>
                <p class="j_o_t_title_para">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Numquam laudantium ipsa animi ullam? Odio recusandae reiciendis natus temporibus, provident repellendus pariatur dolore illum maxime labore, iusto saepe voluptates aperiam ex.</p>
               
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-center">
                <a class="join_our_team_btn" href="#">Get Started</a>
            </div>
        </div>
    </div>
</section>

<section class="j-o-t_vacancies">
    <div class="container">
        <h6 class="j_o_t_title j_o_t_jobs mb10"><span>Jobs</span></h6>
    </div>

    <div class="container">
        <div class="row">

            <?php 
                $sql = "SELECT * FROM job_post";
                $query = mysqli_query($con, $sql);

                while($rows = mysqli_fetch_assoc($query)) {
                    $job_title = $rows['job_title'];
                    $job_detail = substr($rows['job_detail'], 0, 100);
                    $job_exp = $rows['job_exp'];
                    $job_salary = $rows['job_salary'];
                    $job_date = $rows['job_date'];
               
            ?>
                    
            <div class="col-lg-6 col-md-6 col-sm-6 mbb10">
                <div class="j-o-t_vacancy_box">
                    <h5 class="j-o-t_vacancy-title"><?php echo $job_title;?></h5>
                    <p class="j_o_t_vacancy_det"><?php echo $job_detail;?>.......</p>
                    <div class="j-o-t_vacancy_det">
                        <span class="f_t">Full Time</span>
                        <span class="exp"><?php echo $job_exp; ?></span>
                        <span class="date"><?php echo $job_date; ?></span>
                    </div>

                    <a href="" class="j-o-t_vacancy_read_more_btn"><span>&rarr;</span>Read More</a>
                </div>
            </div>     
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php include "inc/main.footer.php"; ?>
<?php include "inc/footer.inc.php"; ?>
<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>
<div class="container paddingT75" id="u_a">
    <div class="row">
        <div class="col-lg-12">
            <h3>Alumni Students</h3>
            <div class="pad10"><div
                <div class="row">
                    <form method="post" action="<?=base_url();?>search">
                        <div class="form-group col-md-2">
                            <label for="passing_year">Filter By</label>
                            <select class="form-control" name="filterby">
                                        <option value="name" selected>Name</option>
                                        <option value="number">Registration Number</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                           <label for="passing_year">Contains the words</label>
                           <input class="form-control" type="text" name="keyword" />
                        </div>
                        <div class="form-group col-md-2">
                            <label for="passing_year" class="block"> &numsp;</label>
                            <input type="submit" class="btn btn-default custom-text" value="Submit">
                        </div>
                    </form>
                </div>
                <hr>
                <?php for ($i = 0; $i < count($all_student); ++$i) { ?>
                    <div class="col-lg-6 col-md-6 col-sm-12 padb20" id="u_con">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4">
                                <div class="row">
                                    <div class="mini-profile-img-con">
                                        <?php
                                        $image=$all_student[$i]->student_id;
                                        if(file_exists("assets/img/profile/$image.jpg"))
                                            $image = "$image.jpg";
                                        else
                                            $image = "nonimage.jpg";
                                        ?>
                                        <img class="mini-profile-img" src="<?=base_url();?>assets/img/profile/<?php echo $image;?>">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-8">
                                <div class="mini-profile-text-con">
                                    <center><h3 class="mini-profDetail"><a target="_blank" href="<?=base_url();?>detail_profile/index/<?php echo $all_student[$i]->student_id;?>"> <?php echo $all_student[$i]->full_name;?></a></h3></center>
                                    <p><span class="mini-left-half">Student ID:&nbsp;</span> <span class="right-half"> <?php echo $all_student[$i]->student_id;?></span></p>
                                    <p><span class="mini-left-half">Undergrad Passing Year:&nbsp;</span> <span class="right-half"> <?php echo $all_student[$i]->p_university_passing_year;?></span></p>
                                    <p><span class="mini-left-half">Email:&nbsp;</span> <span class="right-half"> <?php echo $all_student[$i]->email;?></span></p>
                                    <p><span class="mini-left-half">Current Location:&nbsp;</span> <span class="right-half"> <?php echo $all_student[$i]->location;?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
				echo $this->pagination->create_links();
				 ?>
            </div>
            <!--end block-->

        </div>
    </div>
</div>
<!-- /undergrad_alumni -->

<?php
$this->load->view('common/footer');
?>

<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container paddingT75">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="row>">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="assets/img/slider/slide-1.jpg" alt="...">
                            <div class="carousel-caption">
                                Department of Computer Science and Engineering (CSE), BUET organized an Inter-University Math Olympiad and a National
                                Collegiate Programming Contest (BUET NCPC 2008) as a part of the CSE Festival 2008 on October 24, 2008. About 200 participants
                                from all over the country contested in the Math Olympiad and 52 teams from 30 universities including BUET, Dhaka
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/slider/slide-2.jpg" alt="...">
                            <div class="carousel-caption">
                                Prof. Dr. M. Kaykobad, Professor, Department of CSE, BUET delivered a lecture on “Research and Co-curricular Activities in Computer Science” in a seminar arranged by CSE Department on Tuesday, 17th January 2012.
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets/img/slider/slide-3.jpg" alt="...">
                            <div class="carousel-caption">
                                The Department of Computer Science and Engineering, the first department of its kind, was established in 1982 under the faculty of Electrical and Electronics Engineering. From the very initial days of its establishment, it has been able to attract the very best students of the country.
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7 col-ms-6 col-xs-12">
                    <br>
                    <h3 class="main-heading">Welcome to Chongqing University Student Alumni!</h3>
                    <p class="alumni_message">Greetings from the School of International Education, Chongqing University (CQU)! How time flies! It’s been some time since you graduated from CQU. We hope you are all doing exceptionally well in your fields. As you have spent some wonderful time in China and at CQU specifically, we believe that you will serve as a bridge between China and your home country and play an important role in international friendship. We hope, therefore, to keep in touch with you on a regular basis. So, if you change your contact information, please kindly update it by completing the form attached and sending it to us at internationalalumni@cqu.edu.cn. </p>
                </div>
                <div class="col-md-5 col-ms-6 col-xs-12">
                    <br>
                    <h3 class="main-heading">Up coming events</h3>
                    <p class="alumni_message">Greetings from the School of International Education, Chongqing University (CQU)! How time flies! It’s been some time since you graduated from CQU. We hope you are all doing exceptionally well in your fields. As you have spent some wonderful time in China and at CQU specifically, we believe that you will serve as a bridge between China and your home country and play an important role in international friendship. We hope, therefore, to keep in touch with you on a regular basis. So, if you change your contact information, please kindly update it by completing the form attached and sending it to us at internationalalumni@cqu.edu.cn.</p>
                </div>
            </div>
        </div>
        <div id="sidebar" class="col-lg-3 col-md-4 col-sm-5 sidebar-offcanvas">
        	<div class="panel panel-default">
                <div class="panel-heading"><strong>Not a Member ?</strong></div>
                <div class="panel-body">
                    
					<a class="btn btn-default" href="<?=base_url();?>login/signup" role="button">Sign Up</a>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Search a Student</strong></div>
                <div class="panel-body">
                    
					<div class="input-group col-md-10">
                    
                                <form class="form-horizontal" role="form" method="post" action="<?=base_url();?>search">
                                  <div class="form-group">
                                    <label for="filter">Filter by</label>
                                    <select class="form-control" name="filterby">
                                        <option value="name" selected>Name</option>
                                        <option value="number">Registration Number</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="contain">Contains the words</label>
                                    <input class="form-control" type="text" name="keyword" />
                                  </div>
                                  <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                </form>
                    
                </div>
                </div>
            </div>
            
            
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Latest Alumni News</strong></div>
                <div class="panel-body">
                    <?php for ($i = 0; $i < count($news); ++$i) { ?>
                        <p><a href="assets/img/news/<?php echo $news[$i]->file_name;?>" target="_blank"><i class="glyphicon glyphicon-pushpin"></i> <?php echo $news[$i]->heading;?> <i class="newsDate"> [<?php echo date('Y-m-d', strtotime($news[$i]->published_date));?>] </i></a></p>
                    <?php } ?>

                    <p>&nbsp;</p>
                    <p><a class="pull-right" target="_blank" href="news">All news</a></p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Latest Alumni Events</strong></div>
                <div class="panel-body">
                    <?php for ($i = 0; $i < count($events); ++$i) { ?>

                        <p><a href="assets/img/events/<?php echo $events[$i]->file_name;?>" target="_blank"><i class="glyphicon glyphicon-play"></i> <?php echo $events[$i]->heading;?> <i class="newsDate"> [<?php echo date('Y-m-d', strtotime($events[$i]->published_date));?>] </i></a></p>
                    <?php } ?>

                    <p>&nbsp;</p>
                    <p><a class="pull-right" target="_blank" href="events">All Events</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /home -->
<?php
$this->load->view('common/footer');
?>

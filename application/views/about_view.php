<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>

<div class="container paddingT75">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-7">
            
            <div class="row">
                <div class="col-md-12 col-ms-6 col-xs-12">
                    <div id="artical" class="">
                                    <h4><span style="font-family:arial,helvetica,sans-serif"><strong>About Chongqing University</strong></span></h4><br />

<p><img alt="" src="<?php echo base_url(); ?>assets/img/20151212145009621.jpg"></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">Chongqing University (CQU) is a key national university and a member of the “Excellence League”, located in Chongqing, Southwest China. It is also one of the “211 Project" and "985 Project” universities with full support in construction and development from the central government and Chongqing Municipal Government.</span></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">Founded in 1929, Chongqing University now consists of six faculties in Science, Social Sciences, Humanities, Engineering, Built Environment, Information Science and Technology. The University has 35 schools, and offers 96 undergraduate programs, 236 postgraduate programs, 121 doctoral programs, 19 professional degrees, and 29 mobile workstations for postdoctoral study.</span></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">Among its various departments, Chongqing University is especially highly ranked in the Built Environment, Engineering, Technology, and Business disciplines. At present, Chongqing University is in possession of&nbsp;22 state key subjects and 14 key subjects under the state "211 Project",&nbsp;38 provincial or ministerial key subjects. The university sets up&nbsp;11 national key labs, 8 ministerial key labs,&nbsp;and 180 provincial key labs of different specialties.</span></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">Currently, the university hosts 50,000 students, including 27,000 undergraduates, 21,000 graduates, and over 1600 international students from 129 countries. The university has a total&nbsp; of 5,300 faculty and staff members, among whom 5 academicians of the Chinese Academy of Engineering,&nbsp;10 members of the Subject Appraisal Team of the Degree Committee under the State Council,&nbsp;4 chief scientists of the National 973 Project, 5 state-level middle-aged or young experts with distinguished contributions to their fields, and over 600 doctorate supervisors, 1,900 professors and associate professors.</span></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">Chongqing University has established cooperation with 115 institutions of higher education in over 20 countries, such as the USA, UK, France, Germany, Italy, Netherland, Canada, Australia, Japan, South Korea etc. The university has also established&nbsp; partnership with many prestigious international corporations or institutions, such as Siemens, Rockwell Automation, IBM, Microsoft, Lipo Group, New York Life Insurance, Omron, ABB, Ford, etc,. Chongqing University has three Confucius Institutes in Thailand, Italy and Australia respectively, which promote the cooperation and development in the teaching and research of Chinese language and culture.</span></p>

<p style="text-align:justify"><span style="font-family:arial,helvetica,sans-serif">The university covers a total area of 5,450 mu (about 178 hectares), with 1.5 million square meters of floor space in four lively campuses.</span></p>

                                </div>
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

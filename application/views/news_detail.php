<?php
$this->load->view('common/header');
$this->load->view('common/navbar');

?>

<div class="container paddingT75">
    <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-7">
            <div class="row">
                <div class="col-md-12 col-ms-6 col-xs-12">
                    <br>
                    <h3 class="main-heading"><?php echo $snews[0]->heading;?></h3>
                    <p class="alumni_message"><?php echo $snews[0]->news_text;?></p>
                    <?php if(!empty($snews[0]->file_name)){?><a href="assets/img/news/<?php echo $snews[0]->file_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>" target="_blank"><i class="glyphicon glyphicon-pushpin">File</i> </a>
                    <?php } ?>
                    
                    <i class="newsDate"> <?php echo date('Y-m-d', strtotime($snews[0]->published_date));?></i>
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

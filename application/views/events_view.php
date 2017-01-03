<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>
<div class="container paddingT75">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>Alumni Events</h3>
                    <hr>
                    <?php for ($i = 0; $i < count($all_events); ++$i) { ?>

                        <p></p>

                    <?php } ?>
                </div>
                
                <?php for ($i = 0; $i < count($all_events); ++$i) { ?>
                  <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="service-item">
                    	<div class="blog-img">
                        <a href="">
                          <img src="<?=base_url();?>assets/img/news-icon.png" class="img-responsive">
                        </a>
                      	</div>
                      <h3><?php echo $all_events[$i]->heading;?></h3>
                      <p>
                      
                      <?php echo substr($all_events[$i]->events_text, 0, 200)."&nbsp;...";?>
                      <br /><a href="assets/img/events/<?php echo $all_events[$i]->file_name;?>" target="_blank"><i class="glyphicon glyphicon-play"></i>  <i class="newsDate"> [<?php echo date('Y-m-d', strtotime($all_events[$i]->published_date));?>] </i></a></p>
                      <a href="<?=base_url()."events/detail/".$all_events[$i]->id;?>">view more</a>
                    </div>
                  </div>
                    

                    <?php } ?>
                
                
            </div>
        </div>
    </div>
</div>
<!-- /events -->

<?php
$this->load->view('common/footer');
?>

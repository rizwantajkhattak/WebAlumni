<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>
<div class="container paddingT75">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-md-12">
                    <h3>Alumni News</h3>
                    <hr>
                </div>
                <?php for ($i = 0; $i < count($all_news); ++$i) { ?>
					<div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
            <div class="blog-img">
                <a href="">
                  <img src="<?=base_url();?>assets/img/news-icon.png" class="img-responsive">
                </a>
              </div>
              <h3><?php echo $all_news[$i]->heading;?></h3>
              <p>
			  
			  <?php echo substr($all_news[$i]->news_text, 0, 200)."&nbsp;...";?>
              <br /><?php if(!empty($all_news[$i]->file_name)){?><a href="assets/img/news/<?php echo $all_news[$i]->file_name."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?>" target="_blank"><i class="glyphicon glyphicon-pushpin">File</i> </a>
                    <?php } ?>
              
              <i class="newsDate"> [<?php echo date('Y-m-d', strtotime($all_news[$i]->published_date));?>] </i></p>
              <a href="<?=base_url()."news/detail/".$all_news[$i]->id;?>">view more</a>
            </div>
          </div>
                    

                    <?php } ?>
            </div>
        </div>
    </div>
</div>
<!-- /news -->

<?php
$this->load->view('common/footer');
?>

<?php
$this->load->view('common/header');
$this->load->view('common/navbar');
?>
<div class="container paddingT75">
    <div class="row">
        <h3 class="col-lg-12 padb20">Photo Gallery</h3>

        <?php for ($i = 0; $i < count($all_photo); ++$i) { ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="position-relative">
                <img class="img-responsive gallery-img" src="assets/img/gallery/<?php echo $all_photo[$i]->photo_name;?>" alt="" onClick="view(this)">
                <div class="photo-caption"><?php echo $all_photo[$i]->caption;?></div>
            </div>
        </div>
        <?php } ?>


    </div>
</div>
<!-- /photo_gallery -->

<?php
$this->load->view('common/footer');
?>

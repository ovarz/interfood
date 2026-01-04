<img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/cover.jpg">
<div class="slide-overlay"></div>
<?php if($cover_gateway == 'yes'){ ?>
  <?php require ($_SERVER['IF'].'template/img/icon/cover-bottom.svg')?>
<?php } ?>
<div class="slide-info content-center">
  <span class="slide-info-container">
    <h2 class="slide-title">
      <span class="text-id"><?php echo $cover_label_id; ?></span>
      <span class="text-en"><?php echo $cover_label_en; ?></span>
    </h2>
    <h3 class="slide-subtitle">
      <span class="text-id"><?php echo $cover_sublabel_id; ?></span>
      <span class="text-en"><?php echo $cover_sublabel_en; ?></span>
    </h3>
	<?php if($cover_gateway == 'yes'){ ?>
      <div class="more">
        <div class="more-link btn-outline">
          <div class="more-label">
            <span class="text-id">Selengkapnya</span>
            <span class="text-en">Learn More</span>
          </div>
          <div class="more-icon content-center">
            <?php require ($_SERVER['IF'].'template/img/icon/more.svg')?>
          </div>
        </div>
      </div>
	<?php } ?>
  </span>
</div>
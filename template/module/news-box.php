<a title="<?php echo $random_title[array_rand($random_title)];?>" class="news-box" href="news-detail.php">
  <div class="news-image">
    <div class="news-image-frame img-frame thumb-loading">
      <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
    </div>
  </div>
  <div class="news-info content-center">
    <div class="news-info-container">
      <h2 class="news-title">
        <span class="text-id">ID <?php echo $random_title[array_rand($random_title)];?></span>
        <span class="text-en">EN <?php echo $random_title[array_rand($random_title)];?></span>
      </h2>
      <div class="news-date">
        <span class="text-id">00 Agustus 0000</span>
        <span class="text-en">00 August 0000</span>
      </div>
      <h3 class="news-desc">
        <span class="text-id">Indonesia <?php echo $random_desc[array_rand($random_desc)];?></span>
        <span class="text-en">English <?php echo $random_desc[array_rand($random_desc)];?></span>
      </h3>
	</div>
  </div>
</a>
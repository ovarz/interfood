<div class="hab-image">
  <div class="hab-image-box">
	<div class="hab-image-outline"></div>
	<div class="hab-image-frame img-frame thumb-loading">
	  <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
	</div>
  </div>
</div>
<div class="hab-info">
  <div class="hab-info-container">
	<h2 class="hab-title">
	  <span class="text-id">ID Ipsum Dolor</span>
	  <span class="text-en">EN Ipsum Dolor</span>
	</h2>
	<h3 class="hab-desc">
	  <span class="text-id">ID ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus. Proin posuere vulputate urna, tempus dignissim sem sagittis nec. Vivamus ultricies venenatis odio, ut imperdiet purus gravida sit amet. Phasellus ac neque in nulla lobortis ultrices eget in turpis.</span>
	  <span class="text-en">EN ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus. Proin posuere vulputate urna, tempus dignissim sem sagittis nec. Vivamus ultricies venenatis odio, ut imperdiet purus gravida sit amet. Phasellus ac neque in nulla lobortis ultrices eget in turpis.</span>
	</h3>
	<?php $more_type='link'; $more_label_id='Selengkapnya'; $more_label_en='Learn More'; $more_link=''; 
	require ($_SERVER['IF'].'template/module/more.php')?>
  </div>
</div>
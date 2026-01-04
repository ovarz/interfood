<?php 
  $lang='id';
  $menu='News';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="news-detail content-center">
    <div class="site-container">
	  <div class="news-detail-top">
	    <h1 class="ndt-title">
		  <span class="text-id"><?php echo $random_title[array_rand($random_title)];?></span>
		  <span class="text-en"><?php echo $random_title[array_rand($random_title)];?></span>
		</h1>
	    <h2 class="ndt-date">
		  <span class="text-id">Sabtu, 00 September 0000</span>
		  <span class="text-en">Saturday, 00 September 0000</span>
		</h2>
		<?php require ($_SERVER['IF'].'template/module/share-list.php')?>
	  </div>
	  
	  <main class="default-content news-detail-content">
	    <?php require ($_SERVER['IF'].'template/module/default-content.php')?>
	  </main>
	</div>
  </section>
  
  
  
  <section class="latest-news content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Berita Terkait';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Related News'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="news-list">
	    <?php for ($i=1; $i<=12; $i++){ ?>
	      <?php require ($_SERVER['IF'].'template/module/news-box.php')?>
		<?php } ?>
	  </div>
	  
	  <?php $more_type='button'; $more_label_id='Berita Lainnya'; $more_label_en='More News'; $more_link=''; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
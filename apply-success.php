<?php 
  $lang='id';
  $menu='Career';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="apply content-center">
    <div class="site-container">
	  <div class="success-image">
	    <div class="success-image-frame img-frame thumb-loading">
          <img title="Foto Sukses" class="lazyload" data-original="template/img/success.svg">
		</div>
	  </div>
	
	  <?php 
	    $title_id='Pendaftaran Berhasil';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Registration Successful'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="apply-form content-center">
	    <div class="Submit">
		  <a title="Submit" class="btn-outline form-submit" href="">
		    <span class="text-id">Kembali ke halaman utama</span>
		    <span class="text-en">Back to main page</span>
		  </a>
		</div>
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
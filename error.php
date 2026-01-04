<?php 
  $lang='id';
  $menu='About Us';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<div class="rancak-foundation">
  
  
  
  <section class="error-page content-center">
    <style>
	  .error-page{min-height:calc(100vh - var(--size-7)); min-height:calc(100svh - var(--size-7));}
	  .ep-image svg{width:89%; max-width:377px; height:auto;}
	  .ep-label, .ep-desc{text-align:center; text-wrap:balance;}
	  .ep-label{font-weight:bold; font-size:2rem; text-transform:uppercase; color:var(--color-2); line-height:120%; 
	  margin-top:var(--size-5); margin-bottom:var(--size-2);}
	  .ep-desc{margin-bottom:var(--size-4); line-height:150%;}
	</style>
    <div class="ep-container">
	  <div class="ep-image content-center">
	    <?php require ($_SERVER['IF'].'template/img/not-found.svg')?>
	  </div>
      <h1 class="ep-label">
	    <span class="text-id">Halaman Sudah Kedaluarsa</span>
	    <span class="text-en">Halaman Sudah Kedaluarsa</span>
	  </h1>
      <h2 class="ep-desc">
	    <span class="text-id">Silakan klik dibawah ini untuk kembali ke halaman utama.</span>
	    <span class="text-en">Halaman Sudah Kedaluarsa</span>
	  </h2>
	  <div class="content-center">
        <a title="Submit" class="btn-outline form-submit" href="">
          <span class="text-id">Kembali ke halaman utama</span>
          <span class="text-en">Back to main page</span>
        </a>
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
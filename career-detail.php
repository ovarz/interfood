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
  
  
  
  <section class="content-center">
    <div class="site-container">
	  
      <div class="career-detail">
        <div class="career-detail-container">
          <div class="career-detail-top">
            <div class="career-status-box career-status-open">
              <span class="text-id">Dibuka</span>
              <span class="text-en">Open</span>
            </div>
          </div>
          <?php require ($_SERVER['IF'].'template/module/career-head.php')?>
          <div class="career-address">Tunas Industrial Estate, Blok 8 F, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29464</div>
          <?php require ($_SERVER['IF'].'template/module/share-list.php')?>
          <div class="default-content career-content">
            <?php require ($_SERVER['IF'].'template/module/default-content.php')?>
          </div>
        </div>

        <div class="career-detail-action">
          <a title="Apply" class="btn content-center" href="apply.php">
            <span class="text-id">Lamar Sekarang</span>
            <span class="text-en">Apply Now</t></span>
          </a>
        </div>
      </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
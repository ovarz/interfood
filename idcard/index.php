<?php 
  $lang='id';
  $menu='Home';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<div class="rancak-foundation content-center">
  <div class="rancak-bg desktop-only">
  
  </div>
  
  
  
  <div class="rancak-container">
  
	
	<header class="header">
	  <ul class="site-container">
        <li class="header-left">
          <div title="<?php echo $sitename; ?>" class="header-box header-logo content-center">
            <?php require ($_SERVER['IF'].'template/img/logo.svg')?>
          </div>
        </li>
        <li class="header-right">
          <button title="Share <?php echo $sitename; ?>" class="header-box header-share content-center">
            <?php require ($_SERVER['IF'].'template/img/icon/share.svg')?>
          </button>
        </li>
      </ul>
	</header>
	
	
	
	<div class="personal-data">
	  <ul class="personal-data-container">
	    <li class="personal-data-thumb">
		  <div class="pdt-frame img-frame thumb-loading">
    		<img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
		  </div>
		</li>
	    <li class="personal-data-info">
		  <div class="pdi-container">
			<h1 class="pdi-name">FullName Lorem Ipsum</h1>
			<div class="pdi-name-chinese">全名：罗伦·伊普森</div>
			<h2 class="pdi-title">Sales Manager</h2>
		  </div>
		</li>
	  </ul>
	</div>
	
	
	
	<nav class="tab">
      <?php 
        $tab_array = array();
        $tab_array[]=array(
          'tab_label'=>'Personal',
          'tab_status'=>'tab-curr',
        );
        $tab_array[]=array(
          'tab_label'=>'Office',
          'tab_status'=>'',
        );
        foreach($tab_array as $tab_list){
      ?>
        <button title="<?php echo($tab_list['tab_label'])?>" aria-tab="tab-<?php echo($tab_list['tab_label'])?>" class="tab-button <?php echo($tab_list['tab_status'])?> content-center">
          <?php echo($tab_list['tab_label'])?>
        </button>
      <?php } ?>
	</nav>
	
	
	
	<section class="main-content">
	  <div class="main-content-slide" aria-slide="tab-Personal">
	    Personal
	  </div>
	</section>
	
	
	
	<footer class="footer">
	  <div class="footer-curve">
	    <?php require ($_SERVER['IF'].'template/img/footer.svg')?>
	  </div>
	  <div class="footer-copyright">
	    <a title="www.interfood.co.id" class="footer-link">www.interfood.co.id</a>
	  </div>
	</footer>
	
  </div>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
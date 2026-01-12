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
    		<img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,5); ?>.jpg">
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
	    <div class="mcs-container">
		
		  <div class="mcs-box">
		    <a title="FullName Whatsapp Link" class="mcs-info" href="https://api.whatsapp.com/send/?phone=6280000000000" target="_blank">
			  <div class="mcs-label mcs-wa">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-whatsapp.svg')?>
				<div class="mcs-label-name">Whatsapp</div>
			  </div>
			  <div class="mcs-data">+62-800-0000-0000</div>
			</a>
			<button title="FullName Whatsapp QR" class="mcs-qr open-sticky" aria-popup-button="QRwhatsapp">
			  <div class="mcs-qr-frame">
			    <?php require ($_SERVER['IF'].'template/img/sample/qr.svg')?>
			  </div>
			</button>
		  </div>
		
		  <div class="mcs-box">
		    <a title="FullName Email Link" class="mcs-info" href="mailto:fullname@interfood.co.id" target="_blank">
			  <div class="mcs-label mcs-ml">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-mail.svg')?>
				<div class="mcs-label-name">Email</div>
			  </div>
			  <div class="mcs-data">fullname@interfood.co.id</div>
			</a>
		  </div>
		
		  <div class="mcs-box">
		    <div title="FullName WeChat Link" class="mcs-info">
			  <div class="mcs-label mcs-wc">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-wechat.svg')?>
				<div class="mcs-label-name">WeChat</div>
			  </div>
			  <div class="mcs-data">WeChatID</div>
			</div>
			<button title="FullName WeChat QR" class="mcs-qr open-sticky" aria-popup-button="QRwechat">
			  <div class="mcs-qr-frame">
			    <?php require ($_SERVER['IF'].'template/img/sample/qr.svg')?>
			  </div>
			</button>
		  </div>
		  
		</div>
	  </div>
	
	
	
	  <div class="main-content-slide" aria-slide="tab-Office">
	    <div class="mcs-container">
		
		  <div class="mcs-box mcs-address">
		    <a title="Batam Branch Address" class="mcs-info" href="https://maps.app.goo.gl/s3wGA48xzMBcd9b79" target="_blank">
			  <div class="mcs-label mcs-office">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-map.svg')?>
				<div class="mcs-label-name">Batam Branch</div>
			  </div>
			  <div class="mcs-data">Tunas Industrial Estate Blok 8F, Batam Kota, Batam Centre, Batam, Kepulauan Riau</div>
			</a>
			<a title="Office Address" class="mcs-map img-frame thumb-loading" href="" target="_blank">
			  <iframe class="lazyload" data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0686002679636!2d104.0722836756797!3d1.1107528622962475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d988c7d2f22c17%3A0x85777502628df4b9!2sPT.%20Interfood%20Sukses%20Jasindo!5e0!3m2!1sen!2sid!4v1768206154484!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</a>
		  </div>
		
		  <div class="mcs-box">
		    <a title="FullName Phone Link" class="mcs-info" href="tel:+6280000000000" target="_blank">
			  <div class="mcs-label mcs-office">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-phone.svg')?>
				<div class="mcs-label-name">Phone</div>
			  </div>
			  <div class="mcs-data">+62-800-0000-0000</div>
			</a>
		  </div>
		
		  <div class="mcs-box">
		    <a title="FullName Email Link" class="mcs-info" href="mailto:office@interfood.co.id" target="_blank">
			  <div class="mcs-label mcs-office">
			    <?php require ($_SERVER['IF'].'template/img/icon/contact-mail.svg')?>
				<div class="mcs-label-name">Email</div>
			  </div>
			  <div class="mcs-data">office@interfood.co.id</div>
			</a>
		  </div>
		  
		</div>
	  </div>
	  
	  
	  
	</section>
	
	
	
	<footer class="footer">
	  <div class="footer-curve">
	    <?php require ($_SERVER['IF'].'template/img/footer.svg')?>
	  </div>
	  <div class="footer-copyright">
	    <a title="www.interfood.co.id" class="footer-link" href="https://interfood.co.id/" target="_blank">www.interfood.co.id</a>
	  </div>
	</footer>
	
  </div>
  
  
  
</div>



<?php 
  $qr_id='QRwhatsapp';
  $qr_label='Whatsapp';
  $qr_detail='+62-800-0000-0000';
  require ($_SERVER['IF'].'template/module/qr-popup.php')
?>
<?php 
  $qr_id='QRwechat';
  $qr_label='WeChat';
  $qr_detail='WeChatID';
  require ($_SERVER['IF'].'template/module/qr-popup.php')
?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
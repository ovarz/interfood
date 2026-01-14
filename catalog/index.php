<?php 
  $lang='id';
  $menu='Home';
  $template='default';
  $title='Lorem ipsum dolor sit amet consectetur adipiscing elit';
  $company='PT. Interfood Sukses Jasindo';
  $branch='Batam Branch';
  $website='www.interfood.co.id';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<div class="rancak-foundation content-center">
  <div class="rancak-container">
  
  
  
    <div class="rancak-slide">
	  <div class="rancak-slide-body rsb-1">
	    <div class="rsb-1-container">
          <div class="rsb-logo"><?php require ($_SERVER['IF'].'template/img/logo.svg')?></div>
          <div class="rsb-title"><?php echo $title; ?></div>
		  <div class="rsb-info">
		    <div class="rsb-company"><?php echo $company; ?></div>
            <div class="rsb-location">
              <div class="rsb-location-icon"><?php require ($_SERVER['IF'].'template/img/icon/location.svg')?></div>
              <div class="rsb-location-label"><?php echo $branch; ?></div>
            </div>
		  </div>
		</div>
	  </div>
	  <?php require ($_SERVER['IF'].'template/inc/footer.php')?>
	</div>
  
  
  
    <div class="rancak-slide">
	  <div class="rancak-slide-body rsb-2">
	    Slide 2
	  </div>
	  <?php require ($_SERVER['IF'].'template/inc/footer.php')?>
	</div>
  
  
  
    <div class="rancak-slide">
	  <div class="rancak-slide-body rsb-3">
	    <div class="rsb-bg"><?php require ($_SERVER['IF'].'template/img/ribbon.svg')?></div>
	    <div class="rsb-3-container">
          <div class="rsb-logo"><?php require ($_SERVER['IF'].'template/img/logo.svg')?></div>
		  <div class="rsb-info">
		    <div class="rsb-company"><?php echo $company; ?></div>
            <div class="rsb-location">
              <div class="rsb-location-icon"><?php require ($_SERVER['IF'].'template/img/icon/location.svg')?></div>
              <div class="rsb-location-label"><?php echo $branch; ?></div>
            </div>
			<div class="rsb-address">
			  Tunas Industrial Estate Blok 8F, Batam Kota, Batam Centre,<br/>
			  Batam, Kepulauan Riau
			</div>
		  </div>
		  <div class="rsb-contact">
		    <div class="rsb-contact-row">
			  <div class="rsb-contact-icon"><?php require ($_SERVER['IF'].'template/img/icon/contact-whatsapp.svg')?></div>
			  <div class="rsb-contact-label">+62 000 0000 0000</div>
			</div>
		    <div class="rsb-contact-row">
			  <div class="rsb-contact-icon"><?php require ($_SERVER['IF'].'template/img/icon/contact-phone.svg')?></div>
			  <div class="rsb-contact-label">+62 00 0000 0000</div>
			</div>
		    <div class="rsb-contact-row">
			  <div class="rsb-contact-icon"><?php require ($_SERVER['IF'].'template/img/icon/contact-mail.svg')?></div>
			  <div class="rsb-contact-label">email.address@interfood.co.id</div>
			</div>
		  </div>
		</div>
	  </div>
	  <?php require ($_SERVER['IF'].'template/inc/footer.php')?>
	</div>
	
	
	
  </div>
</div>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
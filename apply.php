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
  
  
  
  <section class="home-slide">
    <div class="slide-image img-frame thumb-loading">
      <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/cover.jpg">
      <div class="slide-overlay"></div>
      <div class="slide-info content-center">
        <span class="slide-info-container">
		  <?php require ($_SERVER['IF'].'template/module/career-head.php')?>
        </span>
      </div>
    </div>
  </section>
  
  
  
  <section class="apply content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Formulir Pendaftaran';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Registration Form'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  
	  
	  <div class="apply-form">
	  
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Nama Lengkap</span>
		    <span class="text-en">Full Name</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="text" placeholder="">
		  </div>
		</div>
		
	    <div class="apply-form-row apply-form-error">
		  <div class="afr-label">
		    <span class="text-id">Alamat email</span>
		    <span class="text-en">Email address</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="text" placeholder="">
		  </div>
		  <div class="afr-note">
		    <span class="text-id">Format email salah</span>
		    <span class="text-en">Incorrect email format</span>
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Kontak whatsapp</span>
		    <span class="text-en">WhatsApp contact</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="text" placeholder="">
		  </div>
		  <div class="afr-help">
			<span class="text-id">Ukuran maksimal 2 MB</span>
			<span class="text-en">Maximum size 2 MB</span>
			<br>
			<span class="text-id">Format diizinkan: .pdf, .doc, .jpg</span>
			<span class="text-en">Allowed formats: .pdf, .doc, .jpg</span>
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Domisili Tempat Tinggal</span>
		    <span class="text-en">Residential Domicile</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="text" placeholder="">
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Unggah surat lamaran kerja</span>
		    <span class="text-en">Upload job application letter</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="file" placeholder="">
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Unggah CV</span>
		    <span class="text-en">Upload CV</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="file" placeholder="">
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Pertanyaan penyaring 1</span>
		    <span class="text-en">Screening question 1</span>
		  </div>
		  <div class="form-box afr-box">
		    <textarea class="form-field"></textarea>
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Pertanyaan penyaring 2</span>
		    <span class="text-en">Screening question 2</span>
		  </div>
		  <div class="form-box afr-box">
		    <textarea class="form-field"></textarea>
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Pertanyaan penyaring 3</span>
		    <span class="text-en">Screening question 3</span>
		  </div>
		  <div class="form-box afr-box">
		    <textarea class="form-field"></textarea>
		  </div>
		</div>
		
	    <div class="apply-form-row">
		  <div class="afr-label">
		    <span class="text-id">Tautan portofolio</span>
		    <span class="text-en">Link portofolio</span>
		  </div>
		  <div class="form-box afr-box">
		    <input class="form-field" name="" type="text" placeholder="">
		  </div>
		</div>
		
		<div class="apply-form-captcha">
		  Captcha Here
		</div>
		
		<div class="apply-form-checkbox">
		  <div class="afc-action">
		    <div class="afc-action-box">
			  <input class="afc-action-real" name="choice" type="checkbox">
			  <div class="afc-action-dummy content-center">
			    <?php require ($_SERVER['IF'].'template/img/icon/check.svg')?>
			  </div>
			</div>
		  </div>
		  <div class="afc-label">
		    <span class="text-id">
			  Saya telah membaca dan menyetujui
			  <button title="syarat dan ketentuan" class="open-sticky" aria-popup-button="TnC">syarat dan ketentuan</button>
			  dari PT. Interfood Sukses Jasindo
			</span>
		    <span class="text-en">
			  I have read and agree to the
			  <button title="terms and conditions" class="open-sticky" aria-popup-button="TnC">terms and conditions</button>
			  of PT. Interfood Sukses Jasindo
			</span>
		  </div>
		</div>
		
		<div class="Submit">
		  <button title="Submit" class="btn form-submit" onclick="location.href='apply-success.php';">
		    <span class="text-id">Submit Pendaftaran</span>
		    <span class="text-en">Submit Registration</span>
		  </button>
		</div>
		
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/tnc-popup.php')?>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
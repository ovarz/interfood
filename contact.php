<?php 
  $lang='id';
  $menu='Contact';
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
      <?php 
        $cover_label_id='Kontak'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Contact'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="contact-display content-center">
    <div class="site-container">
	  <div class="contact-display-split">
		
		<div class="contact-display-list">
          <?php 
            $title_id='Jaringan Kami';
            $subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            $title_en='Our Network'; 
            $subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            require ($_SERVER['IF'].'template/module/h2h3.php')
          ?>
		  <div class="cdl-list">
		    <?php for ($j=1; $j<=2; $j++){ ?>
			  <div class="cdl-box">
			    <div class="cdl-image">
                  <div class="cdl-image-frame img-frame thumb-loading">
                    <img title="Foto Batam" class="lazyload" data-original="template/img/cover.jpg">
                  </div>
				</div>
			    <div class="cdl-info">
                  <h2 class="cdl-city">Batam</h2>
                  <div class="cdl-address">
                    Tunas Industrial Estate, Blok 8 F, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29464
                  </div>
                  <div class="mli-contact">
                    <a title="" class="mli-contact-link" href="">
                      <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/phone.svg')?></div>
                      <div class="mli-contact-label">+62 21 345 0214</div>
                    </a>
                    <a title="" class="mli-contact-link" href="">
                      <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/mail.svg')?></div>
                      <div class="mli-contact-label">jkt@interfood.co.id</div>
                    </a>
                    <a title="" class="mli-contact-link" href="">
                      <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/maps.svg')?></div>
                      <div class="mli-contact-label">
                        <span class="text-id">Lihat Peta</span>
                        <span class="text-en">View Maps</span>
                      </div>
                    </a>
                  </div>
				</div>
			  </div>
			<?php } ?>
			
			
			
			<button title="" class="cdl-toggle-button" aria-branch-button="sumatera">
			  <div class="cdl-toggle-label">
				<span class="text-id">Cabang Sumatera</span>
				<span class="text-en">Sumatera Branches</span>
			  </div>
			  <div class="cdl-toggle-icon">
			    <?php require ($_SERVER['IF'].'template/img/icon/down.svg')?>
			  </div>
			</button>
			<div class="cdl-toggle" aria-branch-list="sumatera">
			  <div class="cdl-toggle-container">
                <?php for ($j=1; $j<=2; $j++){ ?>
                  <div class="cdl-box">
                    <div class="cdl-image">
                      <div class="cdl-image-frame img-frame thumb-loading">
                        <img title="Foto Batam" class="lazyload" data-original="template/img/cover.jpg">
                      </div>
                    </div>
                    <div class="cdl-info">
                      <h2 class="cdl-city">Batam</h2>
                      <div class="cdl-address">
                        Tunas Industrial Estate, Blok 8 F, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29464
                      </div>
                      <div class="mli-contact">
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/phone.svg')?></div>
                          <div class="mli-contact-label">+62 21 345 0214</div>
                        </a>
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/mail.svg')?></div>
                          <div class="mli-contact-label">jkt@interfood.co.id</div>
                        </a>
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/maps.svg')?></div>
                          <div class="mli-contact-label">
                            <span class="text-id">Lihat Peta</span>
                            <span class="text-en">View Maps</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
			  </div>
			</div>
			
			
			
			<button title="" class="cdl-toggle-button" aria-branch-button="jawa">
			  <div class="cdl-toggle-label">
				<span class="text-id">Cabang Jawa</span>
				<span class="text-en">Java Branches</span>
			  </div>
			  <div class="cdl-toggle-icon">
			    <?php require ($_SERVER['IF'].'template/img/icon/down.svg')?>
			  </div>
			</button>
			<div class="cdl-toggle" aria-branch-list="jawa">
			  <div class="cdl-toggle-container">
                <?php for ($j=1; $j<=2; $j++){ ?>
                  <div class="cdl-box">
                    <div class="cdl-image">
                      <div class="cdl-image-frame img-frame thumb-loading">
                        <img title="Foto Batam" class="lazyload" data-original="template/img/cover.jpg">
                      </div>
                    </div>
                    <div class="cdl-info">
                      <h2 class="cdl-city">Batam</h2>
                      <div class="cdl-address">
                        Tunas Industrial Estate, Blok 8 F, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29464
                      </div>
                      <div class="mli-contact">
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/phone.svg')?></div>
                          <div class="mli-contact-label">+62 21 345 0214</div>
                        </a>
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/mail.svg')?></div>
                          <div class="mli-contact-label">jkt@interfood.co.id</div>
                        </a>
                        <a title="" class="mli-contact-link" href="">
                          <div class="mli-contact-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/maps.svg')?></div>
                          <div class="mli-contact-label">
                            <span class="text-id">Lihat Peta</span>
                            <span class="text-en">View Maps</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php } ?>
			  </div>
			</div>
			
		  </div>
		</div>
	  
        <div class="tab-contact">
          <?php 
            $title_id='';
            $subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            $title_en=''; 
            $subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
            require ($_SERVER['IF'].'template/module/h2h3.php')
          ?>
          <div class="tab-contact-action">
            <div class="tca-container">
              <button title="General inquiries" class="tca-button tca-curr content-center" aria-tab-button="TabGI">
                <span class="text-id">Pertanyaan Umum</span>
                <span class="text-en">General Inquiries</span>
              </button>
              <button title="Purchase interest" class="tca-button content-center" aria-tab-button="TabPI">
                <span class="text-id">Minat Pembelian</span>
                <span class="text-en">Purchase Interest</span>
              </button>
            </div>
          </div>
          <div class="tab-contact-form">
            <?php require ($_SERVER['IF'].'template/module/contact-gi.php')?>
            <?php require ($_SERVER['IF'].'template/module/contact-pi.php')?>
          </div>
        </div>
		
	  </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
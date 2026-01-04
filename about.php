<?php 
  $lang='id';
  $menu='About Us';
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
        $cover_label_id='Tentang Kami'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='About Us'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="home-about content-center">
    <div class="site-container">
	
	  <div class="home-about-box hab-left">
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
			  <span class="text-id">Melakukan Yang Terbaik</span>
			  <span class="text-en">Do The Best</span>
			</h2>
			<h3 class="hab-desc">
			  <span class="text-id"><b>PT. Interfood Sukses Jasindo</b> adalah perusahaan lokal milik 100% Indonesia yang didirikan pada tahun 2002 yang bergerak di bidang impor dan distribusi produk makanan dan minuman kepada pasar ritel, grosir, restoran, hotel serta berbagai perusahaan lainnya di seluruh Indonesia.</span>
			  <span class="text-en"><b>PT. Interfood Sukses Jasindo</b> is a 100% Indonesian-owned company established in 2002, specializing in importing and distributing food and beverage products to retail markets, wholesalers, restaurants, hotels, and other businesses across Indonesia.</span>
			</h3>
		  </div>
		</div>
	  </div>
	  
	  <div class="home-about-box hab-right">
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
			  <span class="text-id">Visi</span>
			  <span class="text-en">Vision</span>
			</h2>
			<h3 class="hab-desc">
			  <span class="text-id">Visi kami adalah menjadi jembatan penghubung antara makanan lezat dan bernutrisi dari seluruh dunia melalui perpaduan cita rasa global dan kekayaan budaya lokal yang menciptakan harmoni unik serta memperkaya pengalaman konsumen.</span>
			  <span class="text-en">Our vision is to be the bridge connecting delicious and nutritious foods from around the world, blending global flavors with rich local culture to create a unique harmony and enriches the consumer experience.</span>
			</h3>
		  </div>
		</div>
	  </div>
	
	  <div class="home-about-box hab-left">
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
			  <span class="text-id">Misi</span>
			  <span class="text-en">Mission</span>
			</h2>
			<h3 class="hab-desc">
			  <span class="text-id">Misi kami adalah <b style="color:var(--color-4);">melakukan yang terbaik</b> dalam menyeleksi dan menghadirkan produk makanan & minuman berkualitas, serta mengembangkan sumber daya manusia yang kompeten dan menciptakan lapangan kerja secara nasional. Kami berkomitmen membangun sistem, fasilitas, dan jaringan distribusi yang handal untuk memastikan akses terhadap produk berkualitas ke seluruh Indonesia.</span>
			  <span class="text-en">Our mission is to <b style="color:var(--color-4);">do our best</b> in carefully  curating and delivering quality food & beverage products, while developing skilled human resources and creating job opportunities nationwide. We are committed to building reliable systems, facilities, and distribution networks that ensure access to quality goods throughout Indonesia.</span>
			</h3>
		  </div>
		</div>
	  </div>
	  
	</div>
  </section>
  
  
  
  <section class="home-distribution about-distribution content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Distribusi';
		$subtitle_id='<p>Jaringan kantor kami tersebar di 15 kota besar, beserta dengan gudang modern dan kendaraan truk milik perusahaan.</p><p>Fasilitas gudang kami yang aman dan canggih memiliki luas lebih dari 30.000 meter persegi meliputi ruang penyimpanan makanan kering, ruang pendingin, serta ruang pembeku (freezer). Pengiriman produk dilakukan menggunakan kendaraan khusus yang dilengkapi fasilitas memadai untuk menjaga agar produk tetap dalam kondisi terbaik dan aman selama pengiriman.</p><p>Dengan dukungan ratusan staf terlatih dan manajemen profesional, baik supplier maupun pelanggan memilih Interfood sebagai mitra bisnis yang dapat diandalkan.</p>';
	    $title_en='Distribution'; 
		$subtitle_en='<p>Our extensive office network covers 15 major cities, supported by modern warehouses and a fleet of company-owned trucks & vehicles.</p><p>Our secure, advanced warehouse facilities cover over 30,000 square meters, including dry storage, refrigerated rooms, and freezers. Products are delivered using specially equipped vehicles to ensure that they remain in optimal and safe condition throughout transit.</p><p>With hundreds of highly trained staff and strong management, both suppliers and customers confidently choose Interfood as their trusted business partner.</p>';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="distribution-data">
        <?php 
          $dd_array = array();
          $dd_array[]=array(
            'dd_number'=>'13',
            'dd_label_id'=>'Gudang',
            'dd_label_en'=>'Warehouses',
            'dd_sublabel_id'=>'di seluruh Indonesia',
            'dd_sublabel_en'=>'across Indonesia',
          );
          $dd_array[]=array(
            'dd_number'=>'30000',
            'dd_label_id'=>'Meter Persegi',
            'dd_label_en'=>'Square Meter',
            'dd_sublabel_id'=>'Luas Gudang',
            'dd_sublabel_en'=>'of warehouse',
          );
          $dd_array[]=array(
            'dd_number'=>'200',
            'dd_label_id'=>'Truk dan Kendaraan',
            'dd_label_en'=>'Trucks and Vehicles',
            'dd_sublabel_id'=>'mendistribusikan produk kami ke seluruh negeri',
            'dd_sublabel_en'=>'distributing our products country-wide',
          );
          foreach($dd_array as $dd_box){
        ?>
		  <div class="dd-box">
		    <div class="dd-number">
			  <span class="countup-number" aria-number="<?php echo($dd_box['dd_number'])?>"><?php echo($dd_box['dd_number'])?></span>+
			</div>
			<div class="dd-label">
			  <span class="text-id"><?php echo($dd_box['dd_label_id'])?></span>
			  <span class="text-en"><?php echo($dd_box['dd_label_en'])?></span>
			</div>
			<div class="dd-sublabel">
			  <span class="text-id"><?php echo($dd_box['dd_sublabel_id'])?></span>
			  <span class="text-en"><?php echo($dd_box['dd_sublabel_en'])?></span>
			</div>
		  </div>
		<?php } ?>
	  </div>
	  
	  <div class="warehouse-slider">
	    <div class="warehouse-slider-container">
          <?php 
		    $ws_total='9';
            $ws_array = array();
            $ws_array[]=array(
              'ws_number'=>'1',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Jakarta, Daerah Khusus Ibukota Jakarta',
              'ws_city_en'=>'Jakarta, Special Capital Region of Jakarta',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'2',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Batam, Kepulauan Riau',
              'ws_city_en'=>'Batam, Riau islands',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'3',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Bandung, Jawa Barat',
              'ws_city_en'=>'Bandung, West Java',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'4',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Surabaya, Jawa Timur',
              'ws_city_en'=>'Surabaya, East Java',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'5',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Jambi, Jambi',
              'ws_city_en'=>'Jambi, Jambi',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'6',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Palembang, Sumatera Selatan',
              'ws_city_en'=>'Palembang, South Sumatera',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'7',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Medan, Sumatera Utara',
              'ws_city_en'=>'Medan, North Sumatera',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'8',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Pekanbaru, Riau',
              'ws_city_en'=>'Pekanbaru, Riau',
              'ws_link'=>'',
            );
            $ws_array[]=array(
              'ws_number'=>'9',
              'ws_name'=>'Warehouse Name',
              'ws_city_id'=>'Pontianak, Kalimantan Barat',
              'ws_city_en'=>'Pontianak, West Kalimantan',
              'ws_link'=>'',
            );
            foreach($ws_array as $ws_box){
          ?>
		    <div class="wsc-column">
              <div class="wsc-box">
                <div class="wsc-image">
                  <a title="" class="wsc-image-frame img-frame thumb-loading" href="<?php echo($ws_box['ws_link'])?>">
                    <img title="Foto <?php echo($ws_box['ws_name'])?>" class="lazyload" data-original="template/img/sample/sample-<?php echo rand(1,6); ?>.jpg">
                  </a>
                </div>
                <div class="wsc-info">
                  <div class="wsc-info-container">
                    <div class="wsc-number"><?php echo($ws_box['ws_number'])?> / <?php echo $ws_total; ?></div>
                    <a title="<?php echo($ws_box['ws_name'])?>" class="wsc-name" href="<?php echo($ws_box['ws_link'])?>"><?php echo($ws_box['ws_name'])?></a>
                    <div class="wsc-location">
					  <span class="text-id"><?php echo($ws_box['ws_city_id'])?></span>
					  <span class="text-en"><?php echo($ws_box['ws_city_en'])?></span>
					</div>
                  </div>
                </div>
              </div>
		    </div>
		  <?php } ?>
		</div>
		<div class="wirehouse-slider-nav">
		  <button id="customPrev">
            <?php require ($_SERVER['IF'].'template/img/icon/slider-prev.svg')?>
          </button>
		  <button id="customNext">
            <?php require ($_SERVER['IF'].'template/img/icon/slider-next.svg')?>
          </button>
		</div>
	  </div>
      <script>
        var warehouse_slider = tns({
          container:'.warehouse-slider-container',
          speed:333,
          items:1,
          gutter:1, 
          edgePadding:0,
          controls:true,
		  prevButton:'#customPrev',
		  nextButton:'#customNext',
          nav:false,
          mouseDrag:true,
          autoplay:true,
        });
      </script> 
	</div>
  </section>
  
  
  
  <section class="home-local-prod content-center">
	<div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
	<div class="section-bg img-frame thumb-loading">
      <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/cover-2.jpg">
	</div>
    <div class="site-container">
	  <?php 
	    $title_id='Produsen Lokal';
		$subtitle_id='Kami berkolaborasi dengan produsen lokal untuk memproduksi produk dengan standar kualitas global.';
	    $title_en='Local Production'; 
		$subtitle_en='We collaborate with local producers to create products that meet global quality standards.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	</div>
	<div class="section-separator section-separator-bottom"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
  </section>
  
  
  
  <section class="home-brand content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Mitra Lokal';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Local Partners'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	
      <div class="home-brand-display page-brand-display">
        <div class="home-brand-list">
          <ul class="hbl-container">
            <?php for ($i=1; $i<=20; $i++){ ?>
              <li class="hbl-column">
                <div class="hbl-box">
                  <div class="hbl-logo img-frame thumb-loading content-center">
                    <img title="Logo <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/brand/<?php echo rand(1,80); ?>.png">
                  </div>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
	</div>
  </section>
  
  
  
  <section class="home-importer about-importer content-center">
	<div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Mitra Internasional';
		$subtitle_id='Kami mengimpor produk dari';
	    $title_en='International Supplier'; 
		$subtitle_en='We import products from';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
      <div class="home-importer-list about-importer-list">
        <ul class="hil-container">
          <?php 
            $home_importer_array = array();
            $home_importer_array[]=array(
              'hil_name_id'=>'Singapore',
              'hil_name_en'=>'Singapura',
              'hil_img'=>'sg',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Malaysia',
              'hil_name_en'=>'Malaysia',
              'hil_img'=>'my',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Thailand',
              'hil_name_en'=>'Thailand',
              'hil_img'=>'th',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'China',
              'hil_name_en'=>'Cina',
              'hil_img'=>'cn',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Turki',
              'hil_name_en'=>'Turkey',
              'hil_img'=>'ty',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Vietnam',
              'hil_name_en'=>'Vietnam',
              'hil_img'=>'vt',
            );
            $home_importer_array[]=array(
              'hil_name_id'=>'Lainnya',
              'hil_name_en'=>'Many more',
              'hil_img'=>'wd',
            );
            foreach($home_importer_array as $home_importer_list){
          ?>
            <li class="hil-column">
              <div class="hil-box img-frame thumb-loading">
                <img title="Foto <?php echo($home_importer_list['hil_name_en'])?>" class="lazyload" 
				data-original="template/img/photo-<?php echo($home_importer_list['hil_img'])?>.jpg">
                <div class="hil-overlay content-center">
				  <div class="hil-overlay-info">
				    <div class="hil-overlay-icon content-center">
					  <?php require ($_SERVER['IF'].'template/img/flag-'.$home_importer_list['hil_img'].'.svg')?>
					</div>
                    <h2 class="hil-overlay-name">
                      <span class="text-id"><?php echo($home_importer_list['hil_name_id'])?></span>
                      <span class="text-en"><?php echo($home_importer_list['hil_name_en'])?></span>
                    </h2>
				  </div>
				</div>
              </div>
            </li>
          <?php } ?>
        </ul>
      </div>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
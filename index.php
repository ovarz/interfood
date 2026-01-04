<?php 
  $lang='id';
  $menu='Home';
  $template='default';
  require ('template/inc/base.php')
?>
<?php require ($_SERVER['IF'].'template/inc/sample.php')?>
<?php require ($_SERVER['IF'].'template/inc/meta.php')?>
<?php require ($_SERVER['IF'].'template/inc/header.php')?>
<h1 class="hide"><?php echo $sitename; ?> <?php echo $menu; ?></h1>
<div class="rancak-foundation">
  
  
  
  <section class="home-slide">
  
	<div class="home-slide-container">
	  <?php for ($i=1; $i<=5; $i++){ ?>
		<div class="slide-box">
		  <a title="" class="slide-image img-frame thumb-loading" href="">
			<?php 
			  $cover_label_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat'; 
			  $cover_sublabel_id=''; 
			  $cover_label_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat'; 
			  $cover_sublabel_en=''; 
			  $cover_gateway='yes';
			  require ($_SERVER['IF'].'template/module/full-cover.php')
			?>
		  </a>
		</div>
	  <?php } ?>
	</div>
	
    <script>
      var home_slider = tns({
        container:'.home-slide-container',
        speed:333,
        items:1,
        gutter:1, 
        edgePadding:0,
        controls:false,
        nav:true,
		navPosition:'bottom',
        mouseDrag:true,
        autoplay:true,
      });
    </script> 
	
  </section>
  
  
  
  <section class="home-about content-center">
    <div class="site-container">
	
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
			  <span class="text-id">Melakukan Yang Terbaik</span>
			  <span class="text-en">Do The Best</span>
			</h2>
			<h3 class="hab-desc">
			  <span class="text-id"><b>PT. Interfood Sukses Jasindo</b> adalah distributor dan importir terpercaya dan berpengalaman dalam menangani produk makanan dan minuman berkualitas. Bersama mitra kami, kami berkomitmen untuk memberikan <b style="color:var(--color-4);">Yang Terbaik</b> untuk pasar Indonesia.</span>
			  <span class="text-en"><b>PT. Interfood Sukses Jasindo</b> is a trusted and well-established distributor and importer of high-quality food and beverage products. Together with our partners, we are committed to delivering <b style="color:var(--color-4);">The Best</b> to Indonesia’s market.</span>
			</h3>
			<?php $more_type='link'; $more_label_id='Selengkapnya'; $more_label_en='Learn More'; $more_link='about.php'; 
			require ($_SERVER['IF'].'template/module/more.php')?>
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
			  <span class="text-id">Keunggulan Kami</span>
			  <span class="text-en">Our Advantages</span>
			</h2>
			<h3 class="hab-desc">
			  <ul class="text-id">
			    <li>Produk Bersertifikat Halal & Memenuhi Seluruh Regulasi Pemerintah</li>
			    <li>15 Kantor Cabang & Gudang di Seluruh Indonesia</li>
			    <li>Berpengalaman lebih dari 20 Tahun di Pasar & Industri F&B</li>
			    <li>Jaringan Distribusi yang Luas, termasuk Fasilitas  Cold Chain</li>
			    <li>Cakupan Nasional yang Kuat untuk Ritel & HORECA</li>
			    <li>Kemitraan Strategis dengan Supplier Internasional</li>
			  </ul>
			  <ul class="text-en">
			    <li>Global Strategic Partnerships with International Suppliers</li>
			    <li>Over 20 years of Expertise in the Market & Industry</li>
			    <li>15 Branch Offices & Warehouses Nationwide</li>
			    <li>Extensive Distribution Network, including Cold Chain Logistics</li>
			    <li>Strong Nationwide Retail & HORECA Coverage</li>
			    <li>Halal-certified Products & Full Government Compliance</li>
			  </ul>
			</h3>
			<?php $more_type='link'; $more_label_id='Selengkapnya'; $more_label_en='Learn More'; $more_link='about.php'; 
			require ($_SERVER['IF'].'template/module/more.php')?>
		  </div>
		</div>
	  </div>
	  
	</div>
  </section>
  
  
  
  <section class="home-product content-center">
    <div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Produk';
		$subtitle_id='Kami menyediakan berbagai produk makanan dan minuman, mulai dari camilan sehari-hari, hingga bahan berkualitas untuk kebutuhan bisnis.';
	    $title_en='Product'; 
		$subtitle_en='We offer a wide variety of food and beverage products, from everyday snacks to premium ingredients tailored for businesses.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
      <div class="home-product-list">
        <ul class="hpl-container">
          <?php 
            $home_product_array = array();
            $home_product_array[]=array(
              'hpl_name_id'=>'Kembang Gula',
              'hpl_name_en'=>'Confectionery',
              'hpl_label'=>'confectionery',
              'hpl_link'=>'product-list.php',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Cemilan',
              'hpl_name_en'=>'Snacks',
              'hpl_label'=>'snack',
              'hpl_link'=>'product-list.php',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Minuman',
              'hpl_name_en'=>'Beverage',
              'hpl_label'=>'beverage',
              'hpl_link'=>'product-list.php',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Dapur',
              'hpl_name_en'=>'Kitchen',
              'hpl_label'=>'kitchen',
              'hpl_link'=>'product-list.php',
            );
            $home_product_array[]=array(
              'hpl_name_id'=>'Lainnya',
              'hpl_name_en'=>'Others',
              'hpl_label'=>'others',
              'hpl_link'=>'product-list.php',
            );
            foreach($home_product_array as $home_product_list){
          ?>
            <li class="hpl-column">
              <a title="<?php echo($home_product_list['hpl_name_en'])?>" class="hpl-box img-frame thumb-loading" href="<?php echo($home_product_list['hpl_link'])?>">
                <img title="Foto <?php echo($home_product_list['hpl_name_en'])?>" class="lazyload" 
				data-original="template/img/product-<?php echo($home_product_list['hpl_label'])?>.jpg">
                <h2 class="hpl-overlay">
				  <span class="text-id"><?php echo($home_product_list['hpl_name_id'])?></span>
				  <span class="text-en"><?php echo($home_product_list['hpl_name_en'])?></span>
				</h2>
              </a>
            </li>
          <?php } ?>
        </ul>
      </div>
	  
	  <?php $more_type='button'; $more_label_id='Produk Lainnya'; $more_label_en='More Product'; $more_link='product.php'; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	  
	</div>
	<div class="section-separator section-separator-bottom"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
  </section>
  
  
  
  <section class="home-distribution content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Distribusi';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Distribution'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
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
  
  
  
  <section class="home-importer content-center">
	<div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Mitra Internasional';
		$subtitle_id='Kami mengimpor produk dari';
	    $title_en='International Supplier'; 
		$subtitle_en='We import products from';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
      <div class="home-importer-list">
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
					  <div class="hil-overlay-icon-frame img-frame thumb-loading">
					    <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/flag-<?php echo($home_importer_list['hil_img'])?>.png">
					  </div>
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
	<div class="section-separator section-separator-bottom"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
  </section>
  
  
  
  <section class="home-brand content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Brand Ternama yang Kami Wakili';
		$subtitle_id='Kami dengan bangga bekerja sama dengan merek-merek internasional dan lokal terkemuka untuk menghadirkan beragam produk berkualitas.';
	    $title_en='Top Brands We Represent'; 
		$subtitle_en='We proudly partner with leading international and local brands to offer a diverse range of quality products.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
      <?php 
        $brand_type_array = array();
        $brand_type_array[]=array(
          'brand_type_title'=>'in-house brand',
          'brand_type_item'=>'5',
        );
        $brand_type_array[]=array(
          'brand_type_title'=>'factory brand',
          'brand_type_item'=>'20',
        );
        foreach($brand_type_array as $brand_type_list){
      ?>
        <div class="home-brand-display">
          <div class="hbl-label"><?php echo($brand_type_list['brand_type_title'])?></div>
          <div class="home-brand-list">
            <ul class="hbl-container">
              <?php for ($i=1; $i<=$brand_type_list['brand_type_item']; $i++){ ?>
                <li class="hbl-column">
                  <a title="<?php echo $random_title[array_rand($random_title)];?>" class="hbl-box" href="product-list.php">
                    <div class="hbl-logo img-frame thumb-loading content-center">
                      <img title="Logo <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/brand/<?php echo rand(1,80); ?>.png">
                    </div>
                  </a>
                </li>
              <?php } ?>
            </ul>
          </div>
        </div>
      <?php } ?>
	  
	</div>
  </section>
  
  
  
  <section class="latest-news content-center">
    <div class="site-container">
	  <?php 
	    $title_id='Berita Terkini';
		$subtitle_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    $title_en='Latest News'; 
		$subtitle_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
	    require ($_SERVER['IF'].'template/module/h2h3.php')
	  ?>
	  
	  <div class="news-list">
	    <?php for ($i=1; $i<=4; $i++){ ?>
	      <?php require ($_SERVER['IF'].'template/module/news-box.php')?>
		<?php } ?>
	  </div>
	  
	  <?php $more_type='button'; $more_label_id='Berita Lainnya'; $more_label_en='More News'; $more_link='news.php'; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
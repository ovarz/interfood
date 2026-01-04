<?php 
  $lang='id';
  $menu='Product';
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
        $cover_label_id='Produk'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Product'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="home-brand content-center">
    <div class="site-container">
	  <?php 
        $brand_type_array = array();
        $brand_type_array[]=array(
          'brand_type_title'=>'in-house brand',
        );
        $brand_type_array[]=array(
          'brand_type_title'=>'factory brand',
        );
        foreach($brand_type_array as $brand_type_list){
      ?>
        <div class="home-brand-display page-brand-display">
          <div class="hbl-head">
		    <div class="hbl-label"><?php echo($brand_type_list['brand_type_title'])?></div>
			<div class="hbl-all">
			  <?php $more_type='link'; $more_label_id='Selengkapnya'; $more_label_en='Browse All'; $more_link='product-list.php'; 
			  require ($_SERVER['IF'].'template/module/more.php')?>
			</div>
		  </div>
          <div class="home-brand-list">
            <ul class="hbl-container">
              <?php for ($i=1; $i<=20; $i++){ ?>
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
  
  
  
  <section class="home-product page-product content-center">
    <div class="section-separator section-separator-top"><?php require ($_SERVER['IF'].'template/img/icon/separator.svg')?></div>
    <div class="site-container">
	  <?php 
	    $title_id='Kategori';
		$subtitle_id='Kami menyediakan berbagai produk makanan dan minuman, mulai dari camilan sehari-hari, hingga bahan berkualitas untuk kebutuhan bisnis.';
	    $title_en='Category'; 
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
	  
	  <?php $more_type='button'; $more_label_id='Selengkapnya'; $more_label_en='Browse All'; $more_link='product-list.php'; 
	  require ($_SERVER['IF'].'template/module/more.php')?>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
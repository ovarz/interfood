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
        $cover_label_id='Daftar Produk'; 
		$cover_sublabel_id='Indonesia ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.'; 
        $cover_label_en='Product List'; 
		$cover_sublabel_en='English ipsum dolor sit amet, consectetur adipiscing elit. Ut mattis lacinia mauris at volutpat. Integer a porttitor orci, sed scelerisque risus.';
        $cover_gateway='no';
        require ($_SERVER['IF'].'template/module/full-cover.php')
      ?>
    </div>
  </section>
  
  
  
  <section class="product-display content-center">
    <div class="site-container">
	
	  <div class="product-display-split">
	    <div class="pds-small product-display-dropdown" aria-dropdown-box="filter">
		  <div class="product-display-overlay mobile-only"></div>
		  <div class="product-display-filter">
		    <div class="pdf-head">
			  <div class="pdf-head-label">Filter</div>
			  <div class="pdf-head-icon"><?php require ($_SERVER['IF'].'template/img/icon/filter.svg')?></div>
			</div>
			
		    <?php 
			  $filter_array = array();
			  $filter_array[]=array(
				'filter_title_id'=>'Urut Berdasarkan',
				'filter_title_en'=>'Sort By',
				'filter_list' => [
				  [
					'filter_name'=>'Terbaru',
					'filter_lang'=>'id',
				  ],
				  [
					'filter_name'=>'Newest',
					'filter_lang'=>'en',
				  ],
				  [
					'filter_name'=>'Terlama',
					'filter_lang'=>'id',
				  ],
				  [
					'filter_name'=>'Oldest',
					'filter_lang'=>'en',
				  ],
				  [
					'filter_name'=>'Paling Diminati',
					'filter_lang'=>'id',
				  ],
				  [
					'filter_name'=>'Most Favorites',
					'filter_lang'=>'en',
				  ],
				],
			  );
			  $filter_array[]=array(
				'filter_title_id'=>'Merek',
				'filter_title_en'=>'Brand',
				'filter_list' => [
				  [
					'filter_name'=>'-- Semua Merek --',
					'filter_lang'=>'id',
				  ],
				  [
					'filter_name'=>'-- All Brand --',
					'filter_lang'=>'en',
				  ],
				  [
					'filter_name'=>'Brand 1A',
					'filter_lang'=>'',
				  ],
				  [
					'filter_name'=>'Brand 1B',
					'filter_lang'=>'',
				  ],
				  [
					'filter_name'=>'Brand 1C',
					'filter_lang'=>'',
				  ],
				],
			  );
			  foreach($filter_array as $filter_row => $filter_box){
			?>
		    <div class="pdf-box">
			  <div class="pdf-label">
				<span class="text-id"><?php echo($filter_box['filter_title_id'])?></span>
				<span class="text-en"><?php echo($filter_box['filter_title_en'])?></span>
			  </div>
			  <div class="pdf-select">
                <select class="form-field pdf-list">
                  <?php foreach($filter_box['filter_list'] as $filter_box){ ?>
                    <option class="text-<?php echo($filter_box['filter_lang'])?>" value="<?php echo($filter_box['filter_name'])?>"><?php echo($filter_box['filter_name'])?></option>
                  <?php } ?>
                </select>
			    <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/down.svg')?></div>
			  </div>
			</div>
			<?php } ?>
			
		    <?php 
			  $filter_array = array();
			  $filter_array[]=array(
				'filter_title_id'=>'Tipe Produk',
				'filter_title_en'=>'Product Type',
				'filter_list' => [
				  [
					'filter_name_id'=>'Kembang Gula',
					'filter_name_en'=>'Confectionery',
				  ],
				  [
					'filter_name_id'=>'Cemilan',
					'filter_name_en'=>'Snacks',
				  ],
				  [
					'filter_name_id'=>'Minuman',
					'filter_name_en'=>'Beverage',
				  ],
				  [
					'filter_name_id'=>'Dapur',
					'filter_name_en'=>'Kitchen',
				  ],
				  [
					'filter_name_id'=>'Lainnya',
					'filter_name_en'=>'Others',
				  ],
				],
			  );
			  foreach($filter_array as $filter_row => $filter_box){
			?>
		    <div class="pdf-box">
			  <div class="pdf-label">
				<span class="text-id"><?php echo($filter_box['filter_title_id'])?></span>
				<span class="text-en"><?php echo($filter_box['filter_title_en'])?></span>
			  </div>
              <ul class="pdf-list">
                <?php foreach($filter_box['filter_list'] as $filter_box){ ?>
                  <li class="pdf-row custom-checkbox-radiobutton">
                    <input class="ccr-real" name="<?php echo($filter_box['filter_name_en'])?>" type="checkbox">
                    <div class="ccr-dummy">
                      <div class="ccr-dummy-left">
                        <div class="ccr-dummy-frame content-center">
                          <?php require ($_SERVER['IF'].'template/img/icon/check.svg')?>
                        </div>
                      </div>
                      <div class="ccr-dummy-right">
                        <span class="text-id"><?php echo($filter_box['filter_name_id'])?></span>
                        <span class="text-en"><?php echo($filter_box['filter_name_en'])?></span>
                      </div>
                    </div>
                  </li>
                <?php } ?>
              </ul>
			</div>
			<?php } ?>
			
		  </div>
		  <div class="pdf-close mobile-only">
		    <button title="Apply Filter" class="btn pdf-close-button content-center">
              <span class="text-id">Terapkan Filter</span>
              <span class="text-en">Apply Filter</span>
			</button>
		  </div>
		</div>
		
		
		
		<div class="pds-big">
		  <div class="product-display-top">
		    <div class="pdt-search">
              <div class="form-box form-search pdt-search-box">
                <input class="form-field text-id" name="" type="text" placeholder="Cari Produk.....">
                <input class="form-field text-en" name="" type="text" placeholder="Search Product.....">
                <div class="form-icon content-center"><?php require ($_SERVER['IF'].'template/img/icon/search.svg')?></div>
              </div>
			</div>
		    <div class="pdt-info desktop-only">
			  <span class="text-id">Menampilkan 1 - 60 barang dari total</span>
			  <span class="text-en">Showing 1 - 60 items from total</span>
			</div>
		    <div class="pdt-filter-button mobile-only">
			  <button title="" class="btn pdt-button" aria-dropdown-button="filter"><?php require ($_SERVER['IF'].'template/img/icon/filter.svg')?></button>
			</div>
		  </div>
		  <div class="product-display-list">
		    <?php for ($i=1; $i<=12; $i++){ ?>
		      <?php require ($_SERVER['IF'].'template/module/product-box.php')?>
			<?php } ?>
		  </div>
          <?php $more_type='button'; $more_label_id='Muat Produk Berikutnya'; $more_label_en='Load Next Product'; $more_link='product-list.php'; 
          require ($_SERVER['IF'].'template/module/more.php')?>
		</div>
	  </div>
	  
	</div>
  </section>
  
  
  
</div>
<?php require ($_SERVER['IF'].'template/module/product-popup.php')?>
<script defer rancak-hold="template/js/varian-package.js?<?php echo $anticache;?>"></script>
<?php require ($_SERVER['IF'].'template/module/main-location.php')?>
<?php require ($_SERVER['IF'].'template/inc/footer.php')?>
<?php require ($_SERVER['IF'].'template/inc/base-bottom.php')?>
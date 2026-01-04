<div class="rancak-popup product-detail-popup" aria-popup-box="ProductDetail">
  <div class="rancak-popup-container content-center">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-box product-detail">
	
	  <button title="Close" class="rancak-popup-close content-center">
	    <?php require ($_SERVER['IF'].'template/img/icon/close-popup.svg')?>
	  </button>
	  
	  <div class="product-detail-thumb">
	    <div class="product-detail-frame img-frame thumb-loading">
          <img title="Foto <?php echo $random_title[array_rand($random_title)];?>" class="lazyload" data-original="template/img/product/product-varian_a-package_a.jpg">
		</div>
      </div>
	  
	  <div class="product-detail-container">
        <div class="pdc-barcode">
		  <div class="pdc-barcode-frame img-frame thumb-loading">
            <img title="Barcode" class="lazyload" data-original="template/img/product/barcode-varian_a-package_a.svg">
		  </div>
		</div>
        <div class="pdc-id">00XXX0X00XXX</div>
        <h2 class="pdc-name">Product Name <?php echo rand(1,100); ?></h2>
        <h3 class="pdc-brand">Brand Name</h3>
		<?php require ($_SERVER['IF'].'template/module/share-list.php')?>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Varian</span>
            <span class="text-en">Variants</span>
		  </div>
          <div class="pdc-option pdc-varian">
            <?php 
              $product_varian_array = array();
              $product_varian_array[]=array(
                'product_varian_id'=>'VA',
                'product_varian_label'=>'varian_a',
                'product_varian_title_id'=>'Varian A ID',
                'product_varian_title_en'=>'Varian A EN',
              );
              $product_varian_array[]=array(
                'product_varian_id'=>'VB',
                'product_varian_label'=>'varian_b',
                'product_varian_title_id'=>'Varian B ID',
                'product_varian_title_en'=>'Varian B EN',
              );
              $product_varian_array[]=array(
                'product_varian_id'=>'VC',
                'product_varian_label'=>'varian_c',
                'product_varian_title_id'=>'Varian C ID',
                'product_varian_title_en'=>'Varian C EN',
              );
              foreach($product_varian_array as $product_varian_list){
            ?>
              <button title="" class="pdc-option-box" 
			  id="<?php echo($product_varian_list['product_varian_id'])?>" aria-product-toggle="<?php echo($product_varian_list['product_varian_label'])?>">
                <span class="text-id"><?php echo($product_varian_list['product_varian_title_id'])?></span>
                <span class="text-en"><?php echo($product_varian_list['product_varian_title_en'])?></span>
			  </button>
			<?php } ?>
		    <?php for ($i=1; $i<=2; $i++){ ?>
              <div class="pdc-option-box pdc-option-unavailable">
                <span class="text-id">Varian <?php echo rand(1,100); ?></span>
                <span class="text-en">Variants <?php echo rand(1,100); ?></span>
			  </div>
			<?php } ?>
          </div>
		</div>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Kemasan</span>
            <span class="text-en">Packaging</span>
		  </div>
          <div class="pdc-option pdc-package">
            <?php 
              $product_package_array = array();
              $product_package_array[]=array(
                'product_package_id'=>'PA',
                'product_package_label'=>'package_a',
                'product_package_title_id'=>'150ml x 36 can',
                'product_package_title_en'=>'150ml x 36 can',
              );
              $product_package_array[]=array(
                'product_package_id'=>'PB',
                'product_package_label'=>'package_b',
                'product_package_title_id'=>'300ml x 24 can',
                'product_package_title_en'=>'300ml x 24 can',
              );
              foreach($product_package_array as $product_package_list){
            ?>
              <button title="" class="pdc-option-box" 
			  id="<?php echo($product_package_list['product_package_id'])?>" aria-product-toggle="<?php echo($product_package_list['product_package_label'])?>">
                <span class="text-id"><?php echo($product_package_list['product_package_title_id'])?></span>
                <span class="text-en"><?php echo($product_package_list['product_package_title_en'])?></span>
			  </button>
			<?php } ?>
		    <?php for ($i=1; $i<=1; $i++){ ?>
              <div class="pdc-option-box pdc-option-unavailable">
                <span class="text-id">600ml x 12 can</span>
                <span class="text-en">600ml x 12 can</span>
			  </div>
			<?php } ?>
          </div>
		</div>
		<div class="pdc-row">
		  <div class="pdc-label">
            <span class="text-id">Deskripsi</span>
            <span class="text-en">Deskription</span>
		  </div>
          <div class="pdc-desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce rutrum tempor consectetur. Aliquam erat volutpat. Nam et ultrices magna, nec fringilla augue. Donec aliquet dui nisi, eu posuere odio semper dignissim.</p>
          </div>
		</div>
	  </div>
	  
	</div>
  </div>
</div>
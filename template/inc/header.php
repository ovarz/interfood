<header class="content-center">
  <ul class="site-container">
	<li class="header-left">
	  <a title="<?php echo $sitename; ?>" class="header-box header-logo content-center" href="">
	    <?php require ($_SERVER['IF'].'template/img/logo.svg')?>
	  </a>
	</li>
	<li class="header-center rancak-popup" aria-popup-box="MainNav">
      <div class="main-nav">
        <?php 
          $nav_array = array();
          $nav_array[]=array(
            'nav_label_id'=>'Beranda',
            'nav_label_en'=>'Home',
            'nav_link'=>'',
          );
          $nav_array[]=array(
            'nav_label_id'=>'Tentang Kami',
            'nav_label_en'=>'About Us',
            'nav_link'=>'about.php',
          );
          $nav_array[]=array(
            'nav_label_id'=>'Produk',
            'nav_label_en'=>'Product',
            'nav_link'=>'product.php',
          );
          $nav_array[]=array(
            'nav_label_id'=>'Berita',
            'nav_label_en'=>'News',
            'nav_link'=>'news.php',
          );
          $nav_array[]=array(
            'nav_label_id'=>'Karir',
            'nav_label_en'=>'Career',
            'nav_link'=>'career.php',
          );
          $nav_array[]=array(
            'nav_label_id'=>'Kontak',
            'nav_label_en'=>'Contact',
            'nav_link'=>'contact.php',
          );
          foreach($nav_array as $nav_list){
        ?>
            <a title="<?php echo($nav_list['nav_label_en'])?>" 
            class="nav-link <?php if($menu == $nav_list['nav_label_en']) { ?>nav-curr<?php } ?>"
            href="<?php echo($nav_list['nav_link'])?>">
              <span class="text-id"><?php echo($nav_list['nav_label_id'])?></span>
              <span class="text-en"><?php echo($nav_list['nav_label_en'])?></span>
            </a>
        <?php } ?>
      </div>
	</li>
	<li class="header-right">
	  <div class="header-box header-lang content-center">
	    <button title="Indonesia" class="choice-lang choice-id" aria-lang="id">ID</button>
	    <button title="English" class="choice-lang choice-en" aria-lang="en">EN</button>
	  </div>
	  <button title="Toggle Menu" class="header-box header-togglemenu content-center mobile-only open-sticky" aria-popup-button="MainNav">
	    <?php require ($_SERVER['IF'].'template/img/icon/menu.svg')?>
	    <?php require ($_SERVER['IF'].'template/img/icon/close.svg')?>
	  </button>
	</li>
  </ul>
</header>
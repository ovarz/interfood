<footer class="content-center">
  <div class="site-container">
    <div class="footer-socmed content-center">
        <?php 
          $footer_socmed_array = array();
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'Facebook',
            'footer_socmed_icon'=>'facebook',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'X',
            'footer_socmed_icon'=>'x',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'Instagram',
            'footer_socmed_icon'=>'instagram',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'Tiktok',
            'footer_socmed_icon'=>'tiktok',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'Youtube',
            'footer_socmed_icon'=>'youtube',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'WhatsApp',
            'footer_socmed_icon'=>'whatsapp',
            'footer_socmed_link'=>'',
          );
          $footer_socmed_array[]=array(
            'footer_socmed_label'=>'Linkedin',
            'footer_socmed_icon'=>'linkedin',
            'footer_socmed_link'=>'',
          );
          foreach($footer_socmed_array as $footer_socmed_list){
        ?>
          <a title="<?php echo($footer_socmed_list['footer_socmed_label'])?> <?php echo $sitename; ?>" 
		  class="footer-socmed-link footer-socmed-<?php echo($footer_socmed_list['footer_socmed_icon'])?>" 
		  href="<?php echo($footer_socmed_list['footer_socmed_link'])?>" target="_blank">
		    <?php require ($_SERVER['IF'].'template/img/icon/footer-'.$footer_socmed_list['footer_socmed_icon'].'.svg')?>
		  </a>
        <?php } ?>
	</div>
    <div class="footer-copyright content-center">PT. Interfood Sukses Jasindo &copy;2025 - All Right Reserved</div>
  </div>
</footer>
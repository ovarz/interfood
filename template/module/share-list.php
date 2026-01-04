<div class="share-list">
  <?php 
	$share_button_array = array();
	$share_button_array[]=array(
	  'share_label'=>'Facebook',
	  'share_icon'=>'facebook',
	  'share_link'=>'',
	);
	$share_button_array[]=array(
	  'share_label'=>'X',
	  'share_icon'=>'x',
	  'share_link'=>'',
	);
	$share_button_array[]=array(
	  'share_label'=>'Whatsapp',
	  'share_icon'=>'whatsapp',
	  'share_link'=>'',
	);
	$share_button_array[]=array(
	  'share_label'=>'Telegram',
	  'share_icon'=>'telegram',
	  'share_link'=>'',
	);
	foreach($share_button_array as $share_button_list){
  ?>
    <a title="Share <?php echo($share_button_list['share_label'])?>" 
	class="share-box share-<?php echo($share_button_list['share_icon'])?>" href="<?php echo($share_button_list['share_link'])?>">
      <?php require ($_SERVER['IF'].'template/img/icon/share-'.$share_button_list['share_icon'].'.svg')?>
    </a>
  <?php } ?>
</div>
<div class="more">
  <a title="" class="more-link <?php if($more_type == 'button') { ?>btn-outline<?php } ?>" href="<?php echo $more_link; ?>">
    <div class="more-label">
	  <span class="text-id"><?php echo $more_label_id; ?></span>
	  <span class="text-en"><?php echo $more_label_en; ?></span>
	</div>
	<div class="more-icon content-center">
	  <?php require ($_SERVER['IF'].'template/img/icon/more.svg')?>
	</div>
  </a>
</div>
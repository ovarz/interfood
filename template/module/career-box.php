<button title="" class="career-box open-sticky" aria-popup-button="CareerDetail">
  <div class="career-status">
    <div class="career-status-box career-status-<?php echo $career_status;?>">
      <span class="text-id">
	    <?php if($career_status == 'open') { ?>Dibuka<?php } ?>
	    <?php if($career_status == 'close') { ?>Ditutup<?php } ?>
	  </span>
      <span class="text-en">
	    <?php if($career_status == 'open') { ?>Open<?php } ?>
	    <?php if($career_status == 'close') { ?>Close<?php } ?>
	  </span>
    </div>
  </div>
  <?php require ($_SERVER['IF'].'template/module/career-head.php')?>
  <div class="more-link">
    <div class="more-label">
      <span class="text-id">Selengkapnya</span>
      <span class="text-en">Learn More</span>
    </div>
    <div class="more-icon content-center">
      <?php require ($_SERVER['IF'].'template/img/icon/more.svg')?>  
    </div>
  </div>
</button>
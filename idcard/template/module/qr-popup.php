<div class="rancak-popup qr-popup" aria-popup-box="<?php echo $qr_id;?>">
  <div class="rancak-popup-container content-center">
    <div class="rancak-popup-overlay"></div>
    <div class="rancak-popup-box qr-detail">
  
      <header class="header">
        <ul class="site-container">
          <li class="header-left">
            <div title="<?php echo $sitename; ?>" class="header-box header-logo content-center">
              <?php require ($_SERVER['IF'].'template/img/logo.svg')?>
            </div>
          </li>
          <li class="header-right">
            <button title="Close" class="rancak-popup-close header-box header-close content-center">
              <?php require ($_SERVER['IF'].'template/img/icon/close.svg')?>
            </button>
          </li>
        </ul>
      </header>
	  
	  <div class="qr-detail-container">
        <div class="qrdc-title">
          <div class="qrdc-label"><?php echo $qr_label;?></div>
          <div class="qrdc-detail"><?php echo $qr_detail;?></div>
        </div>
		<div class="qrdc-display content-center">
          <div class="qrdc-frame">
            <?php require ($_SERVER['IF'].'template/img/sample/qr.svg')?>
          </div>
		</div>
        <div class="qrdc-note">
          Silakan scan QR Code diatas ini untuk terhubung dengan kami via <?php echo $qr_label;?>
        </div>
	  </div>
	  
	</div>
  </div>
</div>
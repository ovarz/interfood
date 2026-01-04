$(document).ready(function(){
  let currentVarian  = $('.pdc-varian button.pdc-option-box').attr('aria-product-toggle') || 'varian_a';
  let currentPackage = $('.pdc-package button.pdc-option-box').attr('aria-product-toggle') || 'package_a';
  let currentVarianID  = $('.pdc-varian button.pdc-option-box').attr('id') || 'VA';
  let currentPackageID = $('.pdc-package button.pdc-option-box').attr('id') || 'PA';

  function updateImages(){
    let productImg = `template/img/product/product-${currentVarian}-${currentPackage}.jpg`;
    let barcodeImg = `template/img/product/barcode-${currentVarian}-${currentPackage}.svg`;
    let $prod = $('.product-detail-frame img');
    $prod.stop(true,true).fadeToggle(200, function(){
        $prod.attr({
            'data-original': productImg,
            'src': productImg
        }).fadeToggle(200);
    });
    let $barcode = $('.pdc-barcode-frame img');
    $barcode.stop(true,true).fadeToggle(200, function(){
        $barcode.attr({
            'data-original': barcodeImg,
            'src': barcodeImg
        }).fadeToggle(200);
    });
    let newID = `00${currentVarianID}0X00${currentPackageID}X`;
    $('.pdc-id').text(newID);
  }

  $('button.pdc-option-box').on('click', function(){
    let $this = $(this);
    let group = $this.closest('.pdc-option');
    group.find('.pdc-option-box').removeClass('pdc-option-curr');
    $this.addClass('pdc-option-curr');
    if($this.closest('.pdc-varian').length){
        currentVarian   = $this.attr('aria-product-toggle');
        currentVarianID = $this.attr('id');
    } else if($this.closest('.pdc-package').length){
        currentPackage   = $this.attr('aria-product-toggle');
        currentPackageID = $this.attr('id');
    }
    updateImages();
  });
});
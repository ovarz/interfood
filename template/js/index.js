function countup(){
  $('.countup-number').each(function () {
    var $this = $(this);
    var target = parseInt($this.attr('aria-number'), 10);

    $({ countNum: 0 }).animate(
      { countNum: target },
      {
        duration: 2000, // durasi animasi (ms)
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
        }
      }
    );
  });
}



function trigger_scroll(){
  var counted = false;
  
  $(window).scroll(function(){
    var oTop = $(".home-distribution").offset().top - window.innerHeight + 144;
    if (!counted && $(window).scrollTop() > oTop) {
      countup();
	  counted=true;
    }
  }); 
}



$(document).ready(function(){
  "use strict";
  trigger_scroll();
});
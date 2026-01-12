function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function open_sticky(){
  $('.open-sticky').click(function(){
    var get_id = $(this).attr('aria-popup-button');
	$('.open-sticky[aria-popup-button=' + get_id +']').toggleClass('show-sticky');
	$('.open-sticky').not('.open-sticky[aria-popup-button=' + get_id +']').removeClass('show-sticky');
    $('.rancak-popup[aria-popup-box=' + get_id +']').slideToggle('fast');
    $('.rancak-popup').not('[aria-popup-box=' + get_id +']').slideUp('fast');
	return false;
  });	
  
  $('.rancak-popup-overlay, .rancak-popup-close').click(function(){
    ClosePopup();
  });
}



function switch_tab(){
  $('.tab-button').click(function(){
    var get_tab = $(this).attr('aria-tab');
	$('.tab-button[aria-tab=' + get_tab +']').toggleClass('tab-curr');
	$('.tab-button').not('.tab-button[aria-tab=' + get_tab +']').removeClass('tab-curr');
    $('.main-content-slide[aria-slide=' + get_tab +']').slideToggle('fast');
    $('.main-content-slide').not('[aria-slide=' + get_tab +']').slideUp('fast');
	return false;
  });	
}



function change_lang(){
  $('.choice-lang').click(function(){
    var get_lang = $(this).attr('aria-lang');
	$('body').removeClass();
	$('body').addClass('lang-' + get_lang);
	return false;
  });	
}



$(document).ready(function(){
  "use strict";
  open_sticky();
  switch_tab();
  change_lang();
});
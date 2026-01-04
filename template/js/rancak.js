function ClosePopup(){
  $('.open-sticky').removeClass('show-sticky');
  $('.rancak-popup').fadeOut('fast');
}



function back_to_top(){
  $('#btt').on('click',function(){
    $('html, body').animate({
      scrollTop:0
    },500);
    return false;
  });	
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



function product_filter_list(){
  $('.pdt-button').click(function(){
    var get_pdt = $(this).attr('aria-dropdown-button');
    $('.product-display-dropdown[aria-dropdown-box=' + get_pdt +']').fadeToggle('fast');
    $('.product-display-dropdown').not('[aria-dropdown-box=' + get_pdt +']').fadeOut('fast');
	return false;
  });	
  
  $('.product-display-overlay, .pdf-close-button').click(function(){
    $('.product-display-dropdown').fadeOut('fast');
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



function all_scroll(){
  $(window).scroll(function(){
    var scroll_position = $(window).scrollTop();
    if(scroll_position >= 1){
      $('#btt').css("display","flex");	
      $('header').addClass("header-afterscroll");		
    }
    else{
      $('#btt').hide();
      $('header').removeClass("header-afterscroll");
    }
  }); 
}



function contact_tab(){
  $('.tca-button').click(function(){
    var get_tab = $(this).attr('aria-tab-button');
	$('.tca-button[aria-tab-button=' + get_tab +']').toggleClass('tca-curr');
	$('.tca-button').not('.tca-button[aria-tab-button=' + get_tab +']').removeClass('tca-curr');
    $('.tcf-box[aria-tab-box=' + get_tab +']').slideToggle('fast');
    $('.tcf-box').not('[aria-tab-box=' + get_tab +']').slideUp('fast');
	return false;
  });
}



function contact_toggle(){
  $('.cdl-toggle-button').click(function(){
    var get_branch = $(this).attr('aria-branch-button');
	$('.cdl-toggle-button[aria-branch-button=' + get_branch +']').toggleClass('cdl-toggle-open');
	$('.cdl-toggle-button').not('.cdl-toggle-button[aria-branch-button=' + get_branch +']').removeClass('cdl-toggle-open');
    $('.cdl-toggle[aria-branch-list=' + get_branch +']').slideToggle('fast');
    $('.cdl-toggle').not('[aria-branch-list=' + get_branch +']').slideUp('fast');
	return false;
  });
}



$(document).ready(function(){
  "use strict";
  all_scroll();
  back_to_top();
  open_sticky();
  change_lang();
  contact_tab();
  product_filter_list();
  contact_toggle();
});
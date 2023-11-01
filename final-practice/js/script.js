
jQuery(function(){
  
  // カーセル*****************************
  jQuery('.carousel').slick({
    autoplay: true,
    dots: true,
    infinite: true,
    autoplaySpeed: 1000,
    arrows: false,
    fade: true,
    speed:1500,
    // dotsClass:"slide-dots"
    // variableWidth: true,
  });
    // カーセル2*****************************
    jQuery('.carousel2').slick({
      // asNavFor:'#dots-bar',
      // slidesToShow:1,
      autoplay: true,
      dots: false,
      infinite: true,
      autoplaySpeed: 1000,
      arrows: false,
      fade: true,
      speed:1500,
    });

  // ScrollでTOPを表示*****************************
  jQuery(window).scroll(function(){ 

    const scrollValue = jQuery(window).scrollTop()

    if (scrollValue >= 100) {
      jQuery('#top-btn').fadeIn(500);
    } else {
      jQuery('#top-btn').fadeOut(500);
    }    

  });

  //ページ内リンク移動をスムーズにさせる*****************************
  
  jQuery('a[href^="#"]').click(function () {
    const speed = 500;
    let href = jQuery(this).attr("href");
    let target = jQuery(href == "#" || href == "" ? "html" : href);
    let position = target.offset().top;
    jQuery("body,html").animate({ scrollTop: position }, speed, "swing");
    return false;
  });

});

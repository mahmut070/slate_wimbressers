jQuery(document).ready(function($) {


  $('.Slider-img').bxSlider({
    mode: 'horizontal',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 1,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    controls: true,

    pause: 4000,
    auto: true,
    speed: 1500,
    infiniteLoop: true,
    hideControlOnEnd: false,
    touchEnabled: true,
    pager: false,

    onSliderLoad: function() {
      $('.Slider').css('visibility', 'visible');

    }
  });
});

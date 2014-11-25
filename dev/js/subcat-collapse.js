jQuery(document).ready(function($) {

  //unset all the links of non-leafs
  //$('.category-subcategory > .categories > .category-item > a, .product-categories > .category-item > a').each(function() {
  // if ($(this).parent('.category-item').next().hasClass('category-subcategory')) { //non-leaf
  //  $(this).attr('href', '#');
  // }
  //});


  $('.has-children').each(function() {
    $(this).prev().children('a').attr('href', '#');
  });

  $('.category-item > a').click(function(evt) {
    if ($(this).attr('href') == '#') {
      evt.preventDefault();
    }
    var isVisible = $(this).parent('.category-item').next().is(':visible');
    //hide all siblings
    $(this).parent('.category-item').siblings('.category-subcategory').hide();
    var e = $(this).parent('.category-item').next();
    if (e.hasClass('category-subcategory')) {
      if (!isVisible) {
        e.show();
      }
    }
  });

  var MIN_NESTING_DEPTH = 1;
  for (var i = MIN_NESTING_DEPTH; i < 6; i++) {
    $('.categories .category-level-' + i).parent().toggle();
  }
  //now toggle the one that is currently displayed, if possible, and up  the tree to the root

  if ($(window).width() >= 480) {
    if (WebshopType == 'categories' && WebshopItem_id > 0) {
      var elt = $('.category-id-' + WebshopItem_id);
      $('.category-level-2 .category-id-' + WebshopItem_id + ', .category-level-3 .category-id-' + WebshopItem_id).addClass('active');
      //	elt.next().toggle();
      var parent = elt.parent();
      elt.parents('.categories').each(function() {
        if (parseInt($(this).attr('data-category-level')) > 1) {
          $(this).parent().toggle();
        }
      });
    }
  }
});

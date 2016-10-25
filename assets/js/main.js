
   $('.cuteslide').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: true,
asNavFor: '.navslide'
});
$('.navslide').slick({
slidesToShow: 3,
slidesToScroll: 1,
asNavFor: '.cuteslide',
dots: true,
centerMode: true,
focusOnSelect: true
});

// // Slick slide
//  $('.cuteslide').slick({
//     slidesToShow: 1,
//     slidesToScroll: 1,
//     arrows: false,
//     fade: true,
//     asNavFor: '.navslide'
// });
//     $('.navslide').slick({
//     slidesToShow: 3,
//     slidesToScroll: 1,
//     asNavFor: '.cuteslide',
//     dots: true,
//     centerMode: true,
//     focusOnSelect: true
// });


// Blog page effect
$(document).ready(function($){
	var $timeline_block = $('.cd-timeline-block');
	//hide timeline blocks which are outside the viewport
	$timeline_block.each(function(){
		if($(this).offset().top > $(window).scrollTop()+$(window).height()*0.75) {
			$(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
		}
	});
	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		$timeline_block.each(function(){
			if( $(this).offset().top <= $(window).scrollTop()+$(window).height()*0.75 && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) {
				$(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
			}
		});
	});
});

// Autocompletion
jQuery(document).ready(function($){

  var rechercheEnCours=false;


//  console.log(ajaxurl);

$("#searchAjaxInput").on("keyup",function(e){
    if(rechercheEnCours==false)
    {
        rechercheEnCours=true;
        var search_input= $("#searchAjaxInput").val();
        var content_result= $('#searchResult');
        console.log(search_input);
        jQuery.post(
            ajaxurl,
            {
              'action' : 'autocompletion',
              'search_input' : search_input
            },
            function(response)
            {
             content_result.show();
             content_result.html(response);
             rechercheEnCours=false;
            }
        );
    }
  });

  $("#searchAjaxInput").on("blur",function(e){
  setTimeout(
   function(){
    $('#searchResult').hide();
     },
    1000
  );
});

});

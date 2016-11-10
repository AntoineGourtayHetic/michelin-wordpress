// Slick slide
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

  $('section#slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
  });

  console.log(ajaxurl);

  $(".list-category-annonces a").on("click",function(e){
    e.preventDefault();
    var term_id = $(this).attr("data-id");
    var content= $(".annonces");
    $(".list-category-annonces a").removeClass("current");
    $(this).addClass("current");
    content.empty().append("Recherche en cours...");
    jQuery.post(
        ajaxurl,
        {
            'action'  : 'filtre-category',
            'term_id' : term_id,
            'paged'   : 1
        },
        function(response)
        {
          content.html(response);
        }
    );

  });

        $("body").on("click",".buttonMore", function(e){
          e.preventDefault();
          var data_id=$(this).attr("data-id");
          var paged=$(this).attr("data-paged");
          var content= $(".annonces");
          $(this).remove();
          content.append("<span class='ajaxtext'>Recherche en cours</span>");
          jQuery.post(
              ajaxurl,
              {
                  'action'  : 'filtre-category',
                  'term_id' : data_id,
                  'paged'   : paged
              },
              function(response)
              {
                $('.ajaxtext').remove();
                content.append(response);
              }
          );

        });

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

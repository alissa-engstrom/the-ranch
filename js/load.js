var $=jQuery.noConflict();
$(document).ready(function(){
	$(".social-sharing, #main-content").stick_in_parent({offset_top: 100});
    console.log( "ready!" );
    
    
	 $('.btn-search a').click(function(event) {
        	$('.search-form').fadeToggle(100);
        	
			$(this).find('i').toggleClass('fa-search fa-times-circle');

        	event.stopPropagation();
        	event.preventDefault();
    });
    $('.search-close').click(function() {
	    $('.search-form').fadeOut(100);
	    /*event.stopPropagation();
	    event.preventDefault();*/
	    
    });
	$(document).click(function(event) {
	     if ( $(event.target).closest('.search-form').get(0) == null ) {
		     if($('.search-form').is(':visible')){
	         	$(".search-form").fadeOut(50);
	         	$('.btn-search a').find('i').toggleClass('fa-times-circle fa-search');
	         }
	         //$('.btn-search a').find('i').toggleClass('fa-times-circle fa-search');
	    }
	   /* event.stopPropagation();
	    event.preventDefault();*/
	    
	});
   
    $('ul#primary-menu li ul').hide();
	$("ul#primary-menu li").hover(function(event){
		
		$(this).find('ul').fadeIn('fast');
		$(this).find('ul').animate({ marginTop: '-20px' }, 200,'swing');
		
	    event.preventDefault();
	}, function(event) {
    	$(this).find('ul').fadeOut('fast');
    	$(this).find('ul').animate({ marginTop: '0px' }, 0,'swing');
    	
	    event.preventDefault();
	});  
    
    
    $('.testimonials').slick();
    $('.location-images-slides').slick();
    
    



	if($(window).width() <= 992){
	 
		$('#location-bar .program').click(function(event) {
			console.log( "Click that location!" );
			$(this).next('#location-bar .locations').slideToggle({direction: "up"}, 400);
			$(this).find('i').toggleClass('fa-angle-up fa-angle-down');
			event.preventDefault();
		});

	}		
	
	
	
	$(".page-template-faq .cd-faq-trigger").click(function(e){
		
		$(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
		e.stopPropagation();
		e.preventDefault();
	
	});

		$('.select-container ul.faqs').addClass('active').find('> li:eq(0)').addClass('checked');
		
		$('.select-container ul.faqs li').click(function (event) { 
			var tab = $(this).closest('.select-container'), 
				index = $(this).closest('.select-container ul.faqs li').index();
			
			tab.find('ul.faqs > li').removeClass('checked');
			$(this).closest('li').addClass('checked');
			
			$('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
			$('div.tabs_item:eq(' + index + ')').slideDown();
			event.stopPropagation();			
			event.preventDefault();
		} );


$(".list-group-item a.view-categories").click(function(e) {
	
	var $target = $(this).closest('li').find("ul.list-group-sub").slideToggle('fast');
	$(".resource-categories").toggleClass("expand");
	$('ul.list-group-sub').not($target).slideUp('fast');
	event.stopPropagation();
	e.preventDefault();
});





    
    $('.rp4wp-related-post-content a').append('<br /><span class="rp4wp-read-more">Read More</span>');
    
  /*  
    $(window).bind('resize', function(e)
{
  console.log('window resized..');
  this.location.reload(false); 
  
});   */

  


});

jQuery(document).ready(function($f){
	//update these values if you change these breakpoints in the style.css file (or _layout.scss if you use SASS)
	var MqM= 768,
		MqL = 1024;

	var faqsSections = $f('.cd-faq-group'),
		faqTrigger = $f('.cd-faq-trigger'),
		faqsContainer = $f('.cd-faq-items'),
		faqsCategoriesContainer = $f('.cd-faq-categories'),
		faqsCategories = faqsCategoriesContainer.find('a'),
		closeFaqsContainer = $f('.cd-close-panel');
	
		//show faq content clicking on faqTrigger
	/*faqTrigger.on('click', function(event){
		event.preventDefault();
		event.stopPropagation();
		$(this).next('.cd-faq-content').slideToggle(200).end().parent('li').toggleClass('content-visible');
	});*/
	
	/*faqTrigger.on('click', function(event){
    	event.preventDefault();
		event.stopPropagation();
		$f(this).next('.cd-faq-content').slideToggle(400).end().parent('li').toggleClass('content-visible');
		return false;
	});*/
	
	faqTrigger.on('click', function(event){
		//$(this).parent().next().slideToggle('slow', function() {
			$f(this).parent('li').toggleClass('content-visible').next('.cd-faq-content').slideToggle(400).end() 	
			
	});

});
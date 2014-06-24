/*$(document).ready(function() {
	if(!isTouch && is_home)
	{
	var controller = $.superscrollorama({
		playoutAnimations: false,
		reverse: true
	});
	

	
	// Bio
	controller.addTween('#bioSection .sectionTitle', TweenMax.from( $('#bioSection .sectionTitle'), 1.5, {css:{opacity: 0}, immediateRender:true, ease:Quad.easeOut}), 0, -200, 0);	
    controller.addTween('.bioPhoto', TweenMax.from( $('.bioPhoto'), 1, {css:{opacity: 0}, ease:Quad.easeInOut}), 0, 0, 0);
    controller.addTween('#bioQuote', TweenMax.from( $('#bioQuote'), 1, {css:{opacity: 0}, delay:.5, ease:Quad.easeInOut}), 0, -400, 0);
    controller.addTween('#shortBio', TweenMax.from( $('#shortBio'), 1, {css:{opacity: 0}, delay:.5, ease:Quad.easeInOut}), 0, -400, 0);
    controller.addTween('#moreMargaretButton', TweenMax.from( $('#moreMargaretButton'), 1.5, {css:{opacity: 0}, delay:1, ease:Quad.easeInOut}), 0, -800, 0);
    
    // Portfolio
	controller.addTween('#portfolioSection .sectionTitle', TweenMax.from( $('#portfolioSection .sectionTitle'), 1.5, {css:{opacity: 0}, immediateRender:true, ease:Quad.easeOut}), 0, -200, 0);	
	
	
	// Press
	controller.addTween('#pressSection .sectionTitle', TweenMax.from( $('#pressSection .sectionTitle'), 1.5, {css:{opacity: 0}, immediateRender:true, ease:Quad.easeOut}), 0, -200, 0);	
	
	
	$('.blogGrid .blogItem').css('position','relative').each(function(index) {
		controller.addTween('.blogItem', TweenMax.from( $(this), 1.5, {delay:index*.09,css:{opacity:0}, ease:Quad.easeOut}), 0, 0, 0);
	});
	
	controller.addTween('.view_more_blog', TweenMax.from( $('.view_more_blog'), 1.5, {css:{opacity: 0}, immediateRender:true, ease:Quad.easeOut}), 0, -800, 0);
		
	// Contact
	controller.addTween('#contactSection .sectionTitle', TweenMax.from( $('#contactSection .sectionTitle'), 1.5, {css:{opacity: 0}, immediateRender:true, ease:Quad.easeOut}), 0, -200, 0);
	controller.addTween('.contactInfo', TweenMax.from( $('.contactInfo'), .7, {css:{opacity: 0}, ease:Quad.easeInOut}), 0, -300, 0);
    controller.addTween('.socialMediaIcons', TweenMax.from( $('.socialMediaIcons'), .7, {css:{opacity: 0}, ease:Quad.easeInOut}), 0, -300, 0); 
    controller.addTween('.copyright', TweenMax.from( $('.copyright'), .7, {css:{opacity: 0}, ease:Quad.easeInOut}), 0, -300, 0); 
    controller.addTween('.clientLogin', TweenMax.from( $('.clientLogin'), .7, {css:{opacity: 0}, ease:Quad.easeInOut}), 0, -600, 0);
	
	}
});*/
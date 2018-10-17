$(document).ready(function(){

	$('.icon-menu').click(function(event){
		$(this).toggleClass('active');
		$(this).next('div.nav_block').toggleClass('active');
	});

	$('.nav_block ul li a').on('click', function(){
		$('div.icon-menu').removeClass('active');
		$('div.nav_block').removeClass('active');
	});

	$(".popup").magnificPopup({removalDelay:300,type:"inline"});

});

$(document).ready(function() {
	var owl = $('.news_slider');
    if (owl.length)
    	owl.owlCarousel({
		margin:30,
		nav: true,
		loop: true,
		responsive:{
			0:{
				margin:0,
               	items:1
         	 },
         	650:{
          		items:2
        	},
         	1000:{
           		items:2
        	}
		}
	})
})


$(function(){
	$('input[placeholder], textarea[placeholder]').placeholder();
});
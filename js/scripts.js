(function ($, root, undefined) {
	
	$(function () {

		'use strict';
		/* code for open close nav menu */ 

		$(document).ready(function(){
			$('#nav-icon1').click(function(){
				$(this).toggleClass('open');
				$('#menu').toggleClass("active");
			});


			$('#menu li').on('click', function(){
				$("#menu").removeClass("active");
				$('#nav-icon1').toggleClass('open');


			});
			

			/* /code for open close nav menu */ 

			/* code for changing background color */ 

			$(function(){
				if($('body').is('body.tribe_events-template-default, body.post-template-default, body.page-template-template-news, body.page-template-template-menu, body.page-template-template-Trade_Thankyou, body.page-template-template-perks')){
					$(".pageContent").css('background-color', 'rgba(0,0,0,0.8)');
				} else {

					var scroll_pos = 0;
					$(".pageContent").scroll(function() { 
						scroll_pos = $(this).scrollTop();
						if(scroll_pos > 10) {
							$(".pageContent").css('background-color', 'rgba(0,0,0,0.7)');

						} else {
							$(".pageContent").css('background-color', 'rgba(0,0,0,0)');
						}
						console.log(scroll_pos);
					});
				}

			});
			
			
			

			/* /code for changing background color */ 




			/* /Scroll to top of pageContent */
			
			var divPosition = $('#membershipForm').offset();
			$('.wpforms-page-next, .wpforms-page-prev').click(function(){

				$(".pageContent").animate({ scrollTop: divPosition.top }, "fast");

			});


			



			

			/* /Scroll to top of pageContent */
			/* Scroll to top of page */

			var scrollPosition = $('.scrollToMe').offset();
			$('.scrollTo').click(function(){
				$(".pageContent").animate({ scrollTop: scrollPosition.top }, "slow");

			});

		});

		/* /Scroll to top of page */





		




		$(function(){
			if($('body').is('.home, .about')){
				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/home2.jpg)'}).animate({opacity: 1}, 2500);

			} else   if($('body').is('.page-template-template-food, .page-template-template-menu')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/all/2019-12-updates2.jpg)'}).animate({opacity: 1}, 2500);

			} else   if($('body').is('.private-parties, .private-dining-room')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/all/2019-12-updates4.jpg)'}).animate({opacity: 1}, 2500);

			} else   if($('body').is('.page-template-template-membership, .membership, .membership-form')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/members.jpg)'}).animate({opacity: 1}, 2500);

			} 
			
			else   if($('body').is('.careers')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/careers.jpg)'}).animate({opacity: 1}, 2500);

			} 
			else   if($('body').is('.club-rules')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/rules.jpg)'}).animate({opacity: 1}, 2500);

			} 
			else   if($('body').is('.gallery')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/gallery.jpg)'}).animate({opacity: 1}, 2500);

			} 
			else   if($('body').is('.press')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/press.jpg)'}).animate({opacity: 1}, 2500);

			} 
			else   if($('body').is('.the-coravin-cellar')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/all/WH1_6145.jpg)'}).animate({opacity: 1}, 2500);

			} 

			else   if($('body').is('.anglotrade')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/all/2019-12-updates1.jpg)'}).animate({opacity: 1}, 2500);

			} 
			else   if($('body').is('.tribe-theme-Trade_Custom_Theme')){

				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/all/2019-12-updates5.jpg)'}).animate({opacity: 1}, 2500);

			} 




			else {
				$('#back').animate({opacity: 0}, 0).css({'background-image': 'url(https://tradesoho.co.uk/wp-content/themes/Trade_Custom_Theme/img/background/more.jpg)'}).animate({opacity: 1}, 2500);

			}


		});



	/*
body.home{
  background-image:url(../img/background/home.jpg); 
}
body.page-template-template-food, body.page-template-template-menu{
  background-image:url(../img/background/events.jpg);
}
body.tribe-theme-Trade{
  background-image:url(../img/background/food.jpg);
}

body.page-template-template-membership, body.membership, body.membership-form {
  background-image:url(../img/background/members.jpg);
}

body.page-template-template-news, body.post-template-default, body.page-template-template-partners, .page-template-template-Trade_Basic, .page-template-template-Press{
  background-image:url(../img/background/more.jpg);
}




body{
  background-repeat: no-repeat;
  background-size:cover;
  background-attachment: fixed;
  background-position: center; 

}
/*--- Background Image ---*/
		/* Code VIDEO 

		
		var video = document.getElementById("myVideo");
		var btn = document.getElementById("myBtn");

		function myFunction() {
			if (video.paused) {
				video.play();
				btn.innerHTML = "Pause";
			} else {
				video.pause();
				btn.innerHTML = "Play";
			}
		}
		/* /Code VIDEO */ 
		/* Code Scroll appearance effects

		AOS.init();

		/* /Code Scroll appearance effects*/ 

		/* Scroll to top of pageContent 


		$(document).ready(function(){
			$('#MyButton').click(function(){
				$(".pageContent").animate({ scrollTop: 0 }, "fast");

			});

		});*/





	});



})(jQuery, this);

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


	
			var scroll_pos = 0;
			$(".pageContent").scroll(function() { 
				scroll_pos = $(this).scrollTop();
				if(scroll_pos > 60) {
					$(".pageContent").css('background-color', 'rgba(0,0,0,0.8)');

				} else {
					$(".pageContent").css('background-color', 'rgba(0,0,0,0)');
				}
				console.log(scroll_pos);
			});
	

		/* /code for changing background color */ 




		/* /Scroll to top of pageContent */
		
				var divPosition = $('#membershipForm').offset();
			$('.wpforms-page-next, .wpforms-page-prev').click(function(){

				$(".pageContent").animate({ scrollTop: divPosition.top }, "fast");

			});


		

		/* /Scroll to top of pageContent */







		});

		
	

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
				$(".pageContent").scrollTop(0);

			});

		});*/





	});
	
})(jQuery, this);

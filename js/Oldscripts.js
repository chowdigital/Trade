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
		});

		/* /code for open close nav menu */ 

		/* code for changing background color */ 


		$(document).ready(function(){       
			var scroll_pos = 0;
			$(".pageContent").scroll(function() { 
				scroll_pos = $(this).scrollTop();
				if(scroll_pos > 10) {
					$(".pageContent").css('background-color', 'rgba(0,0,0,0.8)');

				} else {
					$(".pageContent").css('background-color', 'rgba(0,0,0,0)');
				}
				console.log(scroll_pos);
			});
		});

		/* /code for changing background color */ 

		/* Code VIDEO */ 

		
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
		/* Code Scroll appearance effects*/ 

		AOS.init();

		/* /Code Scroll appearance effects*/ 

		/* Scroll to top of pageContent */
		

		$(document).ready(function(){
			$('#MyButton').click(function(){
				$(".pageContent").animate({ scrollTop: 0 }, "fast");

			});

		});


		/* /Scroll to top of pageContent */
			$(document).ready(function(){
				var divPosition = $('#membershipForm').offset();
			$('.wpforms-page-next, .wpforms-page-prev').click(function(){

				$(".pageContent").animate({ scrollTop: divPosition.top }, "fast");

			});

		});
		

		/* /Scroll to top of pageContent */



	});
	
})(jQuery, this);

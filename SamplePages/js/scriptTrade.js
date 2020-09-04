/*
* @Author: sean
* @Date:   2019-02-20 16:04:46
* @Last Modified by:   sean
* @Last Modified time: 2019-03-08 10:53:19
*/

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

$(document).ready(function(){       
            var scroll_pos = 0;
            $(".pageContent").scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 210) {
                    $(".pageContent").css('background-color', 'rgba(0,0,0,0.7)');
                } else {
                    $(".pageContent").css('background-color', 'rgba(0,0,0,0)');
                }
                console.log(scroll_pos);
            });
        });


/* Background fade in 

$(document).ready(function() {
    $('#back').animate({opacity: 0}, 0).css({'background-image': 'url(http://tradesoho.seancloudsdale.co.uk/wp-content/uploads/2019/03/CD1_9441.jpg)'}).animate({opacity: 1}, 2500);
});

*/
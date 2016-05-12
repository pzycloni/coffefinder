(function(){

    $(window).scroll(function() {
        checkSection();
    });

    $(document).ready(function() {

    	$('.nav_item').on('click', function(e) {
    		e.preventDefault();
    		showSection($(this).attr('href'), true);
    	});

    	showSection(window.location.hash, false);
    });

function showSection(section, isAnimate) {
	var direction = section.replace(/#/, ''),
	    reqSection = $('.page').filter('[data-section="' + direction + '"]'),
	    reqSectionPos = reqSection.offset().top;

    if (isAnimate) {
        $('body, html').animate({scrollTop: reqSectionPos}, 500);
    } else {
        $('body, html').scrollTop(reqSectionPos);
    }
}

    function checkSection() {
        $('.page').each(function() {
            var 
                $this = $(this),
                topEdge = $this.offset().top - 200,
                bottomEdge = topEdge + $this.height(),
                wScroll = $(window).scrollTop();

        if (topEdge < wScroll && bottomEdge > wScroll) {
            var 
                currentId = $this.data('section'),
                reqLink = $('.nav_item').filter('[href="#' + currentId + '"]');
                reqLink.closest('.nav').addClass('thisPageActive').siblings().removeClass('thisPageActive');
        }

        var mBorderHgt = '40px',
            defBorderHgt = '80px',
            homeSect = 'home',
            infoSect = 'info',
            mapSect = 'map';


        if (currentId == infoSect || currentId == mapSect) {
			$('.header').css({
                'height': mBorderHgt
            });

            $('.turn_block > h4').css({
                'height': mBorderHgt,
                'line-height': mBorderHgt
             });

            $('.up_border_content > div').css({
                'height': mBorderHgt,
                'line-height': mBorderHgt
            });
		} else if (currentId == homeSect){
			$('.header').css({
                'height': defBorderHgt
            });

            $('.turn_block > h4').css({
                'height': defBorderHgt,
                'line-height': defBorderHgt
             });

            $('.up_border_content > div').css({
                'height': defBorderHgt,
                'line-height': defBorderHgt
             });
		}
    		
        });
    }

})();
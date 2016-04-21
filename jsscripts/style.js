(function(){

    $(function(){

        var 
            screen = 0, 
            container = $('.maincontent'),
            pages = $('.page'),
            inscroll = false;

        $('.page:first-child').addClass('active');

        $('body').on('mousewheel', function(event) {

            var
                activePage = pages.filter('.active');

            if (!inscroll) {
                inscroll = true;
                if (event.deltaY > 0) {

                    if (activePage.prev().length) {
                        screen--;
                    }
                } else {

                    if (activePage.next().length) {
                        screen++;
                    }
                }
                
            }


            var 
                position = (-screen * 100) + '%';

            pages.eq(screen).addClass('active').siblings().removeClass('active');

            container.css('top', position);

            setTimeout(function() {
                inscroll = false;
            }, 1100);
        });

    	$("input").focus(function() {
    		$(this).css('box-shadow', '0px 0px 39px -13px rgba(14,187,199,0.6)');
    	});

    	$("input").blur(function() {
    		$(this).css('box-shadow', '0 0 0 transparent');
    	});

    	/*$(".turn_block").click(function() {
    		if ($(".up_border_content").css('opacity') == '0'){
    			$(".up_border_content").css({'width': '93%', 'height' : '40px', 'opacity': '1'});
    			$(".header").css('width', '70%');
    		} 
    		else {
    			$(".up_border_content").css({'width': '0', 'height' : '0', 'opacity': '0'});
    			$(".header").css('width', '10%');
    		}
    		return false;
    	});*/
   	});
	
})();
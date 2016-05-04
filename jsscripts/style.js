(function(){

    $(function(){

        ymaps.ready(init);
        var myMap;

        $('.nav_item').click(function(e) {
            e.preventDefault();
           // showSection($(this).attr('href'), true);
        });

        //showSection(window.location.hash, false);

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

                    if (activePage.prev().length  && screen > 0) {
                        screen--;
                    }

                } else {

                    if (activePage.next().length) {
                        screen++; 
                    }        
                }

                if (screen == 0){
                    $('.header').css({'height': '80px'});
                    $('.turn_block').css({'height': '80px', 'line-height': '80px'});
                    $('.up_border_content > div').css({'height': '80px', 'line-height': '80px'});

                } else {
                    $('.header').css({'height': '40px'});
                    $('.turn_block').css({'height': '40px', 'line-height': '40px'});
                    $('.up_border_content > div').css({'height': '40px', 'line-height': '40px'});
                }              
            }

            var 
                position = (-screen * 100) + '%';

            pages.eq(screen).addClass('active').siblings().removeClass('active');

            container.css('top', position);



            setTimeout(function() {
                inscroll = false;
            }, 1100);

            setTimeout( function() {
                $('.page').each(function() {
                var 
                    $this = $(this),
                    topEdge = $this.offset().top - 200,
                    bottomEdge = topEdge + $this.height(),
                    wScroll = $(window).scrollTop(),
                    active = 'thisPageActive';

                if (topEdge < wScroll && bottomEdge > wScroll) {
                    var 
                        currentId = $this.data('section'),
                        reqLink = $('.nav_item').filter('[href="#' + currentId + '"]');
                        reqLink.closest('.nav').addClass(active).siblings().removeClass(active);
                }
                console.log(currentId);
                });
            }, 500);

        });

    	$("input").focus(function() {
    		$(this).css('box-shadow', '0px 0px 39px -13px rgba(14,187,199,0.6)');
    	});

    	$("input").blur(function() {
    		$(this).css('box-shadow', '0 0 0 transparent');
    	});
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

    function init(){
        myMap = new ymaps.Map("coffie_map", {
            center: [55.16, 61.40],
            zoom: 12,
            controls:["zoomControl", "fullscreenControl","geolocationControl"]
        });
    }
	
})();



/*$(window).scroll(function() {
            checkSection();
});

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
                        reqLink.closest('.nav').addClass('active').siblings().removeClass('active');
                }
                console.log(currentId);
            });
        }*/
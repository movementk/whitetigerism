(function($) {
    // 메인 슬라이더 관련
    $('#introduce .slider').bxSlider({
        mode: 'fade',
        preventDefaultSwipeY: true,
        preventDefaultSwipeX: true,
        prevText: '<i class="icon-left-open"><span class="sr-only">이전</span></i>',
        nextText: '<i class="icon-right-open"><span class="sr-only">다음</span></i>',
        pagerCustom: '.bx-pager-img',
        touchEnabled: false,
        buildPager: function(slideIndex) {
            return '<span class="sr-only">'+slideIndex+'</span>';
        },
        onSliderLoad: function(currentIndex) {
            var $currentElem = $('#introduce .intro-item:not(.bx-clone):eq(0)');
            $currentElem.addClass('active');
            var typeContainer = $currentElem.find('span.typed:eq(0)');
            var typeString    = $currentElem.find('span.typed:eq(0)').attr("data-typed");
            var introVideo = document.getElementById('intro-video-'+(currentIndex+1));
            if (introVideo) {
                introVideo.play();
            }
        },
        onSlideBefore: function($slideElement, oldIndex, newIndex) {
            $('#introduce .intro-item.active').removeClass('active');
            var introVideo = document.getElementById('intro-video-'+(oldIndex+1));
            if (introVideo) {
                introVideo.pause();
            }
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex) {
            $slideElement.addClass('active');
            var typeContainer = $slideElement.find('span.typed:eq(0)');
            var typeString    = $slideElement.find('span.typed:eq(0)').attr("data-typed");
            var introVideo = document.getElementById('intro-video-'+(newIndex+1));
            if (introVideo) {
                introVideo.play();
            }
        }
    });

    // 무비 슬라이더
    $(document).ready(function(){
        $('.movie .movie-list').bxSlider({
            auto: true,
            pager: false,
            prevText: '<i class="icon-left-open"><span class="sr-only">이전</span></i>',
            nextText: '<i class="icon-right-open"><span class="sr-only">다음</span></i>'
        });
    });


    // 스폰서 슬라이더
    var sponsorsSliderOpt = {
        auto: true,
        controls: false,
        pager: false,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 80,
        slideMargin: 10
    };

    var sponsorsSlider = $('.sponsors-list').bxSlider(sponsorsSliderOpt);

    $(window).on('load resize', function() {
        var conWidth = $('.container:eq(0)').outerWidth();
        sponsorsSlider.reloadSlider(sponsorsSliderOpt);
        if ( conWidth >= 750 ) {
            sponsorsSlider.reloadSlider({
                auto: true,
                controls: false,
                pager: false,
                slideWidth: 186,
                minSlides: 3,
                maxSlides: 3,
                moveSlides: 1,
                slideMargin: 10
            });
        }
        if ( conWidth >= 970 ) {
            sponsorsSlider.reloadSlider({
                auto: true,
                controls: false,
                pager: false,
                slideWidth: 230,
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 1,
                slideMargin: 10
            });
        }
        if ( conWidth >= 1200 ) {
            sponsorsSlider.reloadSlider({
                auto: true,
                pager: false,
                controls: false,
                slideWidth: 230,
                minSlides: 4,
                maxSlides: 4,
                moveSlides: 1,
                slideMargin: 10
            });
        }
    });

})(jQuery);
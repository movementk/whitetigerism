(function($) {
    // 헤더 스크롤
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 0) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });

    // gnb nav
    $(document).on("click", "#header .quick-menu .btn-open-side-nav", function(e) {
        $("body").addClass("gnb-opened");
        e.preventDefault();
    });
    $(document).on("click", "#side-nav .nav-backdrop, #side-nav .nav-content .btn-close", function(e) {
        $("body").removeClass("gnb-opened");
    });

    // 메뉴 관련
    $(document).on("click", "#side-nav .nav-content > .nav-body > .nav > ul > li > a", function(e) {		
        if ($(this).parent().hasClass("active")) {
            $(this).parent().removeClass("active");
        } else {
            $(this).parent().siblings(".active").removeClass("active");
            $(this).parent().addClass("active");
        }
        e.preventDefault();
    });
    
    // 헤더 네비게이션 관련 이벤트 
    $(document).on('mouseenter focusin', '#header .quick-menu > ul > .sharing > a', function() {
        $('.quick-menu .sharing').addClass('active');
    });
    $(document).on('mouseleave', '#header .quick-menu > ul > .sharing', function() {
        $('.quick-menu .sharing').removeClass('active');
    });
})(jQuery);
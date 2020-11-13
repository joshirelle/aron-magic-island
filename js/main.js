(function($) {
    $(function() {
        $(".fixed-action-btn").floatingActionButton();
        $(".sidenav").sidenav();
        $(".materialboxed").materialbox();
        $(".carousel.carousel-slider").carousel({
            fullWidth: true,
            indicators: true,
        });

        $(".modal").modal();
        $(".collapsible").collapsible();
        $(".tap-target").tapTarget();
        $(".datepicker").datepicker();
    });
})(jQuery);
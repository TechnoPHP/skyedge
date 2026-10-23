$(function () {
    const yearEl = $('#year');
    if (yearEl.length) {
        yearEl.text(new Date().getFullYear());
    }

    $('.navbar-nav a').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('shadow-sm');
        } else {
            $('.navbar').removeClass('shadow-sm');
        }
    });
});

$ = jQuery;
$(function() {
    var tabs_container = $(".tabs-container");
    tabs_container.find($(".tab")).click(function() {
        var index = $(this).index();
        $(this).addClass("active");
        $(this)
            .siblings(".tab")
            .removeClass("active");
        $(this)
            .parent()
            .parent()
            .parent()
            .find(".panel")
            .removeClass("active")
            .eq(index)
            .addClass("active");
    });
});
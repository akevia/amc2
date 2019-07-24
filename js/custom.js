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
            .closest(".tabs-container")
            .find(".panel")
            .removeClass("active")
            .eq(index)
            .addClass("active");
    });


    function blogconfig() {
        var anchoCarta = $(".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(2) .card:nth-child(1)").width();
        var anchoBoton = $(".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(2) .card:nth-child(1) .leer-mas").width();

        $(".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(1) .card:nth-child(2)").css('width', anchoCarta);
        $(".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(1) .card:nth-child(1) .leer-mas, .contenedor-general-blog .contenedor-blog .column:nth-child(1) .card .leer-mas").css('width', anchoBoton);
    }

    blogconfig();

    $(window).resize(function() {
        blogconfig();
    });

});
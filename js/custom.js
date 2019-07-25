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
        var anchoCarta = $(
            ".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(2) .card:nth-child(1)"
        ).width();
        var anchoBoton = $(
            ".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(2) .card:nth-child(1) .leer-mas"
        ).width();

        $(
            ".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(1) .card:nth-child(2)"
        ).css("width", anchoCarta);
        $(
            ".contenedor-general-blog .contenedor-blog .column:nth-child(2) .row:nth-child(1) .card:nth-child(1) .leer-mas, .contenedor-general-blog .contenedor-blog .column:nth-child(1) .card .leer-mas"
        ).css("width", anchoBoton);
    }

    blogconfig();

    $(window).resize(function() {
        blogconfig();
    });

    var menu_light = $(".light-menu").toArray();
    var menu_dark = $(".dark-menu").toArray();
    var menus = menu_dark.concat(menu_light);
    menus.forEach(function(element, index) {
        menus[index].top = $(element).position().top;
        menus[index].bottom =
            $(element).position().top + $(element).outerHeight(true);
    });

    function compare(a, b) {
        if (a.top < b.top) {
            return -1;
        }
        if (a.top > b.top) {
            return 1;
        }
        return 0;
    }

    menus.sort(compare);
    $(window).scroll(function() {
        var header = $(window).scrollTop();
        for (var i = 0; i < menus.length; i++) {
            var name = menus[i].className;
            var pTop = menus[i].top;
            var pBottom = menus[i].bottom - 100;

            if (header < pBottom && header >= pTop) {
                if (name == "dark-menu") {
                    $("header").addClass("dark");
                    $("header").removeClass("light");
                } else {
                    $("header").addClass("light");
                    $("header").removeClass("dark");
                }
                break;
            }
        }
    });
});
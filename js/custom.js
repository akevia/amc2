$ = jQuery;
$(function() {
    $(".form-row input").unwrap();
    $(".form-row textarea").unwrap();
    changingMenuClass();
    $('a[href*="#"]').click(function() {
        if ($(window).width() <= 991 && $(".content-header").hasClass("active")) {
            $(".content-header").toggleClass("active");
        }
    });

    $(".button-mobile").click(function() {
        $(".content-header").toggleClass("active");
    });

    var tabs_container = $(".tabs-container");
    tabs_container.find($(".tab")).click(function() {
        var role = $(this)
            .closest(".tabs-container")
            .attr("role");
        var name = $(this).text();
        var index = $(this).index();
        $(this).addClass("active");
        $(this)
            .siblings(".tab")
            .removeClass("active");
        if (role) {
            $(this)
                //.closest(".colmn").next().find(".tabs-container").removeClass("active").eq(index).addClass("active");
                .closest(".tabs-container")
                .next()
                .children(".colmn:nth-child(2)")
                .find(".tabs-container")
                .removeClass("active")
                .eq(index)
                .addClass("active");
            $(this)
                .closest(".tabs-container")
                .next()
                .children(".colmn:nth-child(2)")
                .find(".tabs-container")
                .eq(index)
                .find(".tab:nth-child(1)")
                .click();
        } else {
            $(this)
                .closest(".tabs-container")
                .find(".panel")
                .removeClass("active")
                .eq(index)
                .addClass("active");

            $(".colection-videos .video").each(function() {
                var aux = $(this).attr("name");
                if (aux == name) {
                    $(this).addClass("active");
                    this.currentTime = 0;
                    this.play();
                } else {
                    $(this).removeClass("active");
                }
            });
        }
    });

    function blogconfig() {
        /* Blog */
        if ($(window).width() > 767) {
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

        /* Productos */
        /*
            if ($(window).width() > 767 && $(window).width() < 1750) {
                $(".programas-slider .swiper-slide").each(function(index) {
                    var anchoContTab = $(this)
                        .find("ul.tabs")
                        .width();
                    $(this)
                        .find(".colmn:nth-child(2) .content")
                        .css("max-width", anchoContTab + 3);
                });
            }
            */
    }

    blogconfig();

    $(window).resize(function() {
        blogconfig();
        changingMenuClass();
    });

    $("#mas").click(function(e) {
        $("#programas").addClass("move");
        $("#casos-de-exito").addClass("move");
        $("header").addClass("light");
        $("header").removeClass("dark");
    });

    $("#menos").click(function(e) {
        $("#programas").removeClass("move");
        $("#casos-de-exito").removeClass("move");
        $("header").removeClass("light");
        $("header").addClass("dark");
    });

    function changingMenuClass() {
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
                var pBottom = menus[i].bottom - 70;

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

            if (header > 0) {
                $(".content-header").addClass("min-header");
            } else {
                $(".content-header").removeClass("min-header");
            }
        });
    }

    $("#competencias")
        .find(".small-title-slider")
        .next()
        .find(".tab:nth-child(1)")
        .addClass("caca")
        .click();
});
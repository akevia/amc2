$ = jQuery;
$(function() {
    $(".form-row input").unwrap();
    $(".form-row textarea").unwrap();
    //changingMenuClass();
    $('a[href*="#"]').click(function() {
        if ($(window).width() <= 991 && $(".content-header").hasClass("active")) {
            $(".content-header").toggleClass("active");
        }
    });

    $(".button-mobile").click(function() {
        $(".content-header").toggleClass("active");
    });


    var indexSlide;
    var modulo;

    var tabs_container = $(".tabs-container");
    tabs_container.find($(".tab")).click(function() {
        modulo = $(this).text();
        var role = $(this).closest(".tabs-container").attr("role");
        var name = $(this).text();
        var index = $(this).index();
        $(this).addClass("active");
        $(this)
            .siblings(".tab")
            .removeClass("active");
        if (role) {
            $(this)
                //.closest(".colmn").next().find(".tabs-container").removeClass("active").eq(index).addClass("active");
                .closest(".tabs-container").next().children(".colmn:nth-child(2)").find(".tabs-container").removeClass("active").eq(index).addClass("active");


                var a = 0;
                $("#competencias .swiper-slide").each(function(){
                    var sumodulo = $(this).attr("modulo");
                    if(sumodulo == modulo){
                        $(this).show();
                        if(a == 0){
                            $(this).find("video").each(function(){
                                this.currentTime = 0;
                                this.play();
                            });
                        }
                        a++;
                    }
                    else{
                        $(this).hide();
                    }
                });

                // $(this).closest(".tabs-container").next().children(".colmn:nth-child(2)").find(".tabs-container").eq(index).find(".tab:nth-child(1)").click();
                var competencias = new Swiper('.competencias-slider', {
                    spaceBetween: 100,
                    simulateTouch: false,
                    noSwipingClass: 'swiper-no-swiping',
                    navigation: {
                        nextEl: '.swiper-button-next.competencias',
                        prevEl: '.swiper-button-prev.competencias',
                    },
                });

                

                indexSlide = 0;



            }
            else{
                /*
                $(this)
                .closest(".tabs-container")
                .find(".panel")
                .removeClass("active")
                .eq(index)
                .addClass("active");
*/
                


            }
    });


    function reproducirVideoCompetencia(){
        $("#competencias .swiper-slide[modulo='"+modulo+"']").each(function(index){
            if(index == indexSlide){
                $(this).find("video").each(function(){
                    this.currentTime = 0;
                    this.play();
                });
            }
        });
    }


    $(".swiper-button-next.competencias").click(function(){
        indexSlide++;
        reproducirVideoCompetencia();
    });

    $(".swiper-button-prev.competencias").click(function(){
        indexSlide--;
        reproducirVideoCompetencia();
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

    //blogconfig();

    $(window).resize(function() {
        blogconfig();
        //changingMenuClass();
    });

    $("#mas").click(function(e) {
        $("#programas").addClass("move");
        $("#casos-de-exito").addClass("move");
        $("header").addClass("dark");
        $("header").removeClass("light");
        $("#cont-chido").removeClass("light-menu");
        $("#cont-chido").addClass("dark-menu");

    });

    $("#menos").click(function(e) {
        $("#programas").removeClass("move");
        $("#casos-de-exito").removeClass("move");
        $("header").removeClass("dark");
        $("header").addClass("light");
        $("#cont-chido").removeClass("dark-menu");
        $("#cont-chido").addClass("light-menu");
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


    /*  Quienes Somos Page */

    function diviguales(){
        var anchoPantalla = $(window).width();
        if(anchoPantalla >= 768){
            var alturaTarjeta = $(".contenedor-general-casos .contenedor-casos .cont-caso:nth-child(2) .info").height();
            $(".contenedor-general-casos .contenedor-casos .cont-caso:nth-child(1) .info").height(alturaTarjeta);
        }
    }

/*
    diviguales();
    
    $(window).resize(function(){
        diviguales();
    });
*/
        /* Popup*/
        $('.btn-video').click(function(e){
            e.preventDefault();
            $('.contenedor-general-modal').show();
        });
    
        $('#cerrar-modal').click(function(){
            $('.contenedor-general-modal').hide();
        })
});
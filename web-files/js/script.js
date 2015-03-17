$(document).ready(function () {

    /******************************  Envio Formulario Contato  ******************************/

    if (document.getElementById("btn-send-contato") != null) {
        $("#btn-send-contato").click(function () {

            var site = $("#site").val();
            var nome = $("#nome").val();
            var email = $("#email").val();
            var email_recipiente = $("#email_recipiente").val();
            var alias = $("#alias").val();
            var assunto = $("#assunto").val();
            var mensagem = $("#mensagem").val();

            $('#visualizar').html('<img src="/web-files/img/Loader.GIF" alt="Enviando..." style="width: 32px;"/> Enviando...');

            $.ajax({
                type: 'post',
                data: 'nome=' + nome + '&email=' + email + '&assunto=' + assunto + '&mensagem=' + mensagem + '&site=' + site + '&email_recipiente=' + email_recipiente + '&alias=' + alias,
                url: '/pt/contato',
                success: function (data) {
                    if (data['erro'] != "") {
                        $("#visualizar").html(data['erro']);
                    } else {
                        $("#visualizar").html(data['success']);
                        $("#nome").val("");
                        $("#email").val("");
                        $("#assunto").val("");
                        $("#mensagem").val("");
                    }

                }
            });

        });
    }
    /******************************  Envio Formulario Proposta  ******************************/
    if (document.getElementById("btn-send-proposta") != null) {
        $("#btn-send-proposta").click(function () {

            var site = $("#site").val();
            var nome = $("#nome").val();
            var email = $("#email").val();
            var email_recipiente = $("#email_recipiente").val();
            var alias = $("#alias").val();
            var mensagem = $("#mensagem").val();

            $('#visualizar').html('<img src="/web-files/img/Loader.GIF" alt="Enviando..." style="width: 32px;"/> Enviando...');

            $.ajax({
                type: 'post',
                data: 'nome=' + nome + '&email=' + email + '&mensagem=' + mensagem + '&site=' + site + '&email_recipiente=' + email_recipiente + '&alias=' + alias,
                url: '/pt/carros/detalhes',
                success: function (data) {
                    if (data['erro'] != "") {
                        $("#visualizar").html(data['erro']);
                    } else {
                        $("#visualizar").html(data['success']);
                        return false;
                    }

                }
            });

        });
    }
    /******************************  Envio Formulario Venda  ******************************/

    if (document.getElementById("btn-send-vender") != null) {
        $("#btn-send-vender").click(function () {

            var site = $("#site").val();
            var fabricante = $("#fabricante").val();
            var modelo = $("#modelo").val();
            var ano = $("#ano").val();
            var email = $("#email").val();
            var email_recipiente = $("#email_recipiente").val();

            $('#msg-vender').html('<img src="/web-files/img/Loader.GIF" alt="Enviando..." style="width: 32px;"/> Enviando...');

            $.ajax({
                type: 'post',
                data: 'fabricante=' + fabricante + '&modelo=' + modelo + '&ano=' + ano + '&email=' + email + '&site=' + site + '&email_recipiente=' + email_recipiente,
                url: '/pt/carros/vender',
                success: function (data) {
                    if (data['erro'] != "") {
                        $("#msg-vender").html(data['erro']);
                    } else {
                        $("#msg-vender").html(data['success']);
                        $("#fabricante").val("");
                        $("#email").val("");
                        $("#modelo").val("");
                        $("#ano").val("");
                    }

                }
            });

        });
    }
    /******************************  Placeholder  ******************************/
    Placeholder.init();





    /*************************  Slider Revolution  *****************************/
    if ($('.banner').length) {
        $('.banner').revolution({
            startheight: 500,
            startwidth: 1900,
            onHoverStop: "on",
            hideThumbs: 1,
            navigationArrows: 'solo',
            navigationType: "bullet",
            navigationStyle: "round",
            shadow: 3,
        });
    }



    /*******************************  GMaps  ***********************************/
    if ($('#map').length) {

        var map;
        map = new GMaps({
            div: '#map',
            lat: 41.8902624,
            lng: 12.4923096
        });

        map.addMarker({
            lat: 41.8902624,
            lng: 12.4923096,
            title: 'Contanct',
            infoWindow: {
                content: '15rd Avenue, New York,<br /> 156408, US<br /> <br /> Email: info@company.com <br /> Web: company.com'
            }
        });

    }



    /***************************** Slider Range  *******************************/

    if ($('#slider-price').length) {
        initSliderRange(
                $('#slider-price .slider'),
                '$ ',
                '',
                1000,
                100000,
                1000,
                [25000, 75000],
                'hide'
                )
    }


    if ($('#slider-km').length) {
        initSliderRange($('#slider-km .slider'),
                '',
                ' mi',
                0,
                500000,
                1000,
                [50000, 400000],
                'hide'
                )
    }



    /*****************************  Carousel  *********************************/
    if ($('#testimonials').length) {
        $('#testimonials').carousel()
    }



    /*****************************  Accordion  *********************************/
    if ($('#accordion').length) {
        $('#accordion').on('hide.bs.collapse', function (element) {
            $(element.target).prev().find('i').removeClass('icon-minus');
            $(element.target).prev().find('i').addClass('icon-plus');
        });

        $('#accordion').on('show.bs.collapse', function (element) {
            $(element.target).prev().find('i').removeClass('icon-plus');
            $(element.target).prev().find('i').addClass('icon-minus');
        });
    }



    /******************************* Flickr Feed *******************************/
    if ($('.flickr-feed').length) {
        $('.flickr-feed').jflickrfeed({
            limit: 6,
            qstrings: {
                id: '52617155@N08'
            },
            itemTemplate: '<li><a href="{{link}}" target="_blank"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
        });
    }



    /********************************  Tooltip  ********************************/

    $('.advanced').tooltip({'placement': 'bottom'})

    if ($('#body_info').length) {
        $('#body_info').tooltip({'placement': 'top'})
    }


    /*********************************  Tabs  **********************************/
    if ($('#tab-car').length) {
        $('#tab-car a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    }

    if ($('#tab-car2').length) {
        $('#tab-car2 a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    }




    /********************************  FancyBox  ******************************/

    if ($(".fancybox").length) {

        $(".fancybox").each(function () {
            $(this).attr('rel', $(this).data('rel'));
        });

        $(".fancybox").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic'
        });
    }



    /*******************************  Menu Buy  ********************************/
    if ($(".menu-buy").length) {

        $('.menu-buy .items a').hover(function (e) {
            $('.menu-buy .car').find('img').attr('src', $(this).data('img'));
            $('.menu-buy .car').find('strong').html($(this).data('title'));
            $('.menu-buy .car').find('span').html($(this).data('desc'));
        })
    }



    /*******************************  Go to top  *******************************/
    if ($("#go-top").length) {
        $('#go-top').click(function (e) {
            e.preventDefault()
            $(window).scrollTo(0, 800);
        });
    }



    /****************************  Select Car Model  ***************************/
    if ($("#carousel-car-model").length) {
        $('#carousel-car-model a').click(function (e) {
            e.preventDefault()
            $('#carousel-car-model a').removeClass('active')
            $(this).addClass('active')
        });
    }



    /****************************  Create SlideRange  **************************/

    if ($(".input-group.date").length) {
        $('.input-group.date').datepicker({
            format: "dd-mm-yyyy",
            language: "en",
            autoclose: true,
            todayHighlight: true
        });
    }

}); //end document ready



/****************************  Create SlideRange  **************************/

function initSliderRange(element, pre, app, min, max, step, val, tooltip) {
    element.slider({
        range: true,
        min: min,
        max: max,
        value: val,
        step: step,
        tooltip: tooltip,
    })
            .on('slide', function (ev) {
                $(this).parent().parent().find('.input_range.min').val(ev.value[0])
                $(this).parent().parent().find('.span_range.min').html(pre + ev.value[0] + app)

                $(this).parent().parent().find('.input_range.max').val(ev.value[1])
                $(this).parent().parent().find('.span_range.max').html(pre + ev.value[1] + app)
            });
}


$(function () {
    if ($('.veiculo-slider').hasClass('veiculo-slider')) {
        $('.veiculo-slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: ".veiculo-carousel"
        });

        $('.veiculo-carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            asNavFor: '.veiculo-slider'
        });

        $('img').error(function () {
            this.src = 'http://placehold.it/320x240';
        });

        $('.Collage').collagePlus({
            'targetHeight': 200,
            'allowPartialLastRow': false
        });
    }
});
"use strict";

// declare as variáveis
var trim, placeholder;

//trim
trim = function (str) {
    return str.replace(/^\s+|\s+$/g,"");
}

placeholder = {
    'confirm': function (a) {
        var v = $(a).attr("placeholder");

        if ( trim($(a).val()) == "" || trim($(a).val()) == undefined ) {
            $(a).val(v);
        } else if ( trim($(a).val()) == trim(v) ) {
            $(a).val("");
        }
    },
    'hold': function (a) {
        $(a).on({
            'focus': function (){
                placeholder.confirm($(this));
            },
            'blur': function (){
                placeholder.confirm($(this));
            }
        });
    }
}

// Doc ready
$(function(){

    $('.home-form input[type="button"]').on('click', function(){
      $(this).closest('form').submit();
    });

    // Only IE
    if (navigator.userAgent.match("MSIE")) {
        // Placeholder
        placeholder.hold("input, textarea");

        // PIE (border-radius, gradient, box-shadow)
        if (window.PIE) {
            var elements = 'input, textarea, .round';
            
            $(elements).each(function() {
                PIE.attach(this);
            });
        }
    }

    // Small Canvas
    // Petie
    var peity = $(".canvas").peity("bar", {
        colours: ["red"],
        width: '56',
        height: '32'
    });

    // fancybox imovel index
    // Open
    $(".botao").on('click', function(e){

        $.fancybox.open('asdasdsad');

        return false;
    });

    // Tabs
    // Change tabs
    $(".tabs li a").on('click', function(e){
        // Nao deixamos o url funcionar
        e.preventDefault();

        // Pegamos o Href
        var href = $(this).attr('href');

        // Escondemos os Divs que queremos e removemos a classe active
        $('.tabs li').removeClass('active');
        $(this).closest('.c12').find('.tab').hide();

        // Mostramos o Div que queremos
        $(this).closest('.c12').find(href).show();
        $(this).closest('li').addClass('active');
    });

});
$(document).ready(function(){
    var $botaoFlutuanteHeader = $('#btn-scroll-header');
    var limiteRolagem = 250;

    $(window).scroll(function(){
        if($(this).scrollTop() > limiteRolagem){
            $botaoFlutuanteHeader.fadeIn();
        }else{
            $botaoFlutuanteHeader.fadeOut();
        }
    });

    $('#btn-scroll-header').click(function(){
        var height = $(document).height();
        $(document).scrollTop(height);
    });
});
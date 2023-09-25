$(document).ready(function(){
    //pega o elemento com o id especificado no html
    var $botaoFlutuanteHeader = $('#btn-scroll-header');
    //define um limite de rolagem para mostrar o botão
    var limiteRolagem = 300;
    //verificar a posição de rolagem da página
    $(window).scroll(function(){
        if($(this).scrollTop() > limiteRolagem){
            $botaoFlutuanteHeader.fadeIn();
        }else{
            $botaoFlutuanteHeader.fadeOut();
        }
    });

    $('#btn-scroll-header').click(function(){
        //pega a altura do documento inteiro
        var height = $(document).height();
        //move a página para a posição especificada, que é a altura total do documento
        $(document).scrollTop(height);
    });
});
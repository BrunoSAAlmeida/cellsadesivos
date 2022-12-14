$(function(){
    var atual = -1;
    var maximo = $('.box-mercado').lenght - 1;
    var timer;
    var animacaoDelay = 2;
    executarAnimacao();
    function executarAnimacao(){
        $('.box-mercado').hide();
        timer = setInterval(logicaAnimacao,animacaoDelay*1000);

        function logicaAnimacao(){
            atual++;
            if(atual > maximo){

                clearInterval(timer);
                return false;
            }
            $('.box-mercado').eq(atual).fadeIn();
        }
    }
})
$(function(){
    var currSlide = 0;
    var delay = 5;
    var maxSlide = $('.banner-single').length - 1;
    initSlider();
    changeSlide();

    function initSlider(){
        $('.banner-single').hide();
        $('.banner-single').eq(0).show();
        for(var i = 0; i < maxSlide+1; i++){
            var content = $('.bullets').html();
            if(i==0)
            content+='<span class="active-slider"></span>';
            else
            content+='<span></span>';
            $('.bullets').html(content);
        }
    }

    function changeSlide(){
        setInterval(function(){
            $('.banner-single').eq(currSlide).stop().fadeOut(5000);
            currSlide++;
            if(currSlide > maxSlide)
            currSlide = 0;
            $('.banner-single').eq(currSlide).stop().fadeIn(5000);
            $('.bullets span').removeClass('active-slider');
            $('.bullets span').eq(currSlide).addClass('active-slider');
        },delay * 1000)

    }

    $('body').on('click','.bullets span', function(){
        var currentBullet = $(this);
        $('.banner-single').eq(currSlide).stop().fadeOut(5000);
        $('.banner-titulo').eq(currSlide1).stop().fadeOut(3000);
        currSlide = currentBullet.index();
        currSlide1 = currentBullet.index();
        $('.banner-single').eq(currSlide).stop().fadeIn(5000);
        $('.banner-titulo').eq(currSlide1).stop().fadeIn(3000);
        $('.bullets span').removeClass('active-slider');
        currentBullet.addClass('active-slider');
    })

    var currSlide1 = 0;
    var delay1 = 5;
    var maxSlide1 = $('.banner-titulo').length - 1;
    initSlider1();
    changeSlide1();

    function initSlider1(){
        $('.banner-titulo').hide();
        $('.banner-titulo').eq(0).show();
    }

    function changeSlide1(){
        setInterval(function(){
            $('.banner-titulo').eq(currSlide1).stop().fadeOut(3000);
            currSlide1++;
            if(currSlide1 > maxSlide1)
            currSlide1 = 0;
            $('.banner-titulo').eq(currSlide1).stop().fadeIn(3000);
        },delay1 * 1000)

    }

})
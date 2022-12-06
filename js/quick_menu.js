;(function($,window){
    
    const QuickMenu = {
        init(){
            this.mainFn();
        },
        mainFn(){
            const $window = $(window);
            const $goTop = $('.go-top');
            const $goBottom = $('.go-bottom');
            
                     //고탑,고바텀버튼 이벤트
            $goTop.on({
               click: function(){
                  $('html').animate({scrollTop: 0}, 600)
               }
            });
            $goBottom.on({
               click: function(){
                  $('html').animate({scrollTop: ($('#footer').offset().top)}, 600)
               }
            });

            //스크롤 따라다니는 퀵메뉴 만들기
            let conT = $('#section2 .slide-container').offset().top+150;
            let winH = $(window).height();
            let boxH = 550;
            let scrT = (winH-boxH)/2;
            let $quickBox = $('#quickBox');


            // 스크롤 이벤트
            $window.scroll(function(){

               // 스크롤 탑값이 섹션2의 슬라이드 탑값에 도달하면 그 때 퀵메뉴 동작
               if( $window.scrollTop() >= conT ){
                  // 스크롤을 따라 다닌다.
                  $quickBox.stop().animate({ top: scrT+$(window).scrollTop() }, 300);
               }
               else{
                  // 위치 고정
                  $quickBox.stop().animate({ top: conT }, 300); //648.578125px
               }

            });
        },

    }
    QuickMenu.init();
})(jQuery,window);
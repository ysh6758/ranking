;(function($){

   $('.nav-btn').removeClass('on');
   $('.nav-btn').eq(4).addClass('on');
    const Ranking = {
        init(){
           this.section1();
         },
         section1(){
            const  $slideWrap       = $('#section1 .slide-wrap');
            const  $prevBtn         = $('#section1 .prev-btn');
            const  $nextBtn         = $('#section1 .next-btn');

            let cnt = 0;
////////////////////////////////////////////////////////////////////////////////////////
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
            let conT = $('#section1').offset().top+100;
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
/////////////////////////////////////////////////////////////////////////////////////////////

                  mainSlide();  //로딩시 실행
                  //1. 메인슬라이드 함수
                  function mainSlide(){
                      $slideWrap.stop().animate({ left: -90.91*cnt }, 200, function(){

                          if(cnt>=1){
                             $prevBtn.removeClass('on');
                          }
                          else{
                             $prevBtn.addClass('on');
                          }
                        
                          if(cnt>=6){
                             $nextBtn.addClass('on');
                          }
                          else{
                             $nextBtn.removeClass('on');
                          }
                      })
                  }
                
                  //2. 다음카운트 함수
                  function nextCount(){
                      cnt++;
                      if(cnt>=6) cnt=6
                      mainSlide();
                  }
                  //2. 이전카운트 함수
                  function prevCount(){
                      cnt--;
                      if(cnt<=0) cnt=0
                      mainSlide();
                  }

                  //버튼 클릭시 슬라이드 넘김
                  $prevBtn.on({
                      click: function(e){
                          e.preventDefault();
                          if( $slideWrap.is(':animated')===false ){
                              prevCount();
                          }
                      }
                  });
                  $nextBtn.on({
                      click: function(e){
                          e.preventDefault();
                          if( $slideWrap.is(':animated')===false ){
                              nextCount();
                          }               
                      }
                  });


                  $.ajax({
                     url:"./data_json/product.json",
                     dataType:"JSON",
                     success: function(res){
                        let txt = '';
                        res.product1.map(function(item, idx){

                           txt += `<li class="slide">`;
                           txt += `   <div class="gap">`;
                           txt += `      <a href="#">`;
                           txt += `         <img src="./img/${item.상품이미지}" alt="">`;
                           txt += `      </a>`;
                           txt += `      <div class="content">`;
                           txt += `         <h4>${item.브랜드}</h4>`;
                           txt += `         <p>${item.슬로건}</p>`;
                           txt += `      </div>`;
                           txt += `   </div>`;
                           txt += `</li>`;

                        });
                        $('.slide-wrap').html( txt );
                     },
                     error: function(){
                        console.log('AJAX 실패!');
                     }
                  })
        },  

    }
    Ranking.init();
})(jQuery);
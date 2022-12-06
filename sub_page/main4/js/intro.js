;(function($){

   $('.nav-btn').removeClass('on');
   $('.nav-btn').eq(3).addClass('on');
    const Ranking = {
        init(){
            this.section1();
            this.section2();
        },
        section1(){
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

        },
        section2(){

         const  $slideWrap = $('#section2 .slide-wrap');
         const  $prevBtn   = $('#section2 .prev-btn');
         const  $nextBtn   = $('#section2 .next-btn');
         
         let cnt = 0;
         mainSlide();  //로딩시 실행
         //1. 메인슬라이드 함수
         function mainSlide(){
             $slideWrap.stop().animate({ left: -1018*cnt }, 200, function(){

                 if(cnt>=1){
                    $prevBtn.removeClass('on');
                 }
                 else{
                    $prevBtn.addClass('on');
                 }
             
                 if(cnt>=1){
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
             if(cnt>=1) cnt=1
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
                  txt += `    <div class="gap">`;
                  txt += `        <a href="#"><img src="./img/${item.베스트이미지}" alt=""></a>`;
                  txt += `        <div class="content">`;
                  txt += `            <div class="row1"><img src="./img/${item.배송종류}" alt=""><span><i><img src="./img/icon_star.png" alt=""></i><em>${item.별점}</em>(${commaEvent(item.토탈)})</span></div>`;
                  txt += `            <div class="row2"><a href="#"><h2>${item.상품명}</h2></a></div>`;
                  txt += `            <div class="row3"><strong><em>${commaEvent(item.정가)}</em>원</strong><a href="#"><img src="./img/icon_cart.png" alt=""></a></div>`;
                  txt += `        </div>`;
                  txt += `    </div>`;
                  txt += `</li>`;

               });

               // 정가, 판매가 세자리 마다 콤머 표기 함수
               // (시작숫자 1자이상 3535413454123)   ,  (숫자3자 000)
               function commaEvent(z){
                  let price = z.toString();
                  const reg = /(^\d+)(\d{3})/g;
                  while(reg.test(price)){  //조건이 만족하면 계속 반복한다.
                     price = price.replace(reg, '$1,$2'); //첫버째와 두번째 사이에 콤머
                  }
                  return price;
               }

               $('.slide-wrap').html( txt );



            },         
            error: function(){
               console.log('AJAX 실패!');
            }
         });

        }
    }
    Ranking.init();
})(jQuery);
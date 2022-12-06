;(function($){

    const Ranking = {
        init(){
         $('.nav-btn').removeClass('on');
         $('.nav-btn').eq(5).addClass('on');
            this.section1();
        },
        section1(){
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

            $.ajax({
               url:"./data_json/product.json",
               dataType:"JSON",
               success: function(res){
   
                  let txt = '';
   
   
                  res.project5.map(function(item, idx){
   
                     txt += `<li class="banner-box">`;
                     txt += `    <div class="gap">`;
                     txt += `        <a href="#">`;
                     txt += `            <div class="img-box">`;
                     txt += `                <img src="./img/${item.이벤트이미지}" alt="">`;
                     txt += `            </div>`;
                     txt += `            <div class="text-box">`;
                     txt += `                <h4>${item.제목}</h4>`;
                     txt += `                <span>${item.행사기간}</span>`;
                     txt += `            </div>`;
                     txt += `        </a>`;
                     txt += `    </div>`;
                     txt += `</li>`;
   
                  });
   
   
                  $('.content-list').html( txt );
   
   
   
               },         
               error: function(){
                  console.log('AJAX 실패!');
               }
            });
/////////////////////////////////////////////////////////////////////////////////////////////


            $('#section1 .select-btn').on({
               click:function(e){
                  e.preventDefault();
                  $('#section1 .left').toggleClass('on');
                  $('#section1 .select-list').toggleClass('on');
                  cnt++;
                  if(cnt===1){
                     $('#section1 .select-btn').find('img').attr('src','./img/gotop.png');
                  }
                  else{
                     cnt=0;
                     $('#section1 .select-btn').find('img').attr('src','./img/gobottom.png');
                  }
               }
            });


        },
    }
    Ranking.init();
})(jQuery);
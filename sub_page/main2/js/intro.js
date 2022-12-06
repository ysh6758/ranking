;(function($){

   $('.nav-btn').removeClass('on');
   $('.nav-btn').eq(1).addClass('on');
    const Ranking = {
        init(){
            this.section1();
            this.section2();
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
/////////////////////////////////////////////////////////////////////////////////////////////

        },
        section2(){

            $.ajax({
                url:"./data_json/product.json",
                dataType:"JSON",
                success: function(res){

                   let txt = '';
                   let txt1 = '';
                   let txt2 = '';

    
                   res.project1.map(function(item, idx){

                     txt += `<li>`;
                     txt += `    <a href="#">`;
                     txt += `        <div class="img-box">`;
                     txt += `            <img src="./img/${item.상품이미지}" alt="">`;
                     txt += `        </div>`;
                     txt += `        <div class="text-box">`;
                     txt += `            <div class="row1">`;
                     txt += `                <img src="./img/${item.배송종류}" alt="">`;
                     txt += `                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>`;
                     txt += `            </div>`;
                     txt += `            <div class="row2">`;
                     txt += `                <h2>${item.상품명}</h2>`;
                     txt += `            </div>`;
                     txt += `            <div class="row3">`;
                     txt += `                <strong>${item.할인율}%</strong>`;
                     txt += `                <span class="price">`;
                     txt += `                    <em class="num">${commaEvent(item.판매가)}</em>원`;
                     txt += `                </span>`;
                     txt += `            </div>`;
                     txt += `            <div class="origin">${commaEvent(item.정가)}원</div>`;

                     txt += `             ${
                                             item.할인율 > 0 ?`<p class="unit-price">(${item.단위가격})</p>`:''}
                     `;

                     txt += `        </div>`;
                     txt += `    </a>`;
                     txt += `</li>`;

                  });
                  $('.item-list1').html( txt );

                   res.project2.map(function(item, idx){

                     txt1 += `<li>`;
                     txt1 += `    <a href="#">`;
                     txt1 += `        <div class="img-box">`;
                     txt1 += `            <img src="./img/${item.상품이미지}" alt="">`;
                     txt1 += `        </div>`;
                     txt1 += `        <div class="text-box">`;
                     txt1 += `            <div class="row1">`;
                     txt1 += `                <img src="./img/${item.배송종류}" alt="">`;
                     txt1 += `                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>`;
                     txt1 += `            </div>`;
                     txt1 += `            <div class="row2">`;
                     txt1 += `                <h2>${item.상품명}</h2>`;
                     txt1 += `            </div>`;
                     txt1 += `            <div class="row3">`;
                     txt1 += `                <strong>${item.할인율}%</strong>`;
                     txt1 += `                <span class="price">`;
                     txt1 += `                    <em class="num">${commaEvent(item.판매가)}</em>원`;
                     txt1 += `                </span>`;
                     txt1 += `            </div>`;
                     txt1 += `            <div class="origin">${commaEvent(item.정가)}원</div>`;

                     txt1 += `             ${
                                             item.할인율 > 0 ?`<p class="unit-price">(${item.단위가격})</p>`:''}
                     `;

                     txt1 += `        </div>`;
                     txt1 += `    </a>`;
                     txt1 += `</li>`;

                  });
                  $('.item-list2').html( txt1 );


                   res.project3.map(function(item, idx){

                     txt2 += `<li>`;
                     txt2 += `    <a href="#">`;
                     txt2 += `        <div class="img-box">`;
                     txt2 += `            <img src="./img/${item.상품이미지}" alt="">`;
                     txt2 += `        </div>`;
                     txt2 += `        <div class="text-box">`;
                     txt2 += `            <div class="row1">`;
                     txt2 += `                <img src="./img/${item.배송종류}" alt="">`;
                     txt2 += `                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>`;
                     txt2 += `            </div>`;
                     txt2 += `            <div class="row2">`;
                     txt2 += `                <h2>${item.상품명}</h2>`;
                     txt2 += `            </div>`;
                     txt2 += `            <div class="row3">`;
                     txt2 += `                <strong>${item.할인율}%</strong>`;
                     txt2 += `                <span class="price">`;
                     txt2 += `                    <em class="num">${commaEvent(item.판매가)}</em>원`;
                     txt2 += `                </span>`;
                     txt2 += `            </div>`;
                     txt2 += `            <div class="origin">${commaEvent(item.정가)}원</div>`;

                     txt2 += `             ${
                                             item.할인율 > 0 ?`<p class="unit-price">(${item.단위가격})</p>`:''}
                     `;

                     txt2 += `        </div>`;
                     txt2 += `    </a>`;
                     txt2 += `</li>`;

                  });
                  $('.item-list3').html( txt2 );


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

                },         
                error: function(){
                   console.log('AJAX 실패!');
                }
             });
        }
    }
    Ranking.init();
})(jQuery);
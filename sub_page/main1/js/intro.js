;(function($){

    
    $('.nav-btn').removeClass('on');
    $('.nav-btn').eq(0).addClass('on');
    const Ranking = {
        
        init(){
            this.section1();
            this.section2();
        },
        section1(){
            let cnt = 0;

            // 선택자 변수 지정
            const  $slideWrap       = $('#section1 .slide-wrap');
            const  $prevBtn         = $('#section1 .prev-btn');
            const  $nextBtn         = $('#section1 .next-btn');


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

                //카테고리버튼 클릭이벤트
                $('#section1 .cate-btn1').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate1').addClass('on');
                    }
                });
                $('#section1 .cate-btn2').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate2').addClass('on');
                    }
                });
                $('#section1 .cate-btn3').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate3').addClass('on');
                    }
                });
                $('#section1 .cate-btn4').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate4').addClass('on');
                    }
                });
                $('#section1 .cate-btn5').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate5').addClass('on');
                    }
                });
                $('#section1 .cate-btn6').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate6').addClass('on');
                    }
                });
                $('#section1 .cate-btn7').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate7').addClass('on');
                    }
                });
                $('#section1 .cate-btn8').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate8').addClass('on');
                    }
                });
                $('#section1 .cate-btn9').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate9').addClass('on');
                    }
                });
                $('#section1 .cate-btn10').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate10').addClass('on');
                    }
                });
                $('#section1 .cate-btn11').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate11').addClass('on');
                    }
                });
                $('#section1 .cate-btn12').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate12').addClass('on');
                    }
                });
                $('#section1 .cate-btn13').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate13').addClass('on');
                    }
                });
                $('#section1 .cate-btn14').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate14').addClass('on');
                    }
                });
                $('#section1 .cate-btn15').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate15').addClass('on');
                    }
                });
                $('#section1 .cate-btn16').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate16').addClass('on');
                    }
                });
                $('#section1 .cate-btn17').on({
                    click:function(e){
                        e.preventDefault();
                        $('#section1 .cate-title').removeClass('on');
                        $('#section1 .cate17').addClass('on');
                    }
                });
        },
        section2(){
            const $listBtn = $('#section2 .list-btn1, #section2 .list-btn2');
            const $listBtn1 = $('#section2 .list-btn1');
            const $listBtn2 = $('#section2 .list-btn2');

            $listBtn1.on({
                click: function(e){
                    e.preventDefault();
                    $listBtn.removeClass('on');
                    $listBtn1.addClass('on');
                }
            });
            $listBtn2.on({
                click: function(e){
                    e.preventDefault();
                    $listBtn.removeClass('on');
                    $listBtn2.addClass('on');
                }
            });


            $.ajax({
                url:"./data_json/product.json",
                dataType:"JSON",
                success: function(res){
                   let txt = '';
                   res.project1.map(function(item, idx){
    
                        txt += `<li>`;
                        txt += `    <h2>${idx+1}</h2>`;
                        txt += `    <div class="img-box">`;
                        txt += `        <a href="#"><img src="./img/${item.상품이미지}" alt=""></a>`;
                        txt += `    </div>`;
                        txt += `    <div class="col-1">`;
                        txt += `        <p class="col-title">[${item.제조사}] ${item.상품명}</p>`;
                        txt += `        <div class="rating">`;
                        txt += `            <img src="./img/icon_star.png" alt="">`;
                        txt += `            <em>${item.별점}</em>`;
                        txt += `            <span>(${commaEvent(item.토탈)})</span>`;
                        txt += `        </div>`;
                        txt += `    </div>`;
                        txt += `    <div class="col-2">`;
                        txt += `        <span class="price">${commaEvent(item.정가)}</span>원`;
                        txt += `    </div>`;
                        txt += `    <div class="col-3">`;
                        txt += `        <h3>1% 적립</h3>`;
                        txt += `    </div>`;
                        txt += `    <div class="col-4">`;
                        txt += `        <i><img src="./img/${item.배송종류}" alt=""></i>`;
                        txt += `    </div>`;
                        txt += `    <div class="col-5">`;
                        txt += `        <ul>`;
                        txt += `            <li><a href="#"><img src="./img/icon_cart.png" alt=""></a></li>`;
                        txt += `            <li><a href="#"><img src="./img/icon_heart.png" alt=""></a></li>`;
                        txt += `        </ul>`;
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
    
                   $('.item-list').html( txt );
    

    
                },         
                error: function(){
                   console.log('AJAX 실패!');
                }
             });
        }
    }
    Ranking.init();
})(jQuery);
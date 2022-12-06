;(function($){

   const rankingdak = {
      init(){
           this.section1();
           this.section2();
           this.section3();
           this.section4();
           this.section5();
           this.section6();
           this.section8();
           this.section9();
           this.section11();
           this.section12();
           this.section13();
           this.section14();
           this.section15();
           this.section17();
      },
      section1(){
            let cnt = 0;
            let setId = 0;
            let slideLen = 0; 
   
            // 선택자 변수 지정
            const  $slideContainer  = $('#section1 .slide-container');
            const  $slideWrap       = $('#section1 .slide-wrap');
            const  $slide           = $('#section1 .slide');
            const  $countNumber     = $('#section1 .count-number');
            const  $totalNumber     = $('#section1 .total-number');
            const  $prevBtn         = $('#section1 .prev-btn');
            const  $nextBtn         = $('#section1 .next-btn');
            const $categoryBtn      = $('#header .category-btn')


               mainSlide();  //로딩시 실행
               //1. 메인슬라이드 함수
               function mainSlide(){
                  $slideWrap.stop().animate({ left: -100*cnt + '%' }, 600, function(){
                     if(cnt>=8) {cnt=0;}
                     if(cnt<=-1) {cnt=7;}
                     $slideWrap.stop().animate({ left: -100*cnt + '%' }, 0); //fowrords + backwrords = both
                  })
                  $countNumber.text( cnt>=8 ? 1 : (cnt+1<=0 ? 8 : cnt+1) ); // 완결(이전 & 다음)
                  slideLen = $slide.length-2;
                  $totalNumber.text( slideLen ); //총 슬라이드 갯수
               }
   
               //2. 다음카운트 함수
               function nextCount(){
                  cnt++;
                  mainSlide();
               }
               //2. 이전카운트 함수
               function prevCount(){
                  cnt--;
                  mainSlide();
               }
   
               //3. 자동타이머 함수
               function autoTimer(){
                  setId = setInterval(nextCount, 3000); 
               }
               autoTimer();

               //마우스 오버시 슬라이드 멈춤
               $slideContainer.on({
                  mouseenter: function(){
                     clearInterval(setId);                  
                  },
                  mouseleave: function(){
                     autoTimer();
                  }
               });
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
   
               $categoryBtn.on({
                  mouseenter: function(){
                     $(this).find('img').prop('src','./img/category_hover.png')
                  },
                  mouseleave: function(){
                     $(this).find('img').prop('src','./img/category_normal.png')
                  }
               })

               $('.modal-btn').on({
                  click: function(e){
                     e.preventDefault();
                     $('#modal').show();
                  }
               })

               $('.modal-close-btn').on({
                  click: function(e){
                     e.preventDefault();
                     $('#modal').hide();
                  }
               })
      },
      section2(){
            let cnt = 0;
            let setId = 0;
   
            // 선택자 변수 지정
            const  $slideContainer  = $('#section2 .slide-container');
            const  $slideWrap       = $('#section2 .slide-wrap');
            const  $prevBtn         = $('#section2 .prev-btn');
            const  $prevBox         = $('#section2 .prev-box');
            const  $nextBtn         = $('#section2 .next-btn');
            const  $nextBox         = $('#section2 .next-box');
               mainSlide();  //로딩시 실행
               $prevBox.fadeOut();
               //1. 메인슬라이드 함수
               function mainSlide(){
                  $slideWrap.stop().animate({ left: -980*cnt  }, 300, function(){
                     if(cnt>=1){
                        $prevBox.show();
                     }
                     else{
                        $prevBox.hide();
                     }

                     if(cnt>=2){
                        $nextBox.hide();
                     }
                     else{
                        $nextBox.show();
                     }

                  })
               }
   
               //2. 다음카운트 함수
               function nextCount(){
                  cnt++;
                  if(cnt>=2) cnt=2;
                  mainSlide();
               }
               //2. 이전카운트 함수
               function prevCount(){
                  cnt--;
                  if(cnt<=0) cnt=0;
                  mainSlide();
               }


               //마우스 오버시 슬라이드 멈춤
               $slideContainer.on({
                  mouseenter: function(){
                     clearInterval(setId);                  
                  },
                  mouseleave: function(){
                     autoTimer();
                  }
               });
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
   
      },
      section3(){
            let cnt = 0;
   
            // 선택자 변수 지정
            const  $slideWrap       = $('#section3 .slide-wrap');
            const  $prevBtn         = $('#section3 .prev-btn');
            const  $prevBox         = $('#section3 .prev-box');
            const  $nextBtn         = $('#section3 .next-btn');
            const  $nextBox         = $('#section3 .next-box');
               mainSlide();  //로딩시 실행
               //1. 메인슬라이드 함수
               function mainSlide(){
                  $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                     if(cnt>=1){
                        $prevBox.removeClass('on');
                     }
                     else{
                        $prevBox.addClass('on');
                     }

                     if(cnt>=2){
                        $nextBox.addClass('on');
                     }
                     else{
                        $nextBox.removeClass('on');
                     }
                  })
               }
   
               //2. 다음카운트 함수
               function nextCount(){
                  cnt++;
                  if(cnt>=2) cnt=2;
                  mainSlide();
               }
               //2. 이전카운트 함수
               function prevCount(){
                  cnt--;
                  if(cnt<=0) cnt=0;
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
     
                     res.sec3.map(function(item, idx){
  
                        txt += `<li class="slide slide1">`;
                        txt += `   <div class="category-box">`;
                        txt += `      <a href="#">`;
                        txt += `         <img src="./img/${item.상품이미지}" alt="">`;
                        txt += `         <div class="text-box">`;
                        txt += `            <em>${item.상품설명}</em>`;
                        txt += `            <h3>${item.상품명}</h3>`;
                        txt += `         </div>`;
                        txt += `      </a>`;
                        txt += `   </div>`;
                        txt += `</li>`;
  
                    });
                    $('#section3 .slide-wrap').html( txt );

  
                  },         
                  error: function(){
                     console.log('AJAX 실패!');
                  }
               });
   
      },
      section4(){
            let cnt = 0;
            let setId = 0;
            let setId2 = 0;
            // 선택자 변수 지정
            const  $slideContainer  = $('#section4 .slide-container');
            const  $slideWrap       = $('#section4 .slide-wrap');
            const  $prevBtn         = $('#section4 .prev-btn');
            const  $prevBox         = $('#section4 .prev-box');
            const  $nextBtn         = $('#section4 .next-btn');
            const  $nextBox         = $('#section4 .next-box');

            let $countNum = $('#section4 .count-num');
               mainSlide();  //로딩시 실행
               //1. 메인슬라이드 함수
               function mainSlide(){
                  $slideWrap.stop().animate({ left: -760*cnt  }, 300, function(){
                     if(cnt>=1){
                        $prevBox.removeClass('on');
                     }
                     else{
                        $prevBox.addClass('on');
                     }

                     if(cnt>=1){
                        $nextBox.addClass('on');   
                     }
                     else{
                        $nextBox.removeClass('on');
                     }
                  })
               }
   
               //2. 다음카운트 함수
               function nextCount(){
                  cnt++;
                  if(cnt>=2)cnt=0;
                  mainSlide();
               }
               //2. 이전카운트 함수
               function prevCount(){
                  cnt--;
                  mainSlide();
               }

               //3. 자동타이머 함수
               function autoTimer(){
                  setId = setInterval(nextCount, 5000); 
               }
               autoTimer();



               //마우스 오버시 슬라이드 멈춤
               $slideContainer.on({
                  mouseenter: function(){
                     clearInterval(setId);                  
                  },
                  mouseleave: function(){
                     autoTimer();
                  }
               });

               //버튼 클릭시 슬라이드 넘김
               $prevBtn.on({
                  click: function(e){
                     e.preventDefault();
                     if( $slideWrap.is(':animated')===false ){
                        if(cnt<=0){
                           $prevBtn.attr('disabled',true);
                        }
                        else{
                           prevCount();
                        }
                     }
                  }
               });
               $nextBtn.on({
                  click: function(e){
                     e.preventDefault();
                     if( $slideWrap.is(':animated')===false ){
                        if(cnt>=1){
                           $nextBtn.attr('disabled',true);
                        }
                        else{
                           nextCount();
                        }
                     }
                  }
               });
   
      },
      section5(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section5 .slide-wrap');
         const  $prevBtn         = $('#section5 .prev-btn');
         const  $prevBox         = $('#section5 .prev-box');
         const  $nextBtn         = $('#section5 .next-btn');
         const  $nextBox         = $('#section5 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section6(){
         //버튼 클릭이벤트 각각 연결된 박스 나타나게
         $('#section6 .recomend-btn1').on({
            click: function(){
               $('#section6 .btn1-5').removeClass('on');
               $('#section6 .recomend-btn1').addClass('on');
               
               $('#section6 .recomend1-5').hide();
               $('#section6 .recomend-box1').show();
            }
         });
         $('#section6 .recomend-btn2').on({
            click: function(){
               $('#section6 .btn1-5').removeClass('on');
               $('#section6 .recomend-btn2').addClass('on');
               
               $('#section6 .recomend1-5').hide();
               $('#section6 .recomend-box2').show();
            }
         });
         $('#section6 .recomend-btn3').on({
            click: function(){
               $('#section6 .btn1-5').removeClass('on');
               $('#section6 .recomend-btn3').addClass('on');
               
               $('#section6 .recomend1-5').hide();
               $('#section6 .recomend-box3').show();
            }
         });
         $('#section6 .recomend-btn4').on({
            click: function(){
               $('#section6 .btn1-5').removeClass('on');
               $('#section6 .recomend-btn4').addClass('on');
               
               $('#section6 .recomend1-5').hide();
               $('#section6 .recomend-box4').show();
            }
         });
         $('#section6 .recomend-btn5').on({
            click: function(){
               $('#section6 .btn1-5').removeClass('on');
               $('#section6 .recomend-btn5').addClass('on');
               
               $('#section6 .recomend1-5').hide();
               $('#section6 .recomend-box5').show();
            }
         });

      },
      section8(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section8 .slide-wrap');
         const  $prevBtn         = $('#section8 .prev-btn');
         const  $prevBox         = $('#section8 .prev-box');
         const  $nextBtn         = $('#section8 .next-btn');
         const  $nextBox         = $('#section8 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section9(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section9 .slide-wrap');
         const  $prevBtn         = $('#section9 .prev-btn');
         const  $prevBox         = $('#section9 .prev-box');
         const  $nextBtn         = $('#section9 .next-btn');
         const  $nextBox         = $('#section9 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section11(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section11 .slide-wrap');
         const  $prevBtn         = $('#section11 .prev-btn');
         const  $prevBox         = $('#section11 .prev-box');
         const  $nextBtn         = $('#section11 .next-btn');
         const  $nextBox         = $('#section11 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section12(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section12 .slide-wrap');
         const  $prevBtn         = $('#section12 .prev-btn');
         const  $prevBox         = $('#section12 .prev-box');
         const  $nextBtn         = $('#section12 .next-btn');
         const  $nextBox         = $('#section12 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section13(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section13 .slide-wrap');
         const  $prevBtn         = $('#section13 .prev-btn');
         const  $prevBox         = $('#section13 .prev-box');
         const  $nextBtn         = $('#section13 .next-btn');
         const  $nextBox         = $('#section13 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1140*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=1){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=1) cnt=1;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section14(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section14 .slide-wrap');
         const  $prevBtn         = $('#section14 .prev-btn');
         const  $prevBox         = $('#section14 .prev-box');
         const  $nextBtn         = $('#section14 .next-btn');
         const  $nextBox         = $('#section14 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section15(){
         let cnt = 0;

         // 선택자 변수 지정
         const  $slideWrap       = $('#section15 .slide-wrap');
         const  $prevBtn         = $('#section15 .prev-btn');
         const  $prevBox         = $('#section15 .prev-box');
         const  $nextBtn         = $('#section15 .next-btn');
         const  $nextBox         = $('#section15 .next-box');
            mainSlide();  //로딩시 실행
            //1. 메인슬라이드 함수
            function mainSlide(){
               $slideWrap.stop().animate({ left: -1125*cnt  }, 300, function(){
                  if(cnt>=1){
                     $prevBox.removeClass('on');
                  }
                  else{
                     $prevBox.addClass('on');
                  }

                  if(cnt>=2){
                     $nextBox.addClass('on');
                  }
                  else{
                     $nextBox.removeClass('on');
                  }
               })
            }

            //2. 다음카운트 함수
            function nextCount(){
               cnt++;
               if(cnt>=2) cnt=2;
               mainSlide();
            }
            //2. 이전카운트 함수
            function prevCount(){
               cnt--;
               if(cnt<=0) cnt=0;
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

      },
      section17(){
         //버튼 클릭이벤트 각각 연결된 박스 나타나게
         $('#section17 .recomend-btn1').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn1').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box1').show();
            }
         });
         $('#section17 .recomend-btn2').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn2').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box2').show();
            }
         });
         $('#section17 .recomend-btn3').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn3').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box3').show();
            }
         });
         $('#section17 .recomend-btn4').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn4').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box4').show();
            }
         });
         $('#section17 .recomend-btn5').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn5').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box5').show();
            }
         });
         $('#section17 .recomend-btn6').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn6').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box6').show();
            }
         });
         $('#section17 .recomend-btn7').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn7').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box7').show();
            }
         });
         $('#section17 .recomend-btn8').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn8').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box8').show();
            }
         });
         $('#section17 .recomend-btn9').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn9').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box9').show();
            }
         });
         $('#section17 .recomend-btn10').on({
            click: function(){
               $('#section17 .btn1-5').removeClass('on');
               $('#section17 .recomend-btn10').addClass('on');
               
               $('#section17 .recomend1-5').hide();
               $('#section17 .recomend-box10').show();
            }
         });

      }

   }
   rankingdak.init();

})(jQuery);
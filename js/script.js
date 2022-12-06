;(function($){

    const rankingdak = {
        init(){
           this.header();
           this.section1();
        },
        header(){

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
            const  $prevNextBtn     = $('#section1 .prev-btn, #section1 .next-btn');
            const  $prevBtn         = $('#section1 .prev-btn');
            const  $nextBtn         = $('#section1 .next-btn');
   
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
   
        }
    }
    rankingdak.init();

})(jQuery);
;(function($,window){

    const header = {
        init(){
            this.mainFn();
        },
        mainFn(){
            const $subMenu = $('#header .sub-menu');
            const $window = $(window);
            const $navContainerTop = $('#header .nav-container').offset().top;
            const $navContainer = $('#header .nav-container');
    
            //네비게이션바 픽스
            $window.scroll(function(){
                if(  $window.scrollTop() >= $navContainerTop  ){
                    $navContainer.addClass('on');
                }
                else {
                    $navContainer.removeClass('on');
                }
            });
   
            //  마우스 오버시 카테고리 이미지 변경 및 서브메뉴 나타남
            $('#header .category-bg').on({
                mouseenter: function(){
                    $('#header .category-btn').addClass('on');
                    $('#header .category-btn').find('img').prop('src','./img/category_hover.png');  //css에서 이미지변경  addclass on 으로
                    $subMenu.addClass('on');
                },
                mouseleave: function(){
                    $subMenu.removeClass('on');
                    $('#header .category-btn').removeClass('on');
                    $('#header .category-btn').find('img').prop('src','./img/category_normal.png'); 
                }
            });
            $subMenu.on({
                mouseenter: function(){
                    $('#header .category-btn').find('img').prop('src','./img/category_hover.png');
                },
                mouseleave: function(){
                    $('#header .category-btn').find('img').prop('src','./img/category_normal.png');
                }
            })


        }
    }
    header.init();
})(jQuery,window);
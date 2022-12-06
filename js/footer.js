;(function($){

    const Footer = {
        init(){
            this.mainFn();
        },
        mainFn(){

            let cnt = 0;
   
            $('#footer .family-btn').on({
                click: function(){
                    $('#footer .family-arrow img').attr('src','./img/gobottom.png');
                    $('#footer .family-list-box').toggle();
                    cnt++;
                    if(cnt===2){
                       $('#footer .family-arrow img').attr('src','./img/gotop.png');
                       cnt=0;
                    }
                }
            })
        }
    }
    Footer.init();
})(jQuery);
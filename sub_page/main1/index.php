<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랭킹닭컴 | 랭킹</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/babel.min.js"></script>
    <script src="<?=$path?>js/lib/jquery.min.js"></script>
</head>
<body>
    
<div id="wrap">
<!-- 헤더 -->
<?
    include_once($path.'header.php')
?>


    <main id="main">
            <section id="section1">
                <div class="container">
                    <div class="title">
                        <h2>랭킹</h2>
                        <ul>
                            <li><a href="#">실시간랭킹</a></li>
                            <li><a href="#">별별랭킹</a></li>
                            <li><a href="#">알뜰킹</a></li>
                            <li><a href="#">성분별랭킹</a></li>
                        </ul>
                    </div>
                    <div class="slide-container">
                       <div class="slide-view">
                          <ul class="slide-wrap">
                             <li class="slide slide1"><a href="#" class="cate-btn1"><i><img src="./img/cate_img_1.png" alt=""></i><span class="cate-title cate1 on">전체</span></a></li>
                             <li class="slide slide2"><a href="#" class="cate-btn2"><i><img src="./img/cate_img_2.png" alt=""></i><span class="cate-title cate2">신상품</span></a></li>
                             <li class="slide slide3"><a href="#" class="cate-btn3"><i><img src="./img/cate_img_3.png" alt=""></i><span class="cate-title cate3">닭가슴살</span></a></li>
                             <li class="slide slide4"><a href="#" class="cate-btn4"><i><img src="./img/cate_img_4.png" alt=""></i><span class="cate-title cate4">즉석 간편식</span></a></li>
                             <li class="slide slide5"><a href="#" class="cate-btn5"><i><img src="./img/cate_img_5.png" alt=""></i><span class="cate-title cate5">도시락·<br>볶음밥</span></a></li>
                             <li class="slide slide6"><a href="#" class="cate-btn6"><i><img src="./img/cate_img_6.png" alt=""></i><span class="cate-title cate6">소고기</span></a></li>
                             <li class="slide slide7"><a href="#" class="cate-btn7"><i><img src="./img/cate_img_7.png" alt=""></i><span class="cate-title cate7">샐러드·<br>과일</span></a></li>
                             <li class="slide slide8"><a href="#" class="cate-btn8"><i><img src="./img/cate_img_8.png" alt=""></i><span class="cate-title cate8">베이커리·<br>치즈</span></a></li>
                             <li class="slide slide9"><a href="#" class="cate-btn9"><i><img src="./img/cate_img_9.png" alt=""></i><span class="cate-title cate9">과자·간식·<br>떡</span></a></li>
                             <li class="slide slide10"><a href="#" class="cate-btn10"><i><img src="./img/cate_img_10.png" alt=""></i><span class="cate-title cate10">음료·차·<br>프로틴</span></a></li>
                             <li class="slide slide11"><a href="#" class="cate-btn11"><i><img src="./img/cate_img_11.png" alt=""></i><span class="cate-title cate11">계란·난백·<br>콩</span></a></li>
                             <li class="slide slide12"><a href="#" class="cate-btn12"><i><img src="./img/cate_img_12.png" alt=""></i><span class="cate-title cate12">견과·고구마·<br>감자</span></a></li>
                             <li class="slide slide13"><a href="#" class="cate-btn13"><i><img src="./img/cate_img_13.png" alt=""></i><span class="cate-title cate13">반찬·밀키트·<br>안주</span></a></li>
                             <li class="slide slide14"><a href="#" class="cate-btn14"><i><img src="./img/cate_img_14.png" alt=""></i><span class="cate-title cate14">건강식품</span></a></li>
                             <li class="slide slide15"><a href="#" class="cate-btn15"><i><img src="./img/cate_img_15.png" alt=""></i><span class="cate-title cate15">수산·해산</span></a></li>
                             <li class="slide slide16"><a href="#" class="cate-btn16"><i><img src="./img/cate_img_16.png" alt=""></i><span class="cate-title cate16">소스·오일</span></a></li>
                             <li class="slide slide17"><a href="#" class="cate-btn17"><i><img src="./img/cate_img_17.png" alt=""></i><span class="cate-title cate17">식단·패키지</span></a></li>
                          </ul>
                       </div>
                       <!-- 다음, 이전 화살버튼 -->
                       <a href="#" class="prev-btn" title="preview">
                          <img src="./img/slide_arrow.png" alt="">
                       </a>
                       <a href="#" class="next-btn" title="next">
                          <img src="./img/slide_arrow.png" alt="">
                       </a>
                    </div>
                </div>
            </section>
            <section id="section2">
                <div class="container">
                    <div class="title">
                        <h2>오늘의 전체 랭킹 순위!</h2>
                        <ul>
                            <li><a href="#" class="list-btn1 on">실시간</a></li>
                            <li><a href="#" class="list-btn2">판매량</a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <ul class="item-list">
                            <!-- 반복출력 -->
                        </ul>
                    </div>
                </div>
            </section>
    </main>



<?
    include_once($path.'footer.php')
?>

<?
    include_once($path.'quick_menu.php')
?>
</div>
    <!-- 셀프 -->
    <script src="./js/intro.js"></script>
    <!-- 공용 -->
    <script src="<?=$path?>js/quick_menu.js"></script>
    <script src="<?=$path?>js/header.js"></script>
    <script src="<?=$path?>js/footer.js"></script>
</body>
</html>
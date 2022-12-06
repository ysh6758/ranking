<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랭킹닭컴</title>
    <meta name="publisher" content="SEUNGHYEON">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/lib/jquery.min.js"></script>
</head>
<body>
    <!-- 스킵메뉴 -->
    <ul id="skip">
        <li><a href="#header">주요 메뉴 바로가기</a></li>
        <li><a href="#main">본문 내용 바로가기</a></li>
        <li><a href="#footer">하단 바로가기</a></li>
    </ul>


    <div id="wrap">
        <!-- 헤더영역 -->
<?
    include_once($path.'header.php')
?>
        <!-- 헤더영역 -->
        <main id="main">
            <!-- 섹션1 슬라이드 -->
            <section id="section1">
                <div class="slide-container">
                    <div class="slide-view">
                        <ul class="slide-wrap">
                            <li class="slide slide8">
                                <a href="#"><img src="./img/slide8.jpg" alt=""></a>
                            </li>
                            <li class="slide slide1">
                                <a href="#"><img src="./img/slide1.jpg" alt=""></a>
                            </li>
                            <li class="slide slide2">
                                <a href="#"><img src="./img/slide2.jpg" alt=""></a>
                            </li>
                            <li class="slide slide3">
                                <a href="#"><img src="./img/slide3.jpg" alt=""></a>
                            </li>
                            <li class="slide slide4">
                                <a href="#"><img src="./img/slide4.jpg" alt=""></a>
                            </li>
                            <li class="slide slide5">
                                <a href="#"><img src="./img/slide5.jpg" alt=""></a>
                            </li>
                            <li class="slide slide6">
                                <a href="#"><img src="./img/slide6.jpg" alt=""></a>
                            </li>
                            <li class="slide slide7">
                                <a href="#"><img src="./img/slide7.jpg" alt=""></a>
                            </li>
                            <li class="slide slide8">
                                <a href="#"><img src="./img/slide8.jpg" alt=""></a>
                            </li>
                            <li class="slide slide1">
                                <a href="#"><img src="./img/slide1.jpg" alt=""></a>
                            </li>
                        </ul>
                    </div>
                    <!-- 카운트박스 -->
                    <span class="count-box">
                        <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        <em class="count-number"></em>
                        <i>/</i>
                        <em class="total-number"></em>
                        <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                    </span>
                    <!-- 카운트버튼 오른쪽 모달버튼 -->
                    <a href="#" class="modal-btn"><img src="./img/modal-btn.png" alt=""></a>
                </div>
            </section>
            <section id="section2">
                <div class="slide-container">
                    <div class="slide-view">
                        <ul class="slide-wrap">
                            <li class="slide slide1">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon1.png" alt=""></div>
                                        <span>신상품</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide1">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon2.png" alt=""></div>
                                        <span>선물하기</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide2">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon3.png" alt=""></div>
                                        <span>닭가슴살</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide3">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon4.png" alt=""></div>
                                        <span>도시락·볶음밥</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide4">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon5.png" alt=""></div>
                                        <span>샐러드</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide5">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon6.png" alt=""></div>
                                        <span>즉석간편식</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide6">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon7.png" alt=""></div>
                                        <span>베이커리</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon8.png" alt=""></div>
                                        <span>프로틴·음료</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon9.png" alt=""></div>
                                        <span>계란·난백</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon10.png" alt=""></div>
                                        <span>소고기</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon11.png" alt=""></div>
                                        <span>돼지·오리</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon12.png" alt=""></div>
                                        <span>닭안심살</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon13.png" alt=""></div>
                                        <span>과자·간식</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon14.png" alt=""></div>
                                        <span>비건식품</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon15.png" alt=""></div>
                                        <span>견과·고구마</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon16.png" alt=""></div>
                                        <span>반찬·안주</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon17.png" alt=""></div>
                                        <span>건강식품</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon18.png" alt=""></div>
                                        <span>수산·해산</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon19.png" alt=""></div>
                                        <span>소스·오일</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide7">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon20.png" alt=""></div>
                                        <span>식단·패키지</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide8">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon21.png" alt=""></div>
                                        <span>운동·생활</span>
                                    </a>
                                </div>
                            </li>
                            <li class="slide slide8">
                                <div class="category-box">
                                    <a href="#">
                                        <div class="icon-box"><img src="./img/category-icon22.png" alt=""></div>
                                        <span>베이비·키즈</span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- 슬라이드버튼 -->
                    <div class="prev-box btn-box">
                        <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                    </div>
                    <div class="next-box btn-box">
                        <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                    </div>

                </div>
            </section>
            <section id="section3">
                <div class="title">
                    <h2 class="slide-title">MD's 추천 상품</h2>
                </div>
                <div class="slide-container">
                    <div class="slide-view">
                        <ul class="slide-wrap">
                            <!-- 반복호출 -->
                        </ul>
                    </div>
                    <!-- 슬라이드버튼 -->
                    <div class="prev-box btn-box">
                        <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                    </div>
                    <div class="next-box btn-box">
                        <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                    </div>

                </div>
            </section>
            <section id="section4">
                <div class="container">
                    <div class="left-box">
                        <h2><i><img src="./img/ico_timesale_title.png" alt=""></i>지금 이순간<br>
                        깜짝 타임세일!</h2>
                        <p>오늘이 가면 없을 기회, 놓치지마세요.</p>
                    </div>
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec4_img1.jpg" alt="">
                                            <div class="timer">
                                                <span class="count-num">
                                                    <i><img src="./img/ico_timesale.png" alt=""></i>
                                                    0일 00:15:30
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide2">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec4_img2.jpg" alt="">
                                            <div class="timer">
                                                <span>
                                                    <i><img src="./img/ico_timesale.png" alt=""></i>
                                                    0일 00 : 15 : 30
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt=""><span><img src="./img/icon_star.png" alt="">5<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>[잇메이트&러브잇] 닭가슴살 현미 볶음밥·슈마이 6+6 & 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide3">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec4_img3.jpg" alt="">
                                            <div class="timer">
                                                <span>
                                                    <i><img src="./img/ico_timesale.png" alt=""></i>
                                                    0일 00 : 15 : 30
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt=""><span><img src="./img/icon_star.png" alt="">5<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>☎TIME SALE☎ QR치킨 통다리구이 구매 시, 맛있닭 탕수육 증정!</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide4">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec4_img4.jpg" alt="">
                                            <div class="timer">
                                                <span>
                                                    <i><img src="./img/ico_timesale.png" alt=""></i>
                                                    0일 00 : 15 : 30
                                                </span>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt=""><span><img src="./img/icon_star.png" alt="">5<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>☎TIME SALE☎ 러브잇 닭가슴살 슈마이 6+3</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
    
                    </div>
                </div>
            </section>
            <section id="section5">
                <div class="title">
                    <h2 class="slide-title">이런 상품은 어때요?</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="refresh-btn-box">
                    <button class="refresh-btn">
                        <em>추천상품</em> 새로고침 <i><img src="./img/refresh-icon.png" alt=""></i>
                    </button>
                </div>
            </section>
            <section id="section6">
                <div class="container">
                    <div class="title">
                        <h2>테마별 추천 상품</h2>
                    </div>
                    <div class="content">
                        <div class="btn-container">
                            <ul>
                                <li><button class="recomend-btn1 btn1-5 on">촉촉함의 대명사</button></li>
                                <li><button class="recomend-btn2 btn1-5">채식, 어렵지 않아요</button></li>
                                <li><button class="recomend-btn3 btn1-5">인기 폭발 토핑샐러드</button></li>
                                <li><button class="recomend-btn4 btn1-5">추운 계절과 찰떡궁합 ♡</button></li>
                                <li><button class="recomend-btn5 btn1-5">출출할 때 딱!</button></li>
                            </ul>
                        </div>
                        <div class="recomend-box1 recomend1-5">
                            <div class="left">
                                <img src="./img/sec6_img1.jpg" alt="">
                                <div class="text">
                                    <em>입안 가득 느껴지는 부드러움</em>
                                    <p>수분을 가득 품어<br>
                                    더 촉촉하고 부드러운 닭가슴살</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="gap">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check1-1" name="check-box"><img src="./img/sec6_box_img1-1.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check1-2" name="check-box"><img src="./img/sec6_box_img1-2.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check1-3" name="check-box"><img src="./img/sec6_box_img1-3.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check1-4" name="check-box"><img src="./img/sec6_box_img1-4.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button>장바구니 담기</button>
                                </div>
                            </div>
                        </div>
                        <div class="recomend-box2 recomend1-5">
                            <div class="left">
                                <img src="./img/sec6_img2.jpg" alt="">
                                <div class="text">
                                    <em>맛있게 즐기는 채식 한끼</em>
                                    <p>도시락부터 간편식까지<br>
                                    다양하게 만나보세요</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="gap">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check2-1" name="check-box"><img src="./img/sec6_box_img2-1.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check2-2" name="check-box"><img src="./img/sec6_box_img2-2.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check2-3" name="check-box"><img src="./img/sec6_box_img2-3.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check2-4" name="check-box"><img src="./img/sec6_box_img2-4.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button>장바구니 담기</button>
                                </div>
                            </div>
                        </div>
                        <div class="recomend-box3 recomend1-5">
                            <div class="left">
                                <img src="./img/sec6_img3.jpg" alt="">
                                <div class="text">
                                    <em>골라먹는 재미가 쏠쏠</em>
                                    <p>신선한 야채와 함께<br>
                                    맛있는 토핑을 가득 담았어요</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="gap">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check3-1" name="check-box"><img src="./img/sec6_box_img3-1.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check3-2" name="check-box"><img src="./img/sec6_box_img3-2.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check3-3" name="check-box"><img src="./img/sec6_box_img3-3.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check3-4" name="check-box"><img src="./img/sec6_box_img3-4.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button>장바구니 담기</button>
                                </div>
                            </div>
                        </div>
                        <div class="recomend-box4 recomend1-5">
                            <div class="left">
                                <img src="./img/sec6_img4.jpg" alt="">
                                <div class="text">
                                    <em>자연에서 온 건강 간식</em>
                                    <p>부드럽고 달콤한 맛 그대로!<br>
                                    데워먹으면 더 맛있어요</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="gap">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check4-1" name="check-box"><img src="./img/sec6_box_img4-1.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check4-2" name="check-box"><img src="./img/sec6_box_img4-2.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check4-3" name="check-box"><img src="./img/sec6_box_img4-3.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check4-4" name="check-box"><img src="./img/sec6_box_img4-4.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button>장바구니 담기</button>
                                </div>
                            </div>
                        </div>
                        <div class="recomend-box5 recomend1-5">
                            <div class="left">
                                <img src="./img/sec6_img5.jpg" alt="">
                                <div class="text">
                                    <em>바삭함이 살아있는 핫도그</em>
                                    <p>쫄깃-한 반죽 속에<br>
                                    탱글한 닭가슴살 소시지를 쏙!</p>
                                </div>
                            </div>
                            <div class="right">
                                <div class="gap">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check5-1" name="check-box"><img src="./img/sec6_box_img5-1.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check5-2" name="check-box"><img src="./img/sec6_box_img5-2.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check5-3" name="check-box"><img src="./img/sec6_box_img5-3.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" class="check-box" id="check5-4" name="check-box"><img src="./img/sec6_box_img5-4.jpg" alt=""></label>
                                            <a href="#">
                                                <h3>맛있닭 스팀 닭가슴살 혼합 100g X 10팩</h3>
                                                <span><strong>18,900</strong>원</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn-box">
                                    <button>장바구니 담기</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="section7">
                <div class="container">
                    <a href="#" class="banner"><img src="./img/sec7_banner.jpg" alt=""></a>
                </div>
            </section>
            <section id="section8">
                <div class="title">
                    <h2 class="slide-title">오늘의 신상품=☆</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="refresh-btn-box">
                    <button class="refresh-btn">
                        <em>추천상품</em> 새로고침 <i><img src="./img/refresh-icon.png" alt=""></i>
                    </button>
                </div>
            </section>
            <section id="section9">
                <div class="title">
                    <h2 class="slide-title">지금 뜨는 HOT!한 상품</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="refresh-btn-box">
                    <button class="refresh-btn">
                        <em>추천상품</em> 새로고침 <i><img src="./img/refresh-icon.png" alt=""></i>
                    </button>
                </div>
            </section>
            <section id="section10">
                <div class="container">
                    <a href="#" class="banner"><img src="./img/sec10_banner.jpg" alt=""></a>
                </div>
            </section>
            <section id="section11">
                <div class="title">
                    <h2 class="slide-title">오렌지멤버스는 할인&추가적립</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="view-all-box">
                    <button class="refresh-btn">
                        <span>전체보기</span><i class="arrow-icon"></i>
                    </button>
                </div>
            </section>
            <section id="section12">
                <div class="title">
                    <h2 class="slide-title">다양한 소스로 즐겨봐요😋</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="view-all-box">
                    <button class="refresh-btn">
                        <span>전체보기</span><i class="arrow-icon"></i>
                    </button>
                </div>
            </section>
            <section id="section13">
                <div class="title">
                    <h2 class="slide-title">지금, 주목받는 브랜드</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img1.jpg" alt="">
                                            <i><img src="./img/sec6_1logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>Life is Delicious!</p>
                                            <strong>맛있닭</strong>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide2">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img2.jpg" alt="">
                                            <i><img src="./img/sec6_2logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>매일 손이 가는 나만의 식단친구!</p>
                                            <strong>잇메이트</strong>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide3">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img3.jpg" alt="">
                                            <i><img src="./img/sec6_3logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>치즈가 더하는 닭가슴살의 부드러움!</p>
                                            <strong>치품닭</strong>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide4">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img4.jpg" alt="">
                                            <i><img src="./img/sec6_4logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>소시지만 연구하는 전문 브랜드, 베스틱</p>
                                            <strong>베스틱</strong>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide5">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img5.jpg" alt="">
                                            <i><img src="./img/sec6_5logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>한끼를 먹더라도 제대로, 맛있게!</p>
                                            <strong>맛있찬</strong>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide6">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec13_img6.jpg" alt="">
                                            <i><img src="./img/sec6_6logo.png" alt=""></i>
                                        </div>
                                        <div class="text-box">
                                            <p>We Love to Eat!</p>
                                            <strong>러브잇</strong>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="view-all-box">
                    <button class="refresh-btn">
                        <span>전체보기</span><i class="arrow-icon"></i>
                    </button>
                </div>
            </section>
            <section id="section14">
                <div class="title">
                    <h2 class="slide-title">미슐랭⭐중화요리 맛집 오픈</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="view-all-box">
                    <button class="refresh-btn">
                        <span>전체보기</span><i class="arrow-icon"></i>
                    </button>
                </div>
            </section>
            <section id="section15">
                <div class="title">
                    <h2 class="slide-title">한입에 쏙쏙쏙! 간편하게 먹어요</h2>
                </div>
                <div class="container">
                    <div class="slide-container">
                        <div class="slide-view">
                            <ul class="slide-wrap">
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="slide slide1">
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>★딱 이시간만!★ [맛있닭] 닭가슴살 스테이크 10+5</h2>
                                            </div>
                                            <div class="row3">
                                                <strong>34%</strong>
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                </span>
                                                <span class="origin">35,400원</span>
                                                <span class="remain"><strong>44</strong>개 남음</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <!-- 버튼박스 -->
                        <div class="prev-box btn-box">
                            <a href="#" class="prev-btn"><img src="./img/slide_arrow.png" alt="prev-btn"></a>
                        </div>
                        <div class="next-box btn-box">
                            <a href="#" class="next-btn"><img src="./img/slide_arrow.png" alt="next-btn"></a>
                        </div>
                    </div>

                </div>
                <div class="view-all-box">
                    <button class="refresh-btn">
                        <span>전체보기</span><i class="arrow-icon"></i>
                    </button>
                </div>
            </section>
            <section id="section16">
                <div class="container">
                    <a href="#" class="banner"><img src="./img/sec16_banner.jpg" alt=""></a>
                </div>
            </section>
            <section id="section17">
                <div class="container">
                    <div class="title">
                        <h2>카테고리 인기상품</h2>
                    </div>
                    <div class="content">
                        <div class="btn-container">
                            <ul>
                                <li><button class="recomend-btn1 btn1-5 on">닭가슴살</button></li>
                                <li><button class="recomend-btn2 btn1-5">즉석 간편식</button></li>
                                <li><button class="recomend-btn3 btn1-5">도시락·볶음밥</button></li>
                                <li><button class="recomend-btn4 btn1-5">닭안심살</button></li>
                                <li><button class="recomend-btn5 btn1-5">샐러드·과일</button></li>
                                <li><button class="recomend-btn6 btn1-5">음료·차·프로틴</button></li>
                                <li><button class="recomend-btn7 btn1-5">계란·난백·콩</button></li>
                                <li><button class="recomend-btn8 btn1-5">견과·고구마·감자</button></li>
                                <li><button class="recomend-btn9 btn1-5">수산·해산</button></li>
                                <li><button class="recomend-btn10 btn1-5">식단·패키지</button></li>
                            </ul>
                        </div>
                        <div class="recomend-box1 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box2 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img12.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box3 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box4 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box5 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box6 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box7 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box8 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box9 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                        <div class="recomend-box10 recomend1-5">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img1.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스테이크 오리지널 1팩</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img3.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 닭가슴살 한끼 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img4.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 한입 소스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img5.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭 스팀 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img6.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>맛있닭FRESH 냉장 소프트 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img7.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img8.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 훈제 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img9.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 소시지 혼합구성 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img10.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 슬라이스 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img11.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 닭가슴살 볼 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇메이트 저염 스팀 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>러브잇 소프트 닭가슴살 오리지널 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>치품닭 닭가슴살 스테이크 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>베스틱 닭가슴살 소시지 혼합 120g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="img-box">
                                            <img src="./img/sec5_img2.jpg" alt="">
                                        </div>
                                        <div class="text-box">
                                            <div class="row1">
                                                <img src="./img/express.png" alt="">
                                                <span><img src="./img/icon_star.png" alt="">5.0<em>(243)</em></span>
                                            </div>
                                            <div class="row2">
                                                <h2>잇츠나우 실온보관 한입 닭가슴살 혼합 100g</h2>
                                            </div>
                                            <div class="row3">
                                                <span class="price">
                                                    <em class="num">24,600</em>원
                                                    <strong>100g당 : 1,690원~1,750원</strong>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- 푸터영역 -->
<?
    include_once($path.'footer.php')
?>
        <!-- 푸터영역 -->


        <!-- 퀵 메뉴 -->
<?
    include_once($path.'quick_menu.php');
?>
        <!-- 퀵 메뉴 -->


        <!-- 채팅문의메뉴 -->
        <!-- <div id="enquiry">
            <div class="enquiry-icon">
                <a href="#">
                    <img src="./img/button-1569572820.png" alt="">
                </a>
            </div>
            <div class="content-box">
                <div class="gap">
                    <h2>랭킹닭컴</h2>
                    <div class="first-box"></div>
                    <div class="second-box"></div>
                </div>
                <div class="enquiry-footer">   
                </div>
            </div>
        </div> -->

        <!-- 모달영역 -->
<?
    include_once($path.'modal.php');
?>
        <!-- 모달영역 -->

    </div>
    <!-- 셀프 -->
    <script src="./js/intro.js"></script>
    <!-- 공용 -->
    <script src="<?=$path?>js/quick_menu.js"></script>
    <script src="<?=$path?>js/header.js"></script>
    <script src="<?=$path?>js/footer.js"></script>
</body>
</html>
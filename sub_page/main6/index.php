<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랭킹닭컴 | 이달의 특가</title>
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
                    <h2>이벤트</h2>
                </div>
                <div class="menu-list">
                    <h3>전체이벤트</h3>
                    <ul>
                        <li><a href="#">전체</a></li>
                        <li><a href="#">진행중 이벤트</a></li>
                        <li><a href="#">종료된 이벤트</a></li>
                    </ul>
                    <button><img src="./img/event_mail.png" alt="">당첨자 발표 보기</button>
                </div>
                <div class="content">
                    <ul class="content-list">
                        <!-- 반복호출 -->

                    </ul>
                </div>
                <div class="pagenation">
                    <a href="#"><img src="./img/page_left.png" alt=""></a>
                    <a href="#"><span class="on">1</span></a>
                    <a href="#"><span class="">2</span></a>
                    <a href="#"><span class="">3</span></a>
                    <a href="#"><span class="">4</span></a>
                    <a href="#"><span class="">5</span></a>
                    <a href="#"><img src="./img/page_right.png" alt=""></a>
                    <div class="input-box">
                        <div class="left">
                            <div class="container">
                                <a href="#" class="select-btn">전체<img src="./img/gobottom.png" alt=""></a>
                                <div class="select-list">
                                    <ul>
                                        <li><a href="#">전체</a></li>
                                        <li><a href="#">제목</a></li>
                                        <li><a href="#">내용</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="right">
                            <input type="text">
                            <a href="#"><img src="./img/icon_search.png" alt=""></a>
                        </div>
                    </div>
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
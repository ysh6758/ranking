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
                    <div class="cate-menu">
                        <ul>
                            <li><a href="#">★릴레이 SALE 페스티벌★</a></li>
                            <li><a href="#">필요할 때 언제든 특급배송</a></li>
                            <li><a href="#">11월 할인&증정</a></li>
                            <li><a href="#">간편한 한입 닭가슴살</a></li>
                            <li><a href="#">바쁜 일상 든든 한 끼</a></li>
                            <li><a href="#">가벼운 다이어트 식단</a></li>
                            <li><a href="#">BEST 닭가슴살 패키지</a></li>
                            <li><a href="#">랭킹분식 OPEN</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="section2">
                <div class="container">
                    <div class="banner">
                        <img src="./img/banner1.jpg" alt="">
                    </div>
                    <div class="item-box">
                        <ul class="item-list1">


                        </ul>
                    </div>
                    <div class="banner">
                        <img src="./img/banner2.jpg" alt="">
                    </div>
                    <div class="item-box">
                        <ul class="item-list2">


                        </ul>
                    </div>
                    <div class="banner">
                        <img src="./img/banner3.jpg" alt="">
                    </div>
                    <div class="item-box">
                        <ul class="item-list3">


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
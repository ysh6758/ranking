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
                <div class="banner">
                    <a href="#"><img src="./img/banner_img.jpg" alt=""></a>
                </div>
            </div>
        </section>
        <section id="section2">
            <div class="container">
                <div class="title">
                    <h2>베스트 상품</h2>
                </div>
                <div class="slide-container">
                    <div class="slide-view">
                        <ul class="slide-wrap">

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
            </div>
        </section>
        <section id="section3">
            <div class="container">
                
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
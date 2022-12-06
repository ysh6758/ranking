<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>랭킹닭컴 | 브랜드관</title>
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
                    <h2>브랜드관</h2>
                </div>
                <div class="sub-title">
                    <h3>인기브랜드</h3>
                </div>
                <div class="slide-container">
                    <div class="slide-view">
                        <ul class="slide-wrap">

                        </ul>
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
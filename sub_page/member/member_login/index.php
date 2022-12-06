<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 | 브랜드관</title>
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
            <div class="login-box">
                <div class="title">
                    <strong>안녕하세요 :)</strong><p><i><img src="./img/logo.png" alt="logo"></i>입니다.</p>
                </div>
                <div class="content">
                    <form id="login-form" name="login_form" method="post" action="./">
                        <ul>
                            <li><input type="text" placeholder="아이디"></li>
                            <li><input type="password" placeholder="비밀번호"></li>
                            <li class="check-box">
                                <label for="auto-login"><input id="auto-login" type="checkbox">자동로그인</label>
                                <label for="save-id"><input id="save-id" type="checkbox">아이디저장</label>
                            </li>
                            <li><button type="submit">로그인</button></li>
                            <li class="find"><a href="#" class="findId">아이디 찾기</a><a href="#" class="findPw">비밀번호 찾기</a></li>
                            <li class="icon">
                                <a href="#" class="sns-icon"><img src="./img/ico_sns_naver.png" alt="sns_icon"></a>
                                <a href="#" class="sns-icon"><img src="./img/ico_sns_apple.png" alt="sns_icon"></a>
                                <a href="#" class="sns-icon"><img src="./img/ico_sns_kakao.png" alt="sns_icon"></a>
                            </li>
                            <li class="simple"><a href="#" class="simple-btn">간편회원가입</a></li>
                            <li class="nonmember"><a href="#" class="nonmember-btn">비회원주문조회</a></li>
                            <div class="login-banner">
                                <a href="#"><img src="./img/login_banner.png" alt="login_banner"></a>
                            </div>
                        </ul>
                    </form>
                </div>
            </div>
        </section>
    </main>


<?
    include_once($path.'footer.php')
?>

</div>
    <!-- 셀프 -->
    <script src="./js/intro.js"></script>
    <!-- 공용 -->
    <script src="<?=$path?>js/header.js"></script>
    <script src="<?=$path?>js/footer.js"></script>
</body>
</html>
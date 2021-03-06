<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 블로그</title>

    TODO: 폰트어썸
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    TODO: CSS,JS 링크
    <link rel="stylesheet" href="../resource/common.css">
    <script src="../resource/common.js"></script>
    TODO: 제이쿼리
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    TODO: 구글폰트
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

    TODO: 제이쿼리
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="top-line"></div>
    <div class="top-block"></div>
    <div class="top-bar">
        <div class="logo"><i class="fab fa-adn"></i></div>

        <div class="menu-1">
            <ul>
                <li><a href="../home/main.php">HOME</a></li>
                <li class="sub-menu"><a href="../article/list.php">Article
                        <ul>
                            <li><a href="/list?boardId=1"></a></li>
                        </ul>

                    </a></li>
                <li class="sub-menu"><a href="#">SNS</a>
                    <ul class="absolute">
                        <li><a href="#">GITHUB</a></li>
                    </ul>
                </li>
                <li><a href="../article/write.php">WRITE</a></li>
                <li><a href="../member/login.php">LOGIN</a></li>
                <li><a href="../member/doLogout.php">LOGOUT</a></li>
                <li><a href="../member/join.php">JOIN</a></li>
            </ul>
        </div>

        <form action="../article/list.php">
            <input type="search" name="searchKeyword">
        </form>
    </div>
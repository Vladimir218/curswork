
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Переписка ТД</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="../../app/assets/cssSite/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../../app/assets/cssSite/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
    <script type="text/javascript" src="../../app/assets/jsSite/jquery-2.1.4.min.js"></script>
    <!-- //js -->

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="../../app/assets/cssSite/font-awesome.min.css" />
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header w3layouts">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <h1><a class="navbar-brand" href="index.html">Litteras  </a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="cl-effect-13" id="cl-effect-13">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Домашняя<br>страница</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Входящие<br>письма <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Поиск</a></li>
                                <li><a href="typography.html">Регистрация</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Исходящие<br>письма <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Поиск</a></li>
                                <li><a href="typography.html">Регистрация</a></li>
                            </ul>
                        </li>
                        <li><a href="logout">Выход</a></li>
                        <li><a href="#">Пользователь<br><?=$_SESSION['user']?></a></li>
                    </ul>

                </nav>
            </div>
        </nav>
    </div>
</div>

<?php

//echo $content;
include_once $content;
// здесь будет вывод view
?>
<!-- footer -->
<div class="footer-w3layouts">
    <div class="container">
        <div class="agile-copy">
            <p>&copy; 2017 Отдел оперативно технического управления. База писем технического департамента</a></p>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
<script src="../../app/assets/jsSite/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>

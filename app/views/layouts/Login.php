<!DOCTYPE html>
<html lang="en">
<head>
    <title>Переписка ТД</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tag Keywords -->
    <!-- css files -->
    <link href="../../app/assets/css/style.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="../../app/assets/css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <!-- //Web-Fonts -->
</head>
<body>
<h1>       </h1>
<div class="main">
    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">


        <?php

        //echo $content;
        include_once $content;
        // здесь будет вывод view
        ?>

    </div>
    <div class="clear"> </div>
</div>
<div class="footer">
    <p> &copy; 2017 Отдел оперативно технического управления. База писем технического департамента</a></p>
</div>

<!-- js-scripts -->
<!-- js -->
<script type="text/javascript" src="../../app/assets/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- tabs -->
<script src="../../app/assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });
</script>
<!-- //tabs -->
<!-- //js-scripts -->
</body>
</html>

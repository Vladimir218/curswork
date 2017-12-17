
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



    <!-- bootstrap 3.0.2 for Page-->
        <!-- font Awesome -->
    <link href="../../app/assets/cssPage/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="../../app/assets/cssPage/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="../../app/assets/cssPage/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../../app/assets/cssPage/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="../../app/assets/cssPage/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
    <!-- Theme style -->



    
    
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
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Входящие<br>письма <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="/InLettersFind/">Поиск</a></li>
                                <li><a href="/InLettersReg/">Регистрация</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Исходящие<br>письма <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Поиск</a></li>
                                <li><a href="typography.html">Регистрация</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Админка<b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="icons.html">Поиск</a></li>
                                <li><a href="typography.html">Регистрация</a></li>
                            </ul>
                        </li>
                        <li><a href="/logout/">Выход</a></li>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

<!-- InputMask -->
<script src="../../app/assets/jsPage/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="../../app/assets/jsPage/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="../../app/assets/jsPage/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
<!-- date-range-picker -->
<script src="../../app/assets/jsPage/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<!-- bootstrap color picker -->
<script src="../../app/assets/jsPage/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="../../app/assets/jsPage/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../../app/assets/jsPage/AdminLTE/app.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../app/assets/jsPage/AdminLTE/demo.js" type="text/javascript"></script>
<!-- Page script -->
<script type="text/javascript">
    $(function() {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                },
                startDate: moment().subtract('days', 29),
                endDate: moment()
            },
            function(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal',
            radioClass: 'iradio_minimal'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-red',
            radioClass: 'iradio_flat-red'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
            showInputs: false
        });
    });
</script>


</body>
</html>

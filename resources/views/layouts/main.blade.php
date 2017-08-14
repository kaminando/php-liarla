<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liarla - Tours</title>
    <!-- PLUGINS CSS STYLE -->
    <link href="{!! asset('plugins/jquery-ui/jquery-ui.css') !!}"           media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins/bootstrap/css/bootstrap.min.css') !!}"   media="all" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"     media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins/rs-plugin/css/settings.css') !!}"        media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins/selectbox/select_option1.css') !!}"      media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins//datepicker/datepicker.css') !!}"        media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins/isotope/jquery.fancybox.css') !!}"       media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('plugins/isotope/isotope.css') !!}"               media="all" rel="stylesheet" type="text/css" />
    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700' rel='stylesheet' type='text/css'>
    <!-- CUSTOM CSS -->
    <link href="{!! asset('css/style.css') !!}"    media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/custom.css') !!}"   media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('css/default.css') !!}"  media="all" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="body-wrapper  changeHeader ">
    <div class="main-wrapper">

      @yield('content')
      
    </div>
    <!-- JAVASCRIPTS -->
    <script type="text/javascript" src="{!! asset('plugins/jquery.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/jquery-ui/jquery-ui.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/rs-plugin/js/jquery.themepunch.tools.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/selectbox/jquery.selectbox-0.1.3.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/datepicker/bootstrap-datepicker.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/waypoints.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/counter-up/jquery.counterup.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/isotope/isotope.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/isotope/jquery.fancybox.pack.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/isotope/isotope-triger.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/countdown/jquery.syotimer.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('plugins/autonumeric/autoNumeric.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('js/custom.js') !!}"></script>
  </body>
</html> 

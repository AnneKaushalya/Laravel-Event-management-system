<!DOCTYPE html>
<html dir = "<?php
if (App::getLocale() == "ar"){
    echo 'rtl';
}else{
    echo 'ltr';
}
?>">
    <head>
        <!--
                  _   _                 _ _
             /\  | | | |               | (_)
            /  \ | |_| |_ ___ _ __   __| |_ _______   ___ ___  _ __ ___
           / /\ \| __| __/ _ \ '_ \ / _` | |_  / _ \ / __/ _ \| '_ ` _ \
          / ____ \ |_| ||  __/ | | | (_| | |/ /  __/| (_| (_) | | | | | |
         /_/    \_\__|\__\___|_| |_|\__,_|_/___\___(_)___\___/|_| |_| |_|

        -->
        <title>{{{$organiser->name}}} - Attendize.com</title>


        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" />


        <!-- Open Graph data -->
        <meta property="og:title" content="{{{$organiser->name}}}" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="{{URL::to('')}}" />
        <meta property="og:image" content="{{URL::to($organiser->full_logo_path)}}" />
        <meta property="og:description" content="{{{Str::words(strip_tags($organiser->description)), 20}}}" />
        <meta property="og:site_name" content="Attendize.com" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

       {!!HTML::style('assets/stylesheet/frontend.css')!!}
        <?php if (App::getLocale() == "ar"){
            echo ' <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet"/>';
        }
        ?>
        @yield('head')
        <?php if (App::getLocale() == "ar"){
            echo ' <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css" rel="stylesheet"/>';
        }
        ?>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Cairo');
            body{
                font-family: 'Cairo', sans-serif;
            }
            body, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
                font-family: 'Cairo', sans-serif;
            }
        </style>
    </head>
    <body class="attendize">
        @include('Shared.Partials.FacebookSdk')
        <div id="organiser_page_wrap">
            @yield('content')
        </div>

        <a href="#intro" style="display:none;" class="totop"><i class="ico-angle-up"></i>
            <span style="font-size:11px;">{{ trans('common.top') }}</span></a>

        {!!HTML::script('assets/javascript/frontend.js')!!}

        @include('Shared.Partials.GlobalFooterJS')
        @yield('foot')
</body>
</html>

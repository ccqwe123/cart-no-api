<?php
header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin | @yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @include('includes.css')
    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini layout-top-nav">
        @include('includes.nav')
        <div class="content-wrapper" style="">
            @yield('content')
        </div>
        @include('includes.js')
    </body>
</html>

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
        <title>@yield('title')</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        @include('includes.css')
    </head>
        @if(\Request::route()->getName() == 'users.user_profile.dashboard' || \Request::route()->getName() == 'users.user_profile.info' || \Request::route()->getName() == 'users.user_profile.address' || \Request::route()->getName() == 'users.user_profile.contact' || \Request::route()->getName() == 'users.user_profile.social' || \Request::route()->getName() == 'users.user_profile.product.list' || \Request::route()->getName() == 'users.user_profile.product.sell' || \Request::route()->getName() == 'users.user_profile.product.sold.list' || \Request::route()->getName() == 'users.user_profile.product.archive.list' || \Request::route()->getName() == 'jobs.index')
        @include('includes.user-nav')
        @else
        @include('includes.default-nav')
        @endif
        <div class="content-wrapper" style="">
            @yield('content')
        </div>
    </div><!-- for wrapper--->
        @include('includes.js')
    </body>
</html>

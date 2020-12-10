<!doctype html>
<html class="no-js" lang="">
    <head>
        @include('includes.head')
    </head>
    <body>
        <!-- Preloader Start Here -->
        <div id="preloader"></div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper bg-ash">
            <!-- Header Menu Area Start Here -->
            @include('includes.header')
            <!-- Header Menu Area End Here -->
            <!-- Page Area Start Here -->
            @yield('content')
            
            <!-- Page Area End Here -->
        </div>
        
        @include('includes.script')

    </body>

</html>
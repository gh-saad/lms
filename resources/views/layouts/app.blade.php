<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
</head>

<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- Login Page Start Here -->
    <div class="login-page-wrap">
        @yield('content')
    </div>
    <!-- Login Page End Here -->
    @include('includes.script')

</body>
</html>
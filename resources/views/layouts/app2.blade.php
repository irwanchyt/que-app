<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>@yield('title')</title>

  @include('includes.app-css')

</head>
<body class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu" data-col="2-columns">
  @include('sweetalert::alert')
  @include('includes.navbar')
  @include('includes.sidebar')

    <div class="app-content content">
        <div class="content-body">
             @yield('content')
        </div>
    </div>

  <footer class="footer footer-static footer-light navbar-border navbar-shadow">

  </footer>
  @include('includes.app-js')
  @stack('cus-js')
</body>
</html>

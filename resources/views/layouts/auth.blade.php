<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>@yield('title')</title>
  @include('includes.css')

</head>
<body class="horizontal-layout horizontal-menu horizontal-menu-padding 1-column   menu-expanded blank-page blank-page"
data-open="click" data-menu="horizontal-menu" data-col="1-column">


    <div class="app-content container center-layout mt-2">

        @yield('content')

    </div>

  @include('includes.js')

</body>
</html>

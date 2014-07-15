<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example with a side menu that hides on mobile, just like the Pure website.">

    <title>Melanzy - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/pure-release-0.5.0/pure-min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="{{ asset('css/side-menu-old-ie.css') }}">
    <![endif]-->
    <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="{{ asset('css/side-menu.css') }}">
    <!--<![endif]-->

    <!--[if lt IE 9]>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.js"></script>
    <![endif]-->

    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-41480445-1', 'purecss.io');
    ga('send', 'pageview');
    </script>

  </head>
  <body>

    <div id="layout">
      <!-- Menu toggle -->
      <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
      </a>

      <div id="menu">
        <div class="pure-menu pure-menu-open">
          <a class="pure-menu-heading" href="#">Melanzy</a>

          <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">About</a></li>
            
            <li><a href="{{ URL::to('admin/brands') }}">Brands</a></li>
            <li><a href="{{ URL::to('admin/deals') }}">Deals</a></li>
            <li><a href="{{ URL::to('admin/malls') }}">Malls</a></li>
            <li><a href="{{ URL::to('admin/stores') }}">Stores</a></li>

            <li><a href="#">SQL Console</a></li>
          </ul>
        </div>
      </div>

      <div id="main">
        <div class="header">
          <h1>@yield('title')</h1>
          <h2>@yield('subtitle')</h2>
        </div>

        <div class="content">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="{{ asset('js/ui.js') }}"></script>

  </body>
</html>
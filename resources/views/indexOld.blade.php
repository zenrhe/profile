<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('RETest','app.name') }}</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

    <!-- App Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body data-ma-theme="green">

<div id="app">
  <main class="main">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
        </div>
    </nav>

    <header class="header" style="border:2px solid red;">
    </header>

    <aside class="sidebar" style="border:2px solid red;">
      <div style="border:2px solid red;">
        <h1> Side Bar </h1>
        @section('sidebar')
          This is the master sidebar.
      @show
      @yield('sidebar');
      </div>
    </aside>

    <section class="content" style="border:2px solid blue; height:50px;">
      <h1>Content</h1>
      @yield('content');
    </section>

    <footer class="footer hidden-xs-down" style="border:2px solid yellow;">
          <p>© Material Admin Responsive. All rights reserved.</p>

          <ul class="nav footer__nav">
              <a class="nav-link" href="">Homepage</a>

              <a class="nav-link" href="">Company</a>

              <a class="nav-link" href="">Support</a>

              <a class="nav-link" href="">News</a>

              <a class="nav-link" href="">Contacts</a>
          </ul>
      </footer>
    </section>
  </main>
</div>

<!-- Javascript -->
<!-- Vendors -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<!-- App functions and actions -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

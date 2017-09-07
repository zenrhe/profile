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

    @include('layouts.profileSideBar');

    <section class="content">
      @yield('content');
    </section>
  </main>

  @include('layouts.footer');
</div>

</body>
</html>

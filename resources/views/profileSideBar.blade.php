@extends('layouts.app')
@section('sidebar')
<aside class="sidebar">
  <div class="scrollbar-inner">
      <div class="user">
          <div class="user__info" data-toggle="dropdown">
              <div>
                <div class="profile__img">
                    <img src="images/harley1.jpg" alt="">
                    <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                </div>
                  <div class="user__name"> $users->name  </div>
                  <div class="user__email"> $users->email</div>

                  <ul class="icon-list">
                        <!--<li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>-->
                        <li><i class="zmdi zmdi-email"></i>  $users->email </li>
                        <li><i class="zmdi zmdi-twitter"></i><a href='twitter.com/@$users->twitter'>@ $users->twitter
                        <li><i class="zmdi zmdi-facebook"></i> Personal:  $users->fb_personal</li>
                        <li><i class="zmdi zmdi-facebook"></i> Cosplay:  $users->fb_cosplay</li>
                        <li><i class="zmdi zmdi-facebook"></i> Photograper:   $users->fb_photgrapher</li>
                        <li><i class="zmdi zmdi-facebook"></i> Shop:  $users->fb_seller</li>
                      </ul>

              </div>
          </div>
          <div class="dropdown-menu">
              <a class="dropdown-item" href="">View Profile</a>
              <a class="dropdown-item" href="">Settings</a>
              <a class="dropdown-item" href="">Logout</a>
          </div>
      </div>
  </div>
</aside>
@endsection
@section('content')
<section class="content">
  <div class="content__inner content__inner--sm">
      <header class="content__title">
          <h1>{{ $users->cosplay_name }}</h1>
          <small>{{ $users->name }} {{ $users->surname }} - {{ $users->tagline }}</small>
      </header>

      <div class="card profile">
          <div class="profile__img">
            <!--To Do: pull in image from db -->
            <!--To Do: only show edit if loggin in user's profile-->
              <img src="images/harley1.jpg" alt="">
              <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
          </div>

          <div class="profile__info">
              <h3>Mini Bio</h3>
              <p>{{ $users->mini_bio }}</p>

              <ul class="icon-list">
                  <!--<li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>-->
                  <li><i class="zmdi zmdi-email"></i> {{ $users->email }}</li>
                  <li><i class="zmdi zmdi-twitter"></i><a href='twitter.com/@{{$users->twitter}}'>
                    @ {{$users->twitter}}</a></li>
              </ul>
          </div>
      </div>

      <div class="toolbar">
          <nav class="toolbar__nav">
              <a class="active" href="profile-about.html">About</a>
              <a href="profile-photos.html">Photos</a>
              <a href="profile-contacts.html">Contacts</a>
          </nav>

          <div class="actions">
              <i class="actions__item zmdi zmdi-search" data-ma-action="toolbar-search-open"></i>
          </div>

          <div class="toolbar__search">
              <input type="text" placeholder="Search...">

              <i class="toolbar__search__close zmdi zmdi-long-arrow-left" data-ma-action="toolbar-search-close"></i>
          </div>
      </div>

      <div class="card">
          <div class="card-block">
              <h4 class="card-block__title mb-4">About {{ $users->name }} {{ $users->surname }} ( {{ $users->cosplay_name }} )</h4>

                {{ $users->about }}

              <br>


      </div>

      <div class="card-block">
          <div class="table-responsive">
            <h4 class="card-block__title mb-4">Events Attended</h4>
              <table id="data-table" class="table table-bordered .table-striped" >
                  <thead class="thead-default">
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Office</th>
                          <th>Age</th>
                          <th>Start date</th>
                          <th>Salary</th>
                      </tr>
                  </tfoot>
                  <tbody>
                      @foreach($events as $event)
                          <tr>
                              <td>{{ $event->title}}</td>
                              <td>{{ $event->city}}</td>
                          </tr>
                          @endforeach
                  </tbody>
              </table>
          </div>
      </div>
        </div>
  </div>
</section>
@endsection

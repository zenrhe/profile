<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Vendor styles -->
<link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
<link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
<link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

<!-- App styles -->
<link rel="stylesheet" href="/css/app.min.css">
</head>

<body data-ma-theme="green">
<main class="main">
<div class="page-loader">
  <div class="page-loader__spinner">
      <svg viewBox="25 25 50 50">
          <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
      </svg>
  </div>
</div>


<aside class="sidebar">
  <div class="scrollbar-inner">
      <div class="user">
          <div class="user__info" data-toggle="dropdown">
              <!-- <img class="user__img" src="demo/img/profile-pics/8.jpg" alt=""> -->
              <div>
                <div class="profile__img">
                    <img src="images/harley1.jpg" alt="">
                    <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                </div>
                  <div class="user__name">{{ $users->name}}  </div>
                  <div class="user__email">{{ $users->email}}</div>

                  <ul class="icon-list">
                        <!--<li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>-->
                        <li><i class="zmdi zmdi-email"></i> {{ $users->email }}</li>
                        <li><i class="zmdi zmdi-twitter"></i><a href='twitter.com/@{{$users->twitter}}'>@ {{$users->twitter }}
                        <li><i class="zmdi zmdi-facebook"></i> Personal: {{ $users->fb_personal}}</li>
                        <li><i class="zmdi zmdi-facebook"></i> Cosplay: {{ $users->fb_cosplay}}</li>
                        <li><i class="zmdi zmdi-facebook"></i> Photograper:  {{ $users->fb_photgrapher}}</li>
                        <li><i class="zmdi zmdi-facebook"></i> Shop: {{ $users->fb_seller}}</li>
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

<aside class="chat">
  <div class="chat__header">
      <h2 class="chat__title">Chat <small>Currently 20 contacts online</small></h2>

      <div class="chat__search">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="Search...">
              <i class="form-group__bar"></i>
          </div>
      </div>
  </div>

  <div class="listview listview--hover chat__buddies scrollbar-inner">
      <a class="listview__item chat__available">
          <img src="demo/img/profile-pics/7.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>hey, how are you doing.</p>
          </div>
      </a>

      <a class="listview__item chat__available">
          <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>hmm...</p>
          </div>
      </a>

      <a class="listview__item chat__away">
          <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>all good</p>
          </div>
      </a>

      <a class="listview__item">
          <img src="demo/img/profile-pics/8.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>morbi leo risus portaac consectetur vestibulum at eros.</p>
          </div>
      </a>

      <a class="listview__item">
          <img src="demo/img/profile-pics/6.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>fusce dapibus</p>
          </div>
      </a>

      <a class="listview__item chat__busy">
          <img src="demo/img/profile-pics/9.jpg" class="listview__img" alt="">

          <div class="listview__content">
              <div class="listview__heading">Jeannette Lawson</div>
              <p>cras mattis consectetur purus sit amet fermentum.</p>
          </div>
      </a>
  </div>

  <a href="messages.html" class="btn btn--action btn--fixed btn-danger"><i class="zmdi zmdi-plus"></i></a>
</aside>

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
  <li>Cosplaying for: {{ date('M d, y', strtotime($users->cosplay_since)) }}</li>
  <?php
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a days');

//$d1 = $users->cosplay_since;
// $d2 = new date('Y-m-d');
// $interval2 = $d1->diff($d2);
// echo $interval2->format('%R%a days');
?>
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

<!-- Events Attending -->
      <div class="card-block">
          <div class="table-responsive">
            <h4 class="card-block__title mb-4">Events Attending</h4>
              <table id="data-table" class="table table-bordered .table-striped" >
                  <thead class="thead-default">
                      <tr>
                          <th>Event Name</th>
                          <th>Location</th>
                          <th>Venue</th>
                          <th>Dates</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Event Name</th>
                        <th>Location</th>
                        <th>Venue</th>
                        <th>Dates</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    <!--TO DO: Only show future events this profile is marked as attending -->
                      @foreach($events as $event)
                          <tr>
                              <td>{{ $event->title}}</td>
                              <td>{{ $event->city}}</td>
                              <td>{{ $event->venue}}</td>
                              <td>
                              {{ date('M d, y', strtotime($event->startDate)) }} -
                              {{ date('M d, y', strtotime($event->endDate)) }}
                            </td>


                          </tr>
                          @endforeach
                  </tbody>
              </table>
          </div>
      </div>

  <!--End Events Attending  -->

  <!-- Events Attended-->
        <div class="card-block">
            <div class="table-responsive">
              <h4 class="card-block__title mb-4">Upcoming Events</h4>
                <table id="data-table" class="table table-bordered .table-striped" >
                    <thead class="thead-default">
                        <tr>
                            <th>Event Name</th>
                            <th>Location</th>
                            <th>Venue</th>
                            <th>Dates</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                          <th>Event Name</th>
                          <th>Location</th>
                          <th>Venue</th>
                          <th>Dates</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <!--TO DO: Only show past events this profile is marked as attending -->
                        @foreach($events as $event)
                            <tr>
                                <td>{{ $event->title}}</td>
                                <td>{{ $event->city}}</td>
                                <td>{{ $event->venue}}</td>
                                <td>
                                {{ date('M d, y', strtotime($event->startDate)) }} -
                                {{ date('M d, y', strtotime($event->endDate)) }}
                              </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    <!--End Events Attended -->
        </div>
  </div>
  </div>

  <footer class="footer hidden-xs-down">
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

<!-- Older IE warning message -->
<!--[if IE]>
  <div class="ie-warning">
      <h1>Warning!!</h1>
      <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

      <div class="ie-warning__downloads">
          <a href="http://www.google.com/chrome">
              <img src="img/browsers/chrome.png" alt="">
          </a>

          <a href="https://www.mozilla.org/en-US/firefox/new">
              <img src="img/browsers/firefox.png" alt="">
          </a>

          <a href="http://www.opera.com">
              <img src="img/browsers/opera.png" alt="">
          </a>

          <a href="https://support.apple.com/downloads/safari">
              <img src="img/browsers/safari.png" alt="">
          </a>

          <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
              <img src="img/browsers/edge.png" alt="">
          </a>

          <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
              <img src="img/browsers/ie.png" alt="">
          </a>
      </div>
      <p>Sorry for the inconvenience!</p>
  </div>
<![endif]-->

<!-- Javascript -->
<!-- Vendors -->
<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
<script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
<script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

<!-- App functions and actions -->
<script src="js/app.min.js"></script>
</body>
</html>

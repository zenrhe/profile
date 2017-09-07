<aside class="sidebar">
  <div class="scrollbar-inner">
      <div class="user">
          <div class="user__info" data-toggle="dropdown">
              <div>
                <div class="profile__img">
                    <img src="images/harley1.jpg" alt="">
                    <a href="" class="zmdi zmdi-camera profile__img__edit"></a>
                </div>
                  <div class="user__name"> {{ $users->name }} </div>
                  <div class="user__email"> {{ $users->email }}</div>

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

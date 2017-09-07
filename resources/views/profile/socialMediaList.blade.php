<ul class="icon-list">
      <!--<li><i class="zmdi zmdi-phone"></i> 308-360-8938</li>-->
      <li><i class="zmdi zmdi-email"></i> {{ $users->email }}</li>
      <li><i class="zmdi zmdi-twitter"></i><a href='twitter.com/@{{$users->twitter}}'>@ {{$users->twitter }}
      <li><i class="zmdi zmdi-facebook"></i> Personal: {{ $users->fb_personal}}</li>
      <li><i class="zmdi zmdi-facebook"></i> Cosplay: {{ $users->fb_cosplay}}</li>
      <li><i class="zmdi zmdi-facebook"></i> Photograper:  {{ $users->fb_photgrapher}}</li>
      <li><i class="zmdi zmdi-facebook"></i> Shop: {{ $users->fb_seller}}</li>
</ul>

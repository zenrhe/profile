@extends('layouts.app')
@section('content')
<!--Main Profile Page with various components-->
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
              @include('profile.socialMediaList');
          </div>
      </div>

      <div class="card">
          <div class="card-block">
              <h4 class="card-block__title mb-4">About {{ $users->name }} {{ $users->surname }} ( {{ $users->cosplay_name }} )</h4>
              {{ $users->about }}
              <br>
      </div>
      @include('events.attending');
      @include('events.attended');

    </div>
</section>
@endsection

@section('sidebar')
  @include('layouts.profileSideBar');
@endsection

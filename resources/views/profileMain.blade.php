@extends('layouts.app')
@section('content')
<!--Main Profile Page with various components-->

use Datetime;
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
              <p>Age:
                <?php
                $dob_date = date_create($users->dob);
                $todays_date = new \DateTime();
                $todays_date->createFromFormat('d/m/Y', '10/06/2015');
                $interval2 = $dob_date->diff($todays_date);
                echo $interval2->format('%y years');
                ?>
              </p>
              <p>Cosplaying Since: {{ date('M d, Y', strtotime($users->cosplay_since)) }}
              <?php

                $cosplay_date = date_create($users->cosplay_since);
                $todays_date = new \DateTime();
                $todays_date->createFromFormat('d/m/Y', '10/06/2015');
                echo "( ";
                $interval2 = $cosplay_date->diff($todays_date);
                echo $interval2->format('%y years %m months');
                echo " ) ";
              ?>
            </p>
              <p>{{ $users->mini_bio }}</p>
              @include('profile.socialMediaList')


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
</section>
@endsection

@section('sidebar')
  @include('layouts.profileSideBar');
@endsection

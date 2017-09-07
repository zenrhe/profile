<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Profiles</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="css/app.css">
        <style>
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
              <div class="container">
                  <div>
                      <h1>Profile</h1>
                        Name:  {{$user->name}} </br>
                        Email:  {{$user->email}}<br>

                </div>
            </div>
        </div>
      </div>
    </body>
</html>

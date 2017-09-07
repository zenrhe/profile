<!doctype html>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #669900;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                font-weight: 500;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .error
            {color:red;
                font-weight: 500}


</style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
             <h1> Hello Catherine</h1>

                Number of users : {{\App\User::count()}}</br>
                Name : {{\App\User::first()->name}}</br>

                <ul>
                @foreach(\App\User::all() as $user)
                    <li>{{ $user->name}}</li>
                @endforeach
                </ul>
                <hr>
                 <ul>
                @foreach(\App\User::all() as $user)
                    <li>{{ $user->name}}</li>
                    <li>{{ $user->email}}</li>
                @endforeach
                </ul>
                 <hr>
                 <table>
                 <th>Name</th>
                 <th>Email</th>
                @foreach(\App\User::all() as $user)
                <tr>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->email}}</td>
                </tr>
                @endforeach
               </table>

                {{ date('y')}}

                 @if (date('Y') == 17)
                    Its 2017;
                @endif

                Catherines Fave Color {{ $color }}

                <ul>
                    @foreach($pizzas as $pizza)
                        <li>{{ $pizza}}</li>

                    @endforeach
                </ul>

                <form action="/newpizza" method="POST">

                <div class="error">
                @if ($errors->any())
                    <ul>
                    @foreach ($errors->all() as $error)
                       <li class="error"> {{ $error }}</li>
                    @endforeach
                    </ul>
                @endif

                </div>
                {{csrf_field()}}
                    <input type="text" name="newpizza">

                    <input type="submit" name="submit">
                </form>

            </div>

        </div>
    </body>
</html>

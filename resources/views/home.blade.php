@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div>
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

                </div>

            </div>
        </div>
    </div>
</div>
@endsection

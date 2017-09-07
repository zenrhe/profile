<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/


Route::get('/', function () {
    return view('welcome');
});
// Route::get('/index', function () {
//     return view('index');
// });

Route::get('index','UserController@showProfile');

Route::get('about', function () {
    return view('about');
});
Route::get('/home','HomeController@index')->name('home');
// Route::get('/profile', function () {
// //  $user = \App\User::find(1);
//   return view('profiles')->with(compact(['user']));
// });

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');
Route::get('/profile', 'UserController@index');
Route::get('/profile/{user}', 'UserController@show');

Route::get('/profileAbout', 'UserController@show2');
Route::get('/profileAbout/{user}', 'UserController@index2');

//Route::get('/tasks', function () {
  //$userRow = \App\User::find(10);
  //return view('profile')->with(compact(['userRow']));

  //$tasks = DB::table('tasks')->get();

  //Laracast Way - Now in controller
  //$tasks = Task::all();
  //return view('tasks.index', compact('tasks'));
//});

// Route::get('/tasks/{task}', function ($id) {
//
//   //$task = DB::table('tasks')->find($id);
//   $task = Task::find($id);
//
//   return view('tasks.show', compact('task'));
// });


Route::get('/catherine', function () {

	$color = 'yellow';
	$pizzas = ['meat feast', 'chicken and sweetcorn', 'four cheese'];

    return view('catherine')->with(compact(['color','pizzas']));
});


Route::post('/newpizza', ['uses'=>'NewPizzaCont@store']) ;
Auth::routes();

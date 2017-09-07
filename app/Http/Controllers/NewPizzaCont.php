<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPizzaCont extends Controller
{
    //Store New Pizza
 
    public function store(Request $request)
    {
    	$request->validate(['newpizza'=>'min:3|alpha']);

    	return "New Pizza Topping: " .$request->input('newpizza');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use View;

class SandwichController extends Controller
{
    //Index method displays the webpage to the user
    public function index()
    {
       	return view('home',['attributes' => []]);
    }

    //This method validates user input and calculates the price for the sandwich the user ordered
    public function calculateprice(Request $request)
    {	
      	$inputs = $request->all();
      	//perform validation and throws an error when the user does not enter name or select any toppings
      	//no validation performed for meat as order can be placed without meat
        $rules = [
        	'first_name' => 'required',
        	'last_name' => 'required',
        	'toppings' => 'required|min:1' //rule to ensure user selects atleast one topping
            ];
        $messages = [
        	'required' => 'Please enter your first and last name',
            'toppings.*' => 'Oops! Looks like your sandwich is missing a topping :( Go ahead and choose atleast one'
            ];

        $validator = Validator::make($inputs,$rules,$messages);
        
        //return view with the error if validation fails   
       	if($validator->fails()) {
            return view('home',['attributes' => []])->withErrors($validator);
        }
       else{
	       	$tax = 0.09;
	       	$base_pay = 1.0;
	       	//initialise all sum variable to zero
	       	$final_sum = $tax_calc = $sum = $top_sum = $meat_sum = 0;
	       	$first_name = $inputs['first_name'];
	       	$last_name = $inputs['last_name'];
	       	$toppings=$inputs['toppings'];
	       	if(!empty($meat)){
	       		$meat= $inputs['meat'];
	       		foreach ($meat as $amt ) {
	       			$meat_sum = $meat_sum + $amt;
	       		}
	       	}
	       	foreach ($toppings as $amt ) {
	       		$top_sum = $top_sum + $amt;
	       	}
	       	$sum = $base_pay + $top_sum + $meat_sum;
	       	$tax_calc = $tax * $sum;
	       	$final_sum = $sum + $tax_calc;
	       	$attributes = [$first_name,$last_name,$meat_sum,$top_sum,$final_sum,$tax_calc];
       }
       //return view with values calculated in an array
       return view('home',['attributes' => $attributes]);
    }



}

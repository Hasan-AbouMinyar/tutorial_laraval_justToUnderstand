<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    //
//    function myBookings(Request $request) {
//     return "Name: " . $request->input('name');
// }

    function sayhasan($n) {
          return response()->json(['data'=>['name'=> $n]]);
     }

     function login(){
        return "<h1>Login Page</h1>";
     }
}

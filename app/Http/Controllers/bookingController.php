<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    //
   function myBookings(Request $request) {
    return $request->all();  
}

    function sayhasan() {
          return "Hello";
     }
}

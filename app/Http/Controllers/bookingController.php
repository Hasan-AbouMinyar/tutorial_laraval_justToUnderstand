<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    //
//    function myBookings(Request $request) {
//     return "Name: " . $request->input('name');
// }

    // function sayHello($moto) {
    //     return view('welcomePage')->with('nameMoto', $moto);
    // }
    function sayHello($moto) {

        if ($moto == "Hasan") {
            $isAuthenticated = true;
        }  else {
            $isAuthenticated = false;
        }
        
        if ($isAuthenticated) {
            return view('welcomePage')->with('nameMoto', $moto);
        } else {
            return redirect('/login');
        }
    }

     function sayWelcome($moto) {

        if ($moto == "Hasan") {
            $isAuthenticated = true;
        }  else {
            $isAuthenticated = false;
        }
        
        if ($isAuthenticated) {
            return view('welcomePage')->with('nameMoto', $moto);
        } else {
            return redirect('/login');
        }
    }
    
    private function isLogin($moto){

        $isAuthenticated = true;

          if ($moto == "Hasan") {
            $isAuthenticated = true;
        }  else {
            $isAuthenticated = false;
        }

    }
    
    // function sayhasan($n) {
    //       return response()->json(['data'=>['name'=> $n]]);
    //  }


//     function sayhasan($n) {
//           return "hi " . $n;
//      }


     function login(){
        return "<h1>Login Page</h1>";
     }

}

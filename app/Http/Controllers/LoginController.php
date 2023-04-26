<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;

class LoginController extends Controller {

public function checklogin(Request $request) {
    $email = $request->input('email');
    $password = $request->input('password');
   
    $login = DB::select('select * from login');
    foreach ($login as $login) 
    if($login->email == $email && $login->password == $password){
        session_start();
        $_SESSION['email'] = $email;
        return redirect('/view-records');
    } 
         else {
            echo "Wrong email or password.<br/>";
            echo '<a href = "/login">Click Here</a> to try again.';
        }
    }
}
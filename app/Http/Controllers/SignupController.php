<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SignupController extends Controller {
   public function logininsertform() {
      return view('login');
   }
	
   public function logininsert(Request $request) {
      $email = $request->input('email');
      $password = $request->input('password');
      $data = array("email" => $email,"password" => $password);
        DB::table('login')->insert($data);
     
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/login">Click Here</a> to Log in.';
   }
}

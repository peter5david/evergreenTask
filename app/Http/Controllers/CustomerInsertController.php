<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomerInsertController extends Controller {
   public function insertform() {
      return view('customer_create');
   }
	
   public function insert(Request $request) {
      $company = $request->input('company');
      $fname = $request->input('firstname');
      $lname = $request->input('lastname');
      $phone = $request->input('phone');
      $address = $request->input('address');
      $data = array("company" => $company,"firstname" => $fname,"lastname" => $lname,"phone" => $phone,"address" => $address);
        DB::table('customers')->insert($data);
     
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
   }
}

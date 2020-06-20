<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller 
{

    public function store(request $request){
     
      //  print_r($request ->input());
          $firstname =$request ->input('firstname');
          $lastname =$request ->input('lastname');
          $gender =$request ->input('gender');
          $username =$request ->input('username');
          $email =$request ->input('email');
          $city =$request ->input('city');
          $mobile =$request ->input('mobile');
          $department =$request ->input('department');
          $password =$request ->input('password');

         DB:: insert ('insert into signup 
        (ID, firstname,lastname,gender,username,email,city,mobile,department,password)values
         (?,?,?,?,?,?,?,?,?,?)',
        [null,$firstname,$lastname,$gender,$username,$email,$city,$mobile,$department,$password]);
    }
    
}
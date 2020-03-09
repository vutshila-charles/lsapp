<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class CredentialsController extends Controller
{

public function registerr(request $request)
{
    //echo "Registered";
   //print_r($request -> input());
   $username =$request-> input('username');
   $email =$request-> input('email');
   $password =$request-> input('password');
 DB::insert('insert into Users(Id,Username,Email,Password) values(?,?,?,?)',[null,$username,$email,$password]);
 echo  "Registered";
  

}

public function login(request $request)
{
    //echo "You have logged in";
    $username =$request-> input('username');
    $password =$request->input('password');
$data= DB:: select('select Email from Users where Username=? and Password=?',[$username,$password]);
if(count($data))
{
    echo '<script>window.location.href="DynamicWeb";</script>';
}
    else
    {
        echo "Incorrect details verify username or password";
    }
}

}


?>
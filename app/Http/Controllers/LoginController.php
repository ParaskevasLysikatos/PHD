<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LoginController extends BaseController
{


    public function login(Request $req)
    {
        request()->validate([
            'Username'=>'required',
            'Password'=>'required'
        ]);
        $username = $req->input('Username');
        $password = $req->input('Password');

        //check ACADEMICS
        $true_username = DB::table('academic_employees')->
        select('ACUsername')->where('ACUsername',$username)->value('ACUsername');

        $true_passwordH = DB::table('academic_employees')->
        select('ACPassword')->where('ACUsername',$username)->value('ACPassword');

        if(null!=$true_passwordH){
            $true_password=Hash::check($password,$true_passwordH);
        }

        $role = DB::table('academic_employees')->where('ACUsername',$username)->value('Role');


        // Student queries

        $Strue_username = DB::table('students')->
        select('SUsername')->where('SUsername',$username)->value('SUsername');

        $Strue_passwordH = DB::table('students')->
        select('SPassword')->where('SUsername',$username)->value('SPassword');
       // dd($Strue_passwordH);
        if(null!=$Strue_passwordH){
            $Strue_password=Hash::check($password,$Strue_passwordH);
        }

        //check passwords

        if($true_username===$username and $true_password and $role === "Admin")
        {

            $req->session()->put('Uname', $username);
            return redirect('Admin');

        }
        else if($true_username===$username and $true_password and $role === "Supervisor")
        {
            $req->session()->put('Uname', $username);
            return redirect('Supervisor');

        }

        else if($Strue_username===$username and $Strue_password) //check student
        {

            $req->session()->put('Uname', $username);
            return redirect('Student');
        }
        else
        {
            return redirect('Login')->withErrors("Login failed due to data given. "." Password passed:  ".$password."   and username passed:   ".$username);
        }
    }

    public function Logout(Request $req)
    {
        $username=session()->get('Uname');
        Session::flush();
        return redirect('Login')->with("User ".$username." have been logged out");
    }
}

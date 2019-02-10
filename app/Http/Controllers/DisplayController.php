<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AcademicEmployee;
use App\Student;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;

class DisplayController extends BaseController
{




    public function displayEmp(Request $request)
    {
        $SUname = $request->session()->get('Uname');
        $displayFullname=DB::table('academic_employees')->select('ACFullname')->where('ACUsername',$SUname)->first();
        $display = DB::table('academic_employees')->select('*')->orderBy('Role')->get();
        $displayStud = DB::select('select * from students');
        return view('Admin', ['display' => $display, 'displayStud' => $displayStud, 'displayFullname' => $displayFullname]);

    }

    public function displayStud(Request $request)
    {
        $SUname = $request->session()->get('Uname');
        $displayStud = DB::table('students')->where('SUsername',$SUname)->get();
        $displayStud1 = DB::table('students')->where('SUsername',$SUname)->first();
        $fname=$displayStud1->SFullname;
        $displayCon = DB::table('connections')->where('SFullname',$fname)->get();
        return view('Student', ['displayStud' => $displayStud,'displayCon'=>$displayCon]);
    }

    public function displaySuperv(Request $request)
    {


        $ACUname = $request->session()->get('Uname');
        $displaySuperv = DB::table('academic_employees')->where('ACUsername',$ACUname)->get();
        $displaySuperv1 = DB::table('academic_employees')->where('ACUsername',$ACUname)->first();
        $fname=$displaySuperv1->ACFullname;
        $displayCon = DB::table('connections')->where('ACFullname',$fname)->get();
        return view('Supervisor', ['displaySuperv' => $displaySuperv,'displayCon'=>$displayCon]);


    }


    public function displayDirector(Request $request)
    {
        $ACUname = $request->session()->get('Uname');
        $displayDir = DB::table('academic_employees')->where('ACUsername',$ACUname)->get();
        return view('Director', ['displayDir' => $displayDir]);
    }

    public function displayConnections()
    {
        $displayAcad = DB::table('academic_employees')->select('ACFullname')->where('Role','=','Supervisor')->get();
        $displayStudent = DB::table('students')->select('SFullname')->get();
        $displayCon = DB::table('connections')->select('ACFullname','SFullname')->get();
        return view('Assign', ['displayAcad' => $displayAcad,'displayStudent' => $displayStudent,'displayCon'=>$displayCon]);

    }

    public function displaySelectStud()
    {
        $displayStudent = DB::table('students')->select('SFullname')->get();
        return view('StudentSelect', ['displayStudent' => $displayStudent]);
    }

    public function displaySelectAcad()
    {
        $displayAcad = DB::table('academic_employees')->select('ACFullname')->get();
        return view('AccEmpSelect', ['displayAcad' => $displayAcad]);
    }

    public function displayProfileSupervisor(Request  $request){
        $ACUname = $request->session()->get('Uname');
        $displayProfSup = DB::table('academic_employees')->where('ACUsername',$ACUname)->get();
        return view('MyProfileSupervisor', ['displayProfSup' => $displayProfSup]);
    }

    public function displayProfileStudent(Request $request)
    {
        $SUname = $request->session()->get('Uname');
        $displayProfStud = DB::table('students')->where('SUsername',$SUname)->get();
        return view('MyProfileStudent', ['displayProfStud' => $displayProfStud]);
    }
}

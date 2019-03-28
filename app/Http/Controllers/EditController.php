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
use Illuminate\Support\Facades\Hash;
class EditController extends BaseController
{
    public function displayEditStud(Request $request)
    {
        $SFname = $request->input('SFullname');
        session(['SFedit' =>  $SFname]);
        $displayStud = DB::table('students')->where('SFullname',$SFname)->get();
        $deps = DB::table('departments')->select('depName')->get();
        $super=DB::table('academic_employees')->select('ACFullname')->where('Role','=','Supervisor')->get();
        $check1=DB::table('connections')->select('ACFullname')->where('SFullname','=',$SFname)->get()->count();
        $check2=DB::table('connections')->select('ACFullname')->where('SFullname','=',$SFname)->get()->count();
        if($check1>0)
        {$super1=DB::table('connections')->select('ACFullname')->where('SFullname','=',$SFname)->orderBy('ACFullname', 'desc')->first();
        $super1=$super1->ACFullname;}
        else {$super1=null;}
        if($check2>1)
        {$super2=DB::table('connections')->select('ACFullname')->where('SFullname','=',$SFname)->orderBy('ACFullname', 'asc')->first();
        $super2=$super2->ACFullname;}
        else {$super2=null;}
        return view('StudentEdit', ['displayStud' => $displayStud,'deps'=>$deps,'super'=>$super,'super1'=>$super1,'super2'=>$super2]);
    }

    public function displayAlu(Request $request)
    {
        $SFname = $request->input('SFullname');
        session(['SFedit' =>  $SFname]);
        $displayAlu = DB::table('alumnis')->where('SFullname',$SFname)->get();
        $deps = DB::table('departments')->select('depName')->get();
        return view('Alumni', ['displayAlu' => $displayAlu,'deps'=>$deps]);
    }

    public function AddDep(Request $request)
    {
        request()->validate([
            'dep'=>'required|unique:departments,depName',

        ]);
        $addD = $request->input('dep');
        DB::table('departments')->insert(['depName'=>$addD]);
        return redirect('ManageDep')->with('success', 'add done successfully');
    }

    public function displayEditAcad(Request $request)
    {
        $ACFname = $request->input('ACFullname');
        session(['ACFedit' =>  $ACFname]);
        $displayEditAc = DB::table('academic_employees')->where('ACFullname',$ACFname)->get();
        $deps=DB::table('departments')->select('*')->get();
        return view('AccEmpEdit', ['displayEditAc' => $displayEditAc,'deps'=>$deps]);

    }

    public function EditStudent(Request $req)
    {
        request()->validate([
            'SFullname'=>'required',
            'SUsername'=>'required',
            'Supervisor2'=>'different:Supervisor1',
        ]);
        $SFedit = $req->session()->get('SFedit');
        $Sup1 = $req->input('Supervisor1');
        $Sup2 = $req->input('Supervisor2');
        $del=DB::table('connections')->where('SFullname',$SFedit)->delete();

        if($Sup1!='')
        {$super1=DB::table('connections')->insert(['ACFullname' => $req->input('Supervisor1'),'SFullname'=>$SFedit]);}

        if($Sup2!='')
        {$super2=DB::table('connections')->insert(['ACFullname' => $req->input('Supervisor2'),'SFullname'=>$SFedit]);}

        $displayStud = DB::table('students')->where('SFullname',$SFedit)
            ->update(['SUsername' => $req->input('SUsername'),'SFullname' => $req->input('SFullname'),'SPassword' =>bcrypt($req->input('SPassword')),
                'RN' =>$req->input('RN'),'SEmail' =>$req->input('SEmail'),'SDepartment' =>$req->input('SDepartment'),
                    'SPhone' =>$req->input('SPhone'),'STopic' =>$req->input('STopic'),'SDepartmentalSec' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'SGender' =>$req->input('SGender'),'SDateOfBirth' =>$req->input('SDateOfBirth'),
                'SModeOfAttend' =>$req->input('SModeOfAttend'),'SFirstEntry' =>$req->input('SFirstEntry'),'SYearOfGraduation' =>$req->input('SYearOfGraduation'),
                'SUpgradeStatus' =>$req->input('SUpgradeStatus'),'SPayment' =>$req->input('SPayment'),'SCurrentEmployment'=>$req->input('SCurrentEmployment'),'SubmissionDate'=>$req->input('SubmissionDate')] );
            return redirect('StudentSelect');
    }


    public function EditAlumnus(Request $req)
    {
        request()->validate([
            'SFullname'=>'required|unique:alumnis,SFullname',
            'SUsername'=>'required|unique:alumnis,SUsername',
        ]);
        $SFedit = $req->session()->get('SFedit');
        $displayStud = DB::table('alumnis')->where('SFullname',$SFedit)
            ->update(['SUsername' => $req->input('SUsername'),'SFullname' => $req->input('SFullname'),'SPassword' =>bcrypt($req->input('SPassword')),
                'RN' =>$req->input('RN'),'SEmail' =>$req->input('SEmail'),'SDepartment' =>$req->input('SDepartment'),
                'SPhone' =>$req->input('SPhone'),'STopic' =>$req->input('STopic'),'SDepartmentalSec' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'SGender' =>$req->input('SGender'),'SDateOfBirth' =>$req->input('SDateOfBirth'),
                'SModeOfAttend' =>$req->input('SModeOfAttend'),'SFirstEntry' =>$req->input('SFirstEntry'),'SYearOfGraduation' =>$req->input('SYearOfGraduation'),
                'SUpgradeStatus' =>$req->input('SUpgradeStatus'),'SPayment' =>$req->input('SPayment'),'SCurrentEmployment'=>$req->input('SCurrentEmployment'),'SubmissionDate'=>$req->input('SubmissionDate')] );
        return redirect('AlumniSelect');
    }

    public function EditAcademic(Request $req)
    {
        request()->validate([
            'SFullname'=>'required|unique:academic_employees,ACFullname',
            'SUsername'=>'required|unique:academic_employees,ACUsername',
        ]);
        $ACFedit = $req->session()->get('ACFedit');
        $displayAcad = DB::table('academic_employees')->where('ACFullname',$ACFedit)
            ->update(['ACUsername' => $req->input('ACUsername'),'ACFullname' => $req->input('ACFullname'),'ACPassword' =>bcrypt($req->input('ACPassword')),
                'ACEmail' =>$req->input('ACEmail'),'ACDepartment' =>$req->input('ACDepartment'),
                'ACPhone' =>$req->input('ACPhone'),'ACCountry' =>$req->input('ACCountry'),'Title' =>$req->input('ACTitle'),'Role' =>$req->input('Role'),]);
        return redirect('AccEmpSelect');
    }

    public function EditProfileSupervisor(Request $req){
        $ACUname = $req->session()->get('Uname');
        $displayAcad = DB::table('academic_employees')->where('ACUsername',$ACUname)
            ->update(['ACPassword' =>bcrypt($req->input('ACPassword')), 'ACEmail' =>$req->input('ACEmail'),
                'ACPhone' =>$req->input('ACPhone'),'ACCountry' =>$req->input('ACCountry'),'Title' =>$req->input('ACTitle')]);
        return redirect('Supervisor');
    }

    public function EditProfileStudent(Request $req){
        $SUname = $req->session()->get('Uname');
        $displayStud = DB::table('students')->where('SUsername',$SUname)
            ->update(['SPassword' =>bcrypt($req->input('SPassword')),
                'SEmail' =>$req->input('SEmail'),
                'SPhone' =>$req->input('SPhone'),'SDepartmentalSec' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'SDateOfBirth' =>$req->input('SDateOfBirth'),
                'SModeOfAttend' =>$req->input('SModeOfAttend')]);
        return redirect('Student');
    }

    public function DisplayEditAlu(Request $req){
        $SFname = $req->session()->get('SFedit');
        $displayEditAlu = DB::table('alumnis')->where('SFullname',$SFname)->get();
        $deps=DB::table('departments')->select('*')->get();
        return view('AlumnusEdit', ['displayEditAlu' => $displayEditAlu,'deps'=>$deps]);
    }

}

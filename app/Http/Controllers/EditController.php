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
        return view('StudentEdit', ['displayStud' => $displayStud]);
    }

    public function displayAlu(Request $request)
    {
        $SFname = $request->input('SFullname');
        session(['SFedit' =>  $SFname]);
        $displayAlu = DB::table('alumnis')->where('SFullname',$SFname)->get();
        return view('Alumni', ['displayAlu' => $displayAlu]);
    }

    public function displayEditAcad(Request $request)
    {
        $ACFname = $request->input('ACFullname');
        session(['ACFedit' =>  $ACFname]);
        $displayEditAc = DB::table('academic_employees')->where('ACFullname',$ACFname)->get();
        return view('AccEmpEdit', ['displayEditAc' => $displayEditAc]);

    }

    public function EditStudent(Request $req)
    {
        $SFedit = $req->session()->get('SFedit');
        $displayStud = DB::table('students')->where('SFullname',$SFedit)
            ->update(['SUsername' => $req->input('SUsername'),'SFullname' => $req->input('SFullname'),'SPassword' =>bcrypt($req->input('SPassword')),
                'RN' =>$req->input('RN'),'SEmail' =>$req->input('SEmail'),'SDepartment' =>$req->input('SDepartment'),
                    'SPhone' =>$req->input('SPhone'),'STopic' =>$req->input('STopic'),'SDepartmentalSec' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'SGender' =>$req->input('SGender'),'SDateOfBirth' =>$req->input('SDateOfBirth'),
                'SModeOfAttend' =>$req->input('SModeOfAttend'),'SFirstEntry' =>$req->input('SFirstEntry'),'SYearOfGraduation' =>$req->input('SYearOfGraduation'),
                'SUpgradeStatus' =>$req->input('SUpgradeStatus'),'SPayment' =>$req->input('SPayment'),'SCurrentEmployment'=>$req->input('SCurrentEmployment'),'SubmissionDate'=>$req->input('SubmissionDate')] );
            return redirect('Admin');
    }

    public function EditAcademic(Request $req)
    {
        $ACFedit = $req->session()->get('ACFedit');
        $displayAcad = DB::table('academic_employees')->where('ACFullname',$ACFedit)
            ->update(['ACUsername' => $req->input('ACUsername'),'ACFullname' => $req->input('ACFullname'),'ACPassword' =>bcrypt($req->input('ACPassword')),
                'ACEmail' =>$req->input('ACEmail'),'ACDepartment' =>$req->input('ACDepartment'),
                'ACPhone' =>$req->input('ACPhone'),'ACCountry' =>$req->input('ACCountry'),'Title' =>$req->input('ACTitle'),'Role' =>$req->input('Role'),]);
        return redirect('Admin');
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

}

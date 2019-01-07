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
                'RN' =>$req->input('SRnumber'),'SEmail' =>$req->input('SEmail'),'SDepartment' =>$req->input('SDepartment'),
                    'SPhone' =>$req->input('SPhone'),'Topic' =>$req->input('STopic'),'Departmental_Secretary' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'Gender' =>$req->input('SGender'),'Date_Of_Birth' =>$req->input('SDoB'),
                'Mode_of_Attend' =>$req->input('SMoA'),'FirstEntry' =>$req->input('SFirstEntry'),'Year_of_Graduation' =>$req->input('SYearofGraduation'),
                'Ugraduate_Status' =>$req->input('SUgraduateStatus'),'Payment' =>$req->input('SFWP')] );
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
                'SPhone' =>$req->input('SPhone'),'Departmental_Secretary' =>$req->input('SDepartmentalSec'),
                'SCountry' =>$req->input('SCountry'),'Date_Of_Birth' =>$req->input('SDoB'),
                'Mode_of_Attend' =>$req->input('SMoA')]);
        return redirect('Student');
    }

}

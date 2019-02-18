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
class DeleteController extends BaseController
{
    public function DeleteStudent(Request $req)
    {
        $SFedit = $req->session()->get('SFedit');
        $displayStud = DB::table('students')->where('SFullname',$SFedit)->delete();
        $displayStudCon = DB::table('connections')->where('SFullname',$SFedit)->delete();
            return redirect('Admin');
    }
    public function AlumniBecome(Request $req)
    {
        $SFedit = $req->session()->get('SFedit');
        $var = DB::table('students')->where('SFullname',$SFedit)->first();

        $SFullname = $var->SFullname;
        $SUsername = $var->SUsername;
        $RN = $var->RN;
        $SEmail = $var->SEmail;
        $SDepartment = $var->SDepartment;
        $SPhone = $var->SPhone;
        $SDepartmentalSec = $var->SDepartmentalSec;
        $SCountry = $var->SCountry;
        $STopic = $var->STopic;
        $SGender = $var->SGender;
        $SDateOfBirth = $var->SDateOfBirth;
        $SModeOfAttend = $var->SModeOfAttend;
        $SFirstEntry = $var->SFirstEntry;
        $SPayment = $var->SPayment;
        $SYearOfGraduation=$var->SYearOfGraduation;
        $SUpgradeStatus= $var->SUpgradeStatus;
        $SCurrentEmployment = $var->SCurrentEmployment;
        $SubmissionDate= $var->SubmissionDate;

        DB::table('alumnis')->insert([
            'SFullname' => $SFullname,
            'RN' => $RN,
            'SUsername'=> $SUsername,
            'SEmail'=> $SEmail,
            'SDepartment'=> $SDepartment,
            'SPhone'=> $SPhone,
            'STopic'=> $STopic,
            'SDepartmentalSec'=> $SDepartmentalSec,
            'SCountry'=> $SCountry,
            'SGender'=> $SGender,
            'SDateOfBirth'=> $SDateOfBirth,
            'SModeOfAttend'=> $SModeOfAttend,
            'SFirstEntry'=> $SFirstEntry,
            'SYearOfGraduation'=> $SYearOfGraduation,
            'SUpgradeStatus'=> $SUpgradeStatus,
            'SPayment'=> $SPayment,
            'SCurrentEmployment'=>$SCurrentEmployment,
            'SubmissionDate'=>$SubmissionDate,
        ]);

         DB::table('students')->where('SFullname',$SFedit)->delete();
         DB::table('connections')->where('SFullname',$SFedit)->delete();
        return redirect('Admin');
    }


    public function DeleteAcademic(Request $req)
    {
        $ACFedit = $req->session()->get('ACFedit');
        $displayAcad = DB::table('academic_employees')->where('ACFullname',$ACFedit)->delete();
        $displayAcadCon = DB::table('connections')->where('ACFullname',$ACFedit)->delete();
        return redirect('Admin');
    }

    public function DeleteConnection(Request $req){
        $ACFullname = $req->ACF;
        $SFullname= $req->SF;
        $display = DB::table('connections')->where('ACFullname',$ACFullname)->where('SFullname',$SFullname)->exists();
        if($display) {
            $display2=DB::table('connections')->where('ACFullname',$ACFullname)->where('SFullname',$SFullname)->delete();
            return ("success");
            }
        else return view("Assign")->withErrors("not found, check again");
    }
}

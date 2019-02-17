<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\AcademicEmployee;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use  Carbon\Carbon;
class RegisterController extends BaseController
{

    public function store(Request $request)
    {

        request()->validate([
            'ACFullname'=>'required|unique:academic_employees,ACFullname',
            'ACUsername'=>'required|unique:academic_employees,ACUsername',
            'ACEmail'=>'required',
            'ACPassword'=>'required',
        ]);

        $ACFullname = $request->input('ACFullname');
        $ACUsername = $request->input('ACUsername');
        $ACEmail = $request->input('ACEmail');
        $ACPassword = $request->input('ACPassword');
        $ACPhone = $request->input('ACPhone');
        $ACDepartment = $request->input('ACDepartment');
        $ACCountry = $request->input('ACCountry');
        $Role = $request->input('Role');
        $ACTitle = $request->input('ACTitle');

        DB::table('academic_employees')->insert([
            'ACFullname' => $ACFullname,
            'ACUsername'=> $ACUsername,
            'ACEmail'=> $ACEmail,
            'ACPassword' => bcrypt($ACPassword),
            'ACPhone' => $ACPhone,
            'ACDepartment' => $ACDepartment,
            'ACCountry' => $ACCountry,
            'Role'=> $Role,
            'Title'=> $ACTitle,
        ]);
               return redirect('Admin');
    }


    public function storeStud(Request $request)
    {
        request()->validate([
            'SFullname'=>'required|unique:students,SFullname',
            'SUsername'=>'required|unique:students,SUsername',
            'RN'=>'required',
            'SPassword'=>'required',
            'SEmail'=>'required',
            'SDepartment'=>'required',

        ]);

        $SFullname = $request->input('SFullname');
        $SUsername = $request->input('SUsername');
        $RN = $request->input('RN');
        $SPassword = $request->input('SPassword');
        $SEmail = $request->input('SEmail');
        $SDepartment = $request->input('SDepartment');
        $SPhone = $request->input('SPhone');
        $SDepartmentalSec = $request->input('SDepartmentalSec');
        $SCountry = $request->input('SCountry');
        $STopic = $request->input('STopic');
        $SGender = $request->input('SGender');
        $SDateOfBirth = $request->input('SDateOfBirth');
        $SModeOfAttend = $request->input('SModeOfAttend');
        $SFirstEntry = $request->input('SFirstEntry');
        $SPayment = $request->input('SPayment');
       $SYearOfGraduation=$request->input( 'SYearOfGraduation');
        $SUpgradeStatus= $request->input('SUpgradeStatus');
        $SCurrentEmployment = $request->input ('SCurrentEmployment');
        $SubmissionDate= $request->input('SubmissionDate');

        if($SModeOfAttend!=null&&$SFirstEntry!=null&&$SYearOfGraduation==null)
        {
                if($SModeOfAttend=="Full-time")
             {
              $SYearOfGraduation=new Carbon($SFirstEntry);
              $SYearOfGraduation=$SYearOfGraduation->addYears(1);
             }
            if($SModeOfAttend=="Part-time")
            {
                $SYearOfGraduation=new Carbon($SFirstEntry);
                $SYearOfGraduation=$SYearOfGraduation->addYears(2);
            }
        }

        DB::table('students')->insert([
            'SFullname' => $SFullname,
            'RN' => $RN,
            'SUsername'=> $SUsername,
            'SPassword' => bcrypt($SPassword),
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
        return redirect('Admin');
    }


}

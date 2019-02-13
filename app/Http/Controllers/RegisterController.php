<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\AcademicEmployee;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
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
            'SRnumber'=>'required',
            'SPassword'=>'required',
            'SEmail'=>'required',
            'SDepartment'=>'required',

        ]);

        $SFullname = $request->input('SFullname');
        $SUsername = $request->input('SUsername');
        $SRnumber = $request->input('SRnumber');
        $SPassword = $request->input('SPassword');
        $SEmail = $request->input('SEmail');
        $SDepartment = $request->input('SDepartment');
        $SPhone = $request->input('SPhone');
        $SDepartmentalSec = $request->input('SDepartmentalSec');
        $SCountry = $request->input('SCountry');
        $STopic = $request->input('STopic');
        $SGender = $request->input('SGender');
        $SDoB = $request->input('SDoB');
        $SMoA = $request->input('SMoA');
        $SFirstEntry = $request->input('SFirstEntry');
        $SFWP = $request->input('SFWP');
       $SYearofGraduation=$request->input( 'SYear_of_Graduation');
        $SUgraduateStatus= $request->input('SUgraduate_Status');

        DB::table('students')->insert([
            'SFullname' => $SFullname,
            'RN' => $SRnumber,
            'SUsername'=> $SUsername,
            'SPassword' => bcrypt($SPassword),
            'SEmail'=> $SEmail,
            'SDepartment'=> $SDepartment,
            'SPhone'=> $SPhone,
            'Topic'=> $STopic,
            'Departmental_Secretary'=> $SDepartmentalSec,
            'SCountry'=> $SCountry,
            'Gender'=> $SGender,
            'Date_Of_Birth'=> $SDoB,
            'Mode_of_Attend'=> $SMoA,
            'FirstEntry'=> $SFirstEntry,
            'Year_of_Graduation'=> $SYearofGraduation,
            'Ugraduate_Status'=> $SUgraduateStatus,
            'Payment'=> $SFWP
        ]);
        return redirect('Admin');
    }


}

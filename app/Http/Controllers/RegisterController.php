<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\AcademicEmployee;
use App\Student;
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
            'ACPhone'=>'required',
            'ACDepartment'=>'required',
            'ACCountry'=>'required',
            'Role'=>'required',
            'ACTitle'=>'required'
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

       $accEmpSign = new AcademicEmployee([
            'ACFullname' => $request->input('ACFullname'),
            'ACUsername'=> $request->input('ACUsername'),
            'ACEmail'=> $request->input('ACEmail'),
            'ACPassword' => bcrypt($request->input('ACPassword')),
            'ACPhone' => $request->input('ACPhone'),
            'ACDepartment' => $request->input('ACDepartment'),
            'ACCountry' => $request->input('ACCountry'),
            'Role'=> $request->input('Role'),
            'Title'=> $request->input('ACTitle'),
            'created_at'=> $request->input('created_at'),
            'updated_at'=> $request->input('updated_at')
        ]);
              $accEmpSign->save();
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
            'SPhone'=>'required',
            'SDepartmentalSec'=>'required',
            'SCountry'=>'required',
            'SGender'=>'required',
            'SDoB'=>'required',
            'SMoA'=>'required',
            'SFirstEntry'=>'required',
            'SFWP'=>'required'
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
        $SGender = $request->input('SGender');
        $SDoB = $request->input('SDoB');
        $SMoA = $request->input('SMoA');
        $SFirstEntry = $request->input('SFirstEntry');
        $SFWP = $request->input('SFWP');

        $StudentSign = new Student([
            'SFullname' => $request->input('SFullname'),
            'RN' => $request->input('SRnumber'),
            'SUsername'=> $request->input('SUsername'),
            'SPassword' => bcrypt($request->input('SPassword')),
            'SEmail'=> $request->input('SEmail'),
            'SDepartment'=> $request->input('SDepartment'),
            'SPhone'=> $request->input('SPhone'),
            'Topic'=> $request->input('STopic'),
            'Departmental_Secretary'=> $request->input('SDepartmentalSec'),
            'SCountry'=> $request->input('SCountry'),
            'Gender'=> $request->input('SGender'),
            'Date_Of_Birth'=> $request->input('SDoB'),
            'Mode_of_Attend'=> $request->input('SMoA'),
            'FirstEntry'=> $request->input('SFirstEntry'),
            'Year_of_Graduation'=> $request->input('SYearofGraduation'),
            'Ugraduate_Status'=> $request->input('SUgraduateStatus'),
            'Payment'=> $request->input('SFWP'),
            'created_at'=> $request->input('created_at'),
            'updated_at'=> $request->input('updated_at')
        ]);
        $StudentSign->save();
        return redirect('Admin');
    }


}

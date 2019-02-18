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
use  Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class DisplayController extends BaseController
{




    public function displayEmp(Request $request)
    {
        $SUname = $request->session()->get('Uname');
        $displayFullname=DB::table('academic_employees')->select('ACFullname')->where('ACUsername',$SUname)->first();
        $display = DB::table('academic_employees')->select('*')->orderBy('Role')->get();
        $displayStud = DB::table('students')->select('*')->get();
        $displayAlu=DB::table('alumnis')->select('*')->get();
        return view('Admin', ['display' => $display, 'displayStud' => $displayStud, 'displayFullname' => $displayFullname,'displayAlu'=>$displayAlu]);
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

    public function displaySelectAlu()
    {
        $displayAlu = DB::table('alumnis')->select('SFullname')->get();
        return view('AlumniSelect', ['displayAlu' => $displayAlu]);
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

    public function displayStudRecord(Request $request)
    {
        $SFname = session('SFedit');
        $displayRec=DB::table('studRecords')->where('SFullname','=',$SFname)->get();
        return view('StudentRecords',['SFname' => $SFname,'displayRec'=>$displayRec]);
    }

    public function SaveStudRecord(Request $request)
    {
        $SFname = session('SFedit');
        request()->validate([
            'recordStudfile' => 'required|file|unique:studRecords,record_name'
        ]);
        if($request->hasFile('recordStudfile')) {
            //Get filename with the extension
            $filenamewithExt = $request->file('recordStudfile')->getClientOriginalName();

            //Get just filename
            $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);

            //Get just ext
            $extension = $request->file('recordStudfile')->guessClientExtension();

            $mytime = Carbon::now();
            $y=$mytime->year;
            $m=$mytime->month;
            $d=$mytime->day;
            //FileName to store
            $fileNameToStore = $filename.'-'.$y.'-'.$m.'-'.$d.'-'.$SFname.'.' . $extension;

            $path = $request->file('recordStudfile')->storeAs('public/records', $fileNameToStore);
            DB::table('studRecords')->insert(['SFullname'=>$SFname,'record_name'=>$fileNameToStore]);

        }
        else{
            return redirect('StudentRecords')->withErrors("Upload failed");
        }


        return redirect('StudentRecords')->with('success', 'upload done successfully');
    }

    public function DownStudRecord(Request $request)
    {
        $selected = $request->input('recordStudfileD');
        if(is_file((storage_path('app/public/records/' . $selected)))) {
            return response()->download(storage_path('app/public/records/' . $selected));
        }
        else return redirect('StudentRecords')->withErrors("download failed");
    }

    public function DelStudRecord(Request $request)
    {
        $SFname = session('SFedit');
        $selected = $request->Rec;
        $check = DB::table('studRecords')->where('SFullname','=',$SFname)->where('record_name','=',$selected)->exists();
        $check2=is_file((storage_path('app/public/records/' . $selected)));
        if($check&&$check2) {
            DB::table('studRecords')->where('SFullname','=',$SFname)->where('record_name','=',$selected)->delete();
            Storage::delete('public/records/'.$selected);
            return ("success");
        }
        else return redirect('StudentRecords')->withErrors("not found, check again");

    }

}

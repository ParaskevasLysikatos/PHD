<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Http\Requests;
use phpDocumentor\Reflection\Types\String_;
use Session;
use  Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as BaseController;
use PDF;
class SearchController extends BaseController

{

    public function SearchStudent(Request $request)
    {
            $SFullname = $request->input('SFullname');
             session(['stuF' => $SFullname]);
            $SUsername= $request->input('SUsername');
            session(['stuU' => $SUsername]);
            $SEmail = $request->input('SEmail');
            session(['stuE' => $SEmail]);
            $SDepartment = $request->input('SDepartment');
            session(['stuD' => $SDepartment]);
            $SPhone= $request->input('SPhone');
            session(['stuP' => $SPhone]);
            $SCountry = $request->input('SCountry');
            session(['stuC' => $SCountry]);
            $query = DB::table( 'students' );

        if($SUsername!=''){
            $query->where("SUsername",'like',"%$SUsername%");
        }

        if($SFullname!=''){
            $query->where("SFullname",'like',"%$SFullname%");
        }

        if($SEmail!=''){
            $query->where("SEmail",'like',"%$SEmail%");
        }

       if($SDepartment!=''){
            $query->where("SDepartment",'like',"%$SDepartment%");
        }

        if($SPhone!=''){
            $query->where("SPhone",'like',"%$SPhone%");
        }

        if($SCountry!=''){
            $query->where("SCountry",'like',"%$SCountry%");
        }

        $dataStud = $query->get();
        $deps = DB::table('departments')->select('depName')->get();

        return view('PrintSearchStudent', ['dataStud' => $dataStud,'deps'=>$deps]);
    }

    public function SearchAlumnus(Request $request)
    {
        $SFullname = $request->input('SFullname');
        session(['LF' => $SFullname]);
        $SUsername= $request->input('SUsername');
        session(['LU' => $SUsername]);
        $SEmail = $request->input('SEmail');
        session(['LE' => $SEmail]);
        $SDepartment = $request->input('SDepartment');
        session(['LD' => $SDepartment]);
        $SPhone= $request->input('SPhone');
        session(['LP' => $SPhone]);
        $SCountry = $request->input('SCountry');
        session(['LC' => $SCountry]);
        $query = DB::table( 'alumnis' );

        if($SUsername!=''){
            $query->where("SUsername",'like',"%$SUsername%");
        }

        if($SFullname!=''){
            $query->where("SFullname",'like',"%$SFullname%");
        }

        if($SEmail!=''){
            $query->where("SEmail",'like',"%$SEmail%");
        }

        if($SDepartment!=''){
            $query->where("SDepartment",'like',"%$SDepartment%");
        }

        if($SPhone!=''){
            $query->where("SPhone",'like',"%$SPhone%");
        }

        if($SCountry!=''){
            $query->where("SCountry",'like',"%$SCountry%");
        }

        $dataAlu = $query->get();
        $deps = DB::table('departments')->select('depName')->get();

        return view('PrintSearchAlumnus', ['dataAlu' => $dataAlu,'deps'=>$deps]);
    }


    public function SearchAcademic(Request $request)
    {
        $ACFullname = $request->input('ACFullname');
        session(['acaF' => $ACFullname]);
        $ACUsername= $request->input('ACUsername');
        session(['acaU' => $ACUsername]);
        $ACEmail = $request->input('ACEmail');
        session(['acaE' =>  $ACEmail]);
        $ACDepartment = $request->input('ACDepartment');
        session(['acaD' => $ACDepartment]);
        $ACPhone= $request->input('ACPhone');
        session(['acaP' => $ACPhone]);
        $ACCountry = $request->input('ACCountry');
        session(['acaC' => $ACCountry]);
        $Role = $request->input('Role');
        session(['acaR' => $Role]);
        $query2 = DB::table( 'academic_employees' );

        if($ACUsername!=''){
            $query2->where("ACUsername",'like',"%$ACUsername%");
        }

        if($ACFullname!=''){
            $query2->where("ACFullname",'like',"%$ACFullname%");
        }

        if($ACEmail!=''){
            $query2->where("ACEmail",'like',"%$ACEmail%");
        }

         if($ACDepartment!=''){
            $query2->where("ACDepartment",'like',"%$ACDepartment%");
        }

       if($ACPhone!=''){
            $query2->where("ACPhone",'like',"%$ACPhone%");
        }

        if($ACCountry!=''){
            $query2->where("ACCountry",'like',"%$ACCountry%");
        }

        if($Role!=''){
            $query2->where("Role",'like',"%$Role%");
        }

          $dataAcad= $query2->get();
        $deps = DB::table('departments')->select('depName')->get();
        return view('PrintSearchAcademic', ['dataAcad' => $dataAcad,'deps'=>$deps]);
    }

    public function SearchRelation(Request $request)
    {
        $ACFullname = $request->input('ACFullname');
        session(['RaF' => $ACFullname]);
        $SFullname= $request->input('SFullname');
        session(['RsF' => $SFullname]);
        $query2 = DB::table( 'connections' );

        if($ACFullname!=''){
            $query2->where("ACFullname",'like',"%$ACFullname%");
        }

        if($SFullname!=''){
            $query2->where("SFullname",'like',"%$SFullname%");
        }
        $dataRel= $query2->get();
        $deps = DB::table('departments')->select('depName')->get();
        return view('PrintSearchRelation', ['dataRel' => $dataRel,'deps'=>$deps]);
    }

    public function pdfA()
    {
        $query2 = DB::table( 'academic_employees' );
        $ACUsername=Session::get('acaU');
        $ACFullname=Session::get('acaF');
        $ACEmail=Session::get('acaE');
        $ACDepartment=Session::get('acaD');
        $ACPhone=Session::get('acaP');
        $ACCountry=Session::get('acaC');
        $Role=Session::get('acaR');
        if($ACUsername!=''){
            $query2->where("ACUsername",'like',"%$ACUsername%");
        }

        if($ACFullname!=''){
            $query2->where("ACFullname",'like',"%$ACFullname%");
        }

        if($ACEmail!=''){
            $query2->where("ACEmail",'like',"%$ACEmail%");
        }

        if($ACDepartment!=''){
            $query2->where("ACDepartment",'like',"%$ACDepartment%");
        }

        if($ACPhone!=''){
            $query2->where("ACPhone",'like',"%$ACPhone%");
        }

        if($ACCountry!=''){
            $query2->where("ACCountry",'like',"%$ACCountry%");
        }

        if($Role!=''){
            $query2->where("Role",'like',"%$Role%");
        }

        $dataA= $query2->get();
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $pdf =  PDF::loadView('/pdfacademic',['dataA'=>$dataA]);
        return $pdf->download('AcademicSearchPDF'.$mytime.'.pdf');
    }

    public function pdfS()
    {
        $SFullname =Session::get('stuF');
        $SUsername=Session::get('stuU');
        $SEmail =Session::get('stuE');
        $SDepartment =Session::get('stuD');
        $SPhone=Session::get('stuP');
        $SCountry =Session::get('stuC');
        $query = DB::table( 'students' );

        if($SUsername!=''){
            $query->where("SUsername",'like',"%$SUsername%");
        }

        if($SFullname!=''){
            $query->where("SFullname",'like',"%$SFullname%");
        }

        if($SEmail!=''){
            $query->where("SEmail",'like',"%$SEmail%");
        }

        if($SDepartment!=''){
            $query->where("SDepartment",'like',"%$SDepartment%");
        }

        if($SPhone!=''){
            $query->where("SPhone",'like',"%$SPhone%");
        }

        if($SCountry!=''){
            $query->where("SCountry",'like',"%$SCountry%");
        }

        $dataS = $query->get();
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $pdf =  PDF::loadView('/pdfstudent',['dataS'=>$dataS]);
        return $pdf->download('StudentSearchPDF'.$mytime.'.pdf');
    }

    public function pdfL()
    {
        $SFullname =Session::get('LF');
        $SUsername=Session::get('LU');
        $SEmail =Session::get('LE');
        $SDepartment =Session::get('LD');
        $SPhone=Session::get('LP');
        $SCountry =Session::get('LC');
        $query = DB::table( 'alumnis' );

        if($SUsername!=''){
            $query->where("SUsername",'like',"%$SUsername%");
        }

        if($SFullname!=''){
            $query->where("SFullname",'like',"%$SFullname%");
        }

        if($SEmail!=''){
            $query->where("SEmail",'like',"%$SEmail%");
        }

        if($SDepartment!=''){
            $query->where("SDepartment",'like',"%$SDepartment%");
        }

        if($SPhone!=''){
            $query->where("SPhone",'like',"%$SPhone%");
        }

        if($SCountry!=''){
            $query->where("SCountry",'like',"%$SCountry%");
        }

        $dataA = $query->get();
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $pdf =  PDF::loadView('/pdfalumnus',['dataA'=>$dataA]);
        return $pdf->download('AlumnusSearchPDF'.$mytime.'.pdf');
    }


    public function pdfR()
    {
        $SFullname = Session::get('RsF');
        $ACFullname = Session::get('RaF');
        $query = DB::table( 'connections' );
        if($SFullname!=''){
            $query->where("SFullname",'like',"%$SFullname%");
        }

        if($ACFullname!=''){
            $query->where("ACFullname",'like',"%$ACFullname%");
        }
        $dataR = $query->get();
        $mytime = Carbon::now();
        $mytime->toDateTimeString();
        $pdf =  PDF::loadView('/pdfrelation',['dataR'=>$dataR]);
        return $pdf->download('RelationSearchPDF'.$mytime.'.pdf');

    }

}

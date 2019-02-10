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

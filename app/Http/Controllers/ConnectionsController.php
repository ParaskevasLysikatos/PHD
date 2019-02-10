<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Connection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
class ConnectionsController extends BaseController
{
    public function Connected(Request $request)
    {
        request()->validate([
            'ACFullname'=>'required',
            'SFullname'=>'required'
        ]);

            $ACFullname = $request->input('ACFullname');
            $SFullname= $request->input('SFullname');
             session(['SelectSF' => $ACFullname]);
             session(['SelectACF' => $SFullname]);
            $created_at= $request->input('created_at');
            $updated_at= $request->input('updated_at');
        $display = DB::table('connections')->where('ACFullname',$ACFullname)->where('SFullname',$SFullname)->exists();
        if(!$display){
        DB::table('connections')->insert(
            ['ACFullname' => $ACFullname , 'SFullname' => $SFullname,'created_at' =>$created_at,'updated_at' => $updated_at]
        );
            return redirect('Assign');
        }
       else return redirect('Assign')->withErrors("connection exists");
    }
}

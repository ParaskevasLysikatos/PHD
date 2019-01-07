<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\String_;

class Admin
{
    public function handle($request, Closure $next)
    {
        $name=Session::get('Uname');
        $role='Admin';
        $find=DB::table('academic_employees')->select('ACUsername')->where('ACUsername',$name)->where('Role',$role)->exists();
            if (!$find)
            {
                return redirect('/Login')->withErrors($name."  Admin only may enter");
            }
        return $next($request);
    }

}

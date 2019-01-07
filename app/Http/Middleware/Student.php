<?php
/**
 * Created by PhpStorm.
 * User: Par
 * Date: 24-Nov-18
 * Time: 11:52 AM
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class Student
{
    public function handle($request, Closure $next)
    {
        $name=Session::get('Uname');
        $find=DB::table('students')->select('SUsername')->where('SUsername',$name)->exists();
        if (!$find)
        {
            return redirect('/Login')->withErrors($name."  Students only may enter");
        }
        return $next($request);
    }
}

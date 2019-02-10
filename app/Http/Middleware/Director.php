<?php
/**
 * Created by PhpStorm.
 * User: Par
 * Date: 24-Nov-18
 * Time: 11:53 AM
 */

namespace App\Http\Middleware;
use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
class Director
{
    public function handle($request, Closure $next)
    {
        $name=Session::get('Uname');
        $role='Director';
        $find=DB::table('academic_employees')->select('ACUsername')->where('ACUsername',$name)->where('Role',$role)->exists();
        if (!$find)
        {
            return redirect('/Login')->withErrors($name. "  Director only may enter");
        }
        return $next($request);
    }
}

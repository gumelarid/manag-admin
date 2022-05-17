<?php

namespace App\Http\Middleware;

use App\Models\NavModel;
use App\Models\UserAccessModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessMenu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    { 
            $url = request()->getPathInfo();
            if ($url == '/dashboard/role/access' || $url == '/dashboard/role/access/checked') {
                $nav = NavModel::where('url','/dashboard/role')->first();
            }else{
                $nav = NavModel::where('url',$url)->first();
            }
            $nav_id = $nav->nav_id;


            $role = Auth::user()->role_id;

            $access = UserAccessModel::where('nav_id', $nav_id)->where('role_id', $role)->first();

            if (!$access) {
                return redirect('dashboard/error');
            };

            return $next($request);
    }
}

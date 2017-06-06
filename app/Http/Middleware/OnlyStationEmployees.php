<?php

namespace App\Http\Middleware;

use App\Exceptions\GeneralException;
use Closure;
use Illuminate\Support\Facades\Auth;

class OnlyStationEmployees
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(!Auth::user()->hasStation()){
                if(access()->allow('view-backend')){
                    return redirect()->route('admin.dashboard')->withFlashWarning('You can not directly access that route. Login as that user.');
                }
                access()->logout();
                throw new GeneralException('You can not directly access that route. You are not allowed.');
            }
        }else{
            access()->logout();
        }

        return $next($request);
    }
}

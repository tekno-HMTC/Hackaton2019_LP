<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GetAdmin
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
        // dd($request->route('id'));
        if(!Auth::user()){
          return redirect('/login');
        }
        $id = $request->route('id');
        $user = User::find($id);
        if(Auth::user()->role==User::ROLE_USER){
          if($user->role==User::ROLE_ADMIN){
            return abort(404);
          }
          else{
            return $next($request);
          }
        }
        else{
          return $next($request);
        }
    }
}

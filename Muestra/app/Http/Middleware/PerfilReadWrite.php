<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PerfilReadWrite{
	
	/**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
		
		$user=Auth::user();

		if($user->perfil<2){
			abort(403, 'Acceso no autorizado.');
		}		
        return $next($request);
    }
}
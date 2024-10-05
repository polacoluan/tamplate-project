<?php

namespace App\Containers\UniSection\Middlewares;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUniSectionMiddleware
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
        // Verifica se o usuário está autenticado
        if (!Auth::guard('api')->check()) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }        

        // Continua o fluxo normal da aplicação
        return $next($request);
    }
}

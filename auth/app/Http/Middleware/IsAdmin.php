<?php

namespace App\Http\Middleware;

use Closure;

use Symfony\Component\HttpKernel\Exception\HttpException;

class IsAdmin
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
        // gebruiker ophalen uit de request
        $user = $request->user();

            if($user->is_admin == 1) {


                // checken of die super admin is: is_admin == 1


                return $next($request);
            } else {
                // ander foutmelding tonen
                    throw new HttpException(403);
                    return redirect()->route('home');
            }



    }
}

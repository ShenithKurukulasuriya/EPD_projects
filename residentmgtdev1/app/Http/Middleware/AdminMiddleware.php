<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        Log::info('AdminMiddleware: Handling request.');

        if (auth()->check() && auth()->user()->isAdmin()) {
            Log::info('AdminMiddleware: User is admin. Proceeding.');
            return $next($request);
        }

        Log::info('AdminMiddleware: User is not an admin. Denying access.');
        abort(403, 'Unauthorized action.');

                // Check if the user is authenticated
                if (!auth()->check()) {
                    return redirect('/login');
                }
        
                // Check if the user has the 'admin' role
                if (auth()->user()->role !== 'admin') {
                    return redirect('/')->with('error', 'You do not have permission to access the Settings page.');
                }
        
                return $next($request);

    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiKeyAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $validKey = 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie';
        if ($request->query('key') !== $validKey) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}

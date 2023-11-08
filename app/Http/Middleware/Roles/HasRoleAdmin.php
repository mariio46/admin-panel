<?php

namespace App\Http\Middleware\Roles;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HasRoleAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        return $request->user()->hasRole('admin') ? $next($request) : abort(403);
    }
}

<?php

namespace BF\RedisManager\Http\Middleware;

use BF\RedisManager\RedisManager;

class Authenticate
{
    public function handle($request, $next)
    {
        return RedisManager::check($request) ? $next($request) : abort(403);
    }
}

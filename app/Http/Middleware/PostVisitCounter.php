<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PostVisitCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle($request, Closure $next)
    {
        // get the article id from the request
        $post = $request->route('post', null);
        if ($post === null) return $next($request);

        $ip_address = $request->ip();
        $cache_key = "post_{$post->id}_{$ip_address}";

        if (!Cache::has($cache_key)) {
            $post->increment('count_visitor');
            Cache::put($cache_key, true, 60);
        }
        return $next($request);
    }
}

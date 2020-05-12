<?php

namespace App\Http\Middleware;

use Closure;

class LogMiddleware
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
        file_put_contents(__DIR__.'/access.log', date('YmdH:i:s')."\n", FILE_APPEND);

        $request->merge([
            'title' => '速習Laravel',
            'author' => 'YAMADA, Yoshihiro'
        ]);

        $response = $next($request);
        $response->setContent(mb_strtoupper($response->content()));
        return $response;
    }
}

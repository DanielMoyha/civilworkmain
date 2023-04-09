<?php

namespace App\Http\Middleware;

use Closure;

class MeasureExecutionTime
{
    public function handle($request, Closure $next)
    {
        $start_time = microtime(true);
        $response = $next($request);
        $end_time = microtime(true);
        $request_time = $end_time - $_SERVER['REQUEST_TIME_FLOAT'];
        $response_time = ($end_time - $start_time) * 1000;
        $response->headers->set('X-Request-Time', sprintf('%0.2f', $request_time) . 's');
        $response->headers->set('X-Response-Time', sprintf('%0.2f', $response_time / 1000) . 's');
        $response->headers->set('X-Total-Time', sprintf('%0.2f', ($end_time - $_SERVER['REQUEST_TIME_FLOAT']) - ($response_time / 1000)) . 's');

        return $response;
    }
}

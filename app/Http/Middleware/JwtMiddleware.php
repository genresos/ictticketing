<?php

namespace App\Http\Middleware;

use Closure;
use JWTAuth;
use Exception;
use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;


class JwtMiddleware
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
        try {
            $user = JWTAuth::parseToken()->authenticate();
        } catch (Exception $e) {
            if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
                return response()->json([
                    "code"      =>  403,
                    "status"    =>  false,
                    "message"   =>  "Token is Invalid",
                    "data"      =>  null
                    ], 403);

            }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
                return response()->json([
                    "code"      =>  403,
                    "status"    =>  false,
                    "message"   =>  "Token is Expired",
                    "data"      =>  null
                    ], 403);
            }else{
                return response()->json([
                    "code"      =>  403,
                    "status"    =>  false,
                    "message"   =>  "Authorization Token not found",
                    "data"      =>  null
                    ], 403);
            }
        }
        return $next($request);
    }
}
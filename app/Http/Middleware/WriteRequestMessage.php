<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Storage;

class WriteRequestMessage
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
        
        $method = $request->method();
        $url = $request->path();
        $body = json_encode($request->all());
        $current_date_time = Carbon::now()->toDateTimeString(); 
        if($body == "[]"){
            $content = $current_date_time." ".$method." ".$url;
        }else{
            $content = $current_date_time." ".$method." ".$url.":".$body;
        }
        
       
        

        
        Storage::disk('local')->append('requestMessage.txt', $content);
        return $next($request);
    }
}

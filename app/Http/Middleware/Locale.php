<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class Locale
{

    /**
     * The availables languages.
     *
     * @array $languages
     */
    protected $languages = ['ge','en'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //using cookies
        //if(!Cookie::has('locale')){
        //    cookie('locale',$request->getPreferredLanguage($this->languages),'4320');
        //}
        //app()->setLocale(Cookie::get('locale'));


        //using Sessions
        if(!session()->has('locale'))
        {
            session()->put('locale', config('app.locale'));
        }
        app()->setLocale(session('locale'));
        return $next($request);
    }
}

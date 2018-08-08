<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App, Auth, Response, Cookie;

class LanguageMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {
        if(isset($_COOKIE['language']))
        {
            $language = $_COOKIE['language'];
            if($language == "zh_cn")
            {
                view()->share('chinese_active','');
                view()->share('english_active','_none');
                view()->share('english_suffix','');

                view()->share('view_title','title');
                view()->share('view_subtitle','subtitle');
                view()->share('view_description','description');
                view()->share('view_content','content');
            }
            else if($language == "en")
            {
                view()->share('chinese_active','_none');
                view()->share('english_active','');
                view()->share('english_suffix','_en');

                view()->share('view_title','title_en');
                view()->share('view_subtitle','subtitle_en');
                view()->share('view_description','description_en');
                view()->share('view_content','content_en');
            }
            else
            {
                $language = "zh_cn";

                view()->share('chinese_active','');
                view()->share('english_active','_none');
                view()->share('english_active','');

                view()->share('view_title','title');
                view()->share('view_subtitle','subtitle');
                view()->share('view_description','description');
                view()->share('view_content','content');
            }
        }
        else
        {
            $language = "zh_cn";

            view()->share('chinese_active','');
            view()->share('english_active','_none');
            view()->share('english_active','');

            view()->share('view_title','title');
            view()->share('view_subtitle','subtitle');
            view()->share('view_description','description');
            view()->share('view_content','content');
        }

//        setCookie('language', $language);

        App::setLocale($language);

//        if(App::isLocale('en')) App::setLocale('en');
//        else App::setLocale('zh_cn');

        $params['cookie_language'] = $language;
        $request->attributes->add($params);


        return $next($request);

    }
}

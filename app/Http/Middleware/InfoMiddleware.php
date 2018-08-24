<?php

namespace App\Http\Middleware;

use App\Models\RootModule;
use App\Models\RootMenu;
use App\Models\RootItem;
use App\Models\RootMessage;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App, Auth, Response, Cookie;

class InfoMiddleware
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next)
    {

        $info = RootItem::where(['category'=>1])->orderby('updated_at', 'desc')->first();
        $info->custom = json_decode($info->custom);
        $info->custom2 = json_decode($info->custom2);
        $info->custom3 = json_decode($info->custom3);

        view()->share('info', $info);

        return $next($request);

    }
}

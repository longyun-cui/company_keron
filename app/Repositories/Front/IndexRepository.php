<?php
namespace App\Repositories\Front;

use App\Models\RootModule;
use App\Models\RootMenu;
use App\Models\RootItem;
use App\Models\RootMessage;

use App\Repositories\Common\CommonRepository;

use App, Response, Auth, Validator, DB, Exception, Cache;
use QrCode;

class IndexRepository {

    private $model;
    private $repo;
    public function __construct()
    {
//        $this->model = new OrgOrganization;
    }


    // 【首页】root
    public function view_root()
    {
//        dd(empty(null));
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

//        $seoCases = RootSeoCase::where(['active'=>1])->orderby('id', 'desc')->limit(6)->get();
//        $websiteTemplates = RootWebsiteTemplate::where(['active'=>1])->orderby('id', 'desc')->limit(8)->get();
//
//        $html = view('frontend.entrance.root')
//            ->with(['info'=>$info, 'menus'=>$menus, 'seoCases'=>$seoCases, 'websiteTemplates'=>$websiteTemplates])->__toString();
//        return $html;

//        dd(trans('custom.info.name'));

        $info = RootItem::where(['category'=>1])->orderby('updated_at', 'desc')->first();
        $info->custom = json_decode($info->custom);
        $info->custom2 = json_decode($info->custom2);
        $info->custom3 = json_decode($info->custom3);

        $services = RootMenu::where(['category'=>11, 'active'=>1])->orderby('updated_at', 'desc')->get();
//        foreach($services as $item)
//        {
//            $item->custom = json_decode($item->custom);
//            $item->custom2 = json_decode($item->custom2);
//            $item->custom3 = json_decode($item->custom3);
//        }
        $advantages = RootMenu::where(['category'=>5, 'active'=>1])->orderby('updated_at', 'desc')->get();

        $cases = RootItem::where(['category'=>12, 'active'=>1])->orderby('updated_at', 'desc')->limit(6)->get();

        if(App::isLocale('en')) $language = 2;
        else $language = 1;
        $coverages = RootItem::where(['category'=>21, 'active'=>1, 'type'=>$language])->orderby('updated_at', 'desc')->limit(6)->get();

        $partners = RootItem::where(['category'=>9, 'active'=>1])->orderby('updated_at', 'desc')->limit(15)->get();

        $html = view('frontend.template-2933.entrance.root')->with([
            'info'=>$info,
            'services'=>$services,
            'advantages'=>$advantages,
            'cases'=>$cases,
            'coverages'=>$coverages,
            'partners'=>$partners
        ])->__toString();
        return $html;
    }




    // 【服务项目】【列表】
    public function view_about_us()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $items = RootItem::where(['category'=>2, 'active'=>1])->orderby('updated_at', 'desc')->get();
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }
        $html = view('frontend.template-2933.entrance.about-list')->with(['abouts'=>$items])->__toString();

        return $html;
    }
    // 【服务项目】【列表】
    public function view_about($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0) $mine = RootItem::orderby('updated_at', 'desc')->first();
        else $mine = RootItem::where(['id'=>$id])->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        $html = view('frontend.template-2933.entrance.about-detail')->with(['about'=>$mine])->__toString();
        return $html;
    }




    // 【服务项目】【列表】
    public function view_advantages($id)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0)
        {
            $items = RootMenu::with(['items'=>function($query) { $query->where(['active'=>1])->orderby('updated_at', 'desc'); }])
                ->where(['category'=>5, 'active'=>1])->orderby('updated_at', 'desc')->get();
        }
        else
        {
            $items = RootMenu::with(['items'=>function($query) { $query->where(['active'=>1])->orderby('updated_at', 'desc'); }])
                ->where(['id'=>$id])->orderby('updated_at', 'desc')->get();
        }
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.advantage-list')->with(['advantages'=>$items])->__toString();
        return $html;
    }
    // 【服务项目】【详情】
    public function view_advantage($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0) $mine = RootItem::orderby('updated_at', 'desc')->first();
        else $mine = RootItem::where(['id'=>$id])->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        $html = view('frontend.template-2933.entrance.advantage-detail')->with(['advantage'=>$mine])->__toString();
        return $html;
    }




    // 【服务项目】【列表】
    public function view_services($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0)
        {
            $items = RootMenu::with(['items'=>function($query) { $query->where(['active'=>1])->orderby('updated_at', 'desc'); }])
                ->where(['category'=>11, 'active'=>1])->orderby('updated_at', 'desc')->get();
        }
        else
        {
            $items = RootMenu::with(['items'=>function($query) { $query->where(['active'=>1])->orderby('updated_at', 'desc'); }])
                ->where(['id'=>$id])->orderby('updated_at', 'desc')->get();
        }
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.service-list')->with(['services'=>$items])->__toString();
        return $html;
    }
    // 【服务项目】【详情】
    public function view_service($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0) $mine = RootItem::orderby('updated_at', 'desc')->first();
        else $mine = RootItem::where(['id'=>$id])->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        $html = view('frontend.template-2933.entrance.service-detail')->with(['service'=>$mine])->__toString();
        return $html;
    }




    // 【常见问题】【列表】
    public function view_faqs()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $items = RootItem::where(['category'=>18, 'active'=>1])->orderby('updated_at', 'desc')->paginate(16);
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.faq-list')->with(['faqs'=>$items])->__toString();
        return $html;
    }
    // 【常见问题】【详情】
    public function view_faq($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id != 0) $mine = RootItem::where(['id'=>$id])->first();
        else $mine = RootItem::orderby('id', 'desc')->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        $html = view('frontend.template-2933.entrance.faq-detail')->with(['faq'=>$mine])->__toString();
        return $html;
    }




    // 【新闻动态】【列表】
    public function view_coverages()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if(isset($_COOKIE['language']) &&  $_COOKIE['language']=="en") $type = 2;
        else $type = 1;
        $coverages = RootItem::where(['category'=>21, 'type'=>$type, 'active'=>1])->orderby('updated_at', 'desc')->paginate(12);
        foreach($coverages as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.coverage-list')->with(['coverages'=>$coverages])->__toString();
        return $html;
    }
    // 【新闻动态】【详情】
    public function view_coverage($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id != 0) $mine = RootItem::where(['id'=>$id])->first();
        else $mine = RootItem::where(['category'=>21])->orderby('id', 'desc')->first();
        if(isset($mine))
        {
            $mine->custom = json_decode($mine->custom);
            $mine->custom2 = json_decode($mine->custom2);
            $mine->custom3 = json_decode($mine->custom3);

            $cookie_language = request()->get('cookie_language');
            var_dump($cookie_language.'--'.$mine->type);

            if($cookie_language == "zh_cn")
            {
                if($mine->type != 1) return redirect('/coverages');
            }
            else if($cookie_language == "en")
            {
                if($mine->type != 2) return redirect('/coverages');
            }

        }
        else
        {
            $mine = [];
//            return redirect('/coverages');
        }

        $html = view('frontend.template-2933.entrance.coverage-detail')->with(['coverage'=>$mine])->__toString();
        return $html;
    }




    // 返回【联系我们】【视图】
    public function view_contact()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $html = view('frontend.template-2933.entrance.contact')->__toString();
        return $html;
    }


    // 返回【询价】【视图】
    public function view_quote()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $html = view('frontend.template-2933.entrance.quote')->__toString();
        return $html;
    }




    // 【留言】
    public function message_contact($post_data)
    {
        $messages = [
            'name.required' => '请输入姓名',
            'mobile.required' => '请输入电话',
        ];
        $v = Validator::make($post_data, [
            'name' => 'required',
            'mobile' => 'required'
        ], $messages);
        if ($v->fails())
        {
            $messages = $v->errors();
            return response_error([],$messages->first());
        }

        // 启动数据库事务
        DB::beginTransaction();
        try
        {
            $post_data['category'] = 1;
            $mine = new RootMessage;
            $bool = $mine->fill($post_data)->save();
            if(!$bool) throw new Exception("insert--message--fail");

            DB::commit();
            $msg = '提交成功！';
            return response_success([],$msg);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '提交失败，请重试！';
//            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }



    }


    // 【询价】
    public function message_quote($post_data)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        dd($post_data);
        return false;
    }



}
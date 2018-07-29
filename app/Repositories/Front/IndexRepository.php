<?php
namespace App\Repositories\Front;

use App\Models\RootModule;
use App\Models\RootMenu;
use App\Models\RootItem;
use App\Models\RootMessage;

use App\Repositories\Common\CommonRepository;

use Response, Auth, Validator, DB, Exception, Cache;
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

        $services = RootMenu::where(['category'=>11, 'active'=>1])->orderby('updated_at', 'desc')->limit(4)->get();
//        foreach($services as $item)
//        {
//            $item->custom = json_decode($item->custom);
//            $item->custom2 = json_decode($item->custom2);
//            $item->custom3 = json_decode($item->custom3);
//        }
        $advantages = RootItem::where(['category'=>5, 'active'=>1])->orderby('updated_at', 'desc')->get();
        $cases = RootItem::where(['category'=>12, 'active'=>1])->orderby('updated_at', 'desc')->limit(6)->get();
        $coverages = RootItem::where(['category'=>21, 'active'=>1])->orderby('updated_at', 'desc')->limit(6)->get();

        $html = view('frontend.template-2933.entrance.root')
            ->with(['services'=>$services,'advantages'=>$advantages,'cases'=>$cases,'coverages'=>$coverages])->__toString();
        return $html;
    }


    // 【联系我们】contact
    public function view_contact()
    {

        $houses = RootItem::where(['category'=>11, 'active'=>1])->orderby('id', 'desc')->get();
        foreach($houses as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
        }

        $html = view('frontend.template-2933.entrance.contact')->with(['houses'=>$houses])->__toString();
        return $html;
    }




    // 【服务项目】【列表】
    public function view_about($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id == 0)
        {
            $items = RootItem::where(['category'=>2, 'active'=>1])->orderby('updated_at', 'desc')->get();
            foreach($items as $item)
            {
                $item->custom = json_decode($item->custom);
                $item->custom2 = json_decode($item->custom2);
                $item->custom3 = json_decode($item->custom3);
            }
            $html = view('frontend.template-2933.entrance.about')->with(['abouts'=>$items])->__toString();
        }
        else
        {
            $item = RootItem::where(['id'=>$id])->first();
            $html = view('frontend.template-2933.entrance.item')->with(['item'=>$item])->__toString();
        }

        return $html;
    }




    // 【服务项目】【列表】
    public function view_advantages()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $items = RootItem::where(['category'=>5, 'active'=>1])->orderby('updated_at', 'desc')->paginate(16);
        foreach($items as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.advantages')->with(['advantages'=>$items])->__toString();
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

        $html = view('frontend.template-2933.entrance.advantage')->with(['advantage'=>$mine])->__toString();
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

        $html = view('frontend.template-2933.entrance.services')->with(['services'=>$items])->__toString();
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

        $html = view('frontend.template-2933.entrance.service')->with(['service'=>$mine])->__toString();
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

        $html = view('frontend.template-2933.entrance.faqs')->with(['faqs'=>$items])->__toString();
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

        $html = view('frontend.template-2933.entrance.faq')->with(['faq'=>$mine])->__toString();
        return $html;
    }




    // 【新闻动态】【列表】
    public function view_coverages()
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        $coverages = RootItem::where(['category'=>21, 'active'=>1])->orderby('updated_at', 'desc')->paginate(16);
        foreach($coverages as $item)
        {
            $item->custom = json_decode($item->custom);
            $item->custom2 = json_decode($item->custom2);
            $item->custom3 = json_decode($item->custom3);
        }

        $html = view('frontend.template-2933.entrance.coverages')->with(['coverages'=>$coverages])->__toString();
        return $html;
    }
    // 【新闻动态】【详情】
    public function view_coverage($id = 0)
    {
//        $info = json_decode(json_encode(config('mitong.company.info')));
//        $menus = RootMenu::where(['active'=>1])->orderby('order', 'asc')->get();

        if($id != 0) $mine = RootItem::where(['id'=>$id])->first();
        else $mine = RootItem::orderby('id', 'desc')->first();

        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        $html = view('frontend.template-2933.entrance.coverage')->with(['coverage'=>$mine])->__toString();
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





}
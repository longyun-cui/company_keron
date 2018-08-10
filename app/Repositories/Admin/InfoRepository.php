<?php
namespace App\Repositories\Admin;

use App\Administrator;
use App\Models\RootModule;
use App\Models\RootMenu;
use App\Models\RootItem;

use App\Repositories\Common\CommonRepository;
use App\Repositories\RootCommonRepository;

use Response, Auth, Validator, DB, Exception;
use QrCode;

class InfoRepository {

    private $model;
    private $repo;
    public function __construct()
    {
        $this->model = new Administrator;
    }

    // 返回（后台）主页视图
    public function view_index()
    {
        $mine = RootItem::where('category',1)->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);

        return view('admin.info.index')->with(['data'=>$mine]);
    }

    // 返回（后台）企业信息编辑视图
    public function view_edit()
    {
        $mine = RootItem::where('category',1)->first();
        $mine->custom = json_decode($mine->custom);
        $mine->custom2 = json_decode($mine->custom2);
        $mine->custom3 = json_decode($mine->custom3);
        return view('admin.info.edit')->with(['data'=>$mine]);
    }
    // 保存企业信息
    public function save($post_data)
    {
        $mine = RootItem::where('category',1)->first();

        // 启动数据库事务
        DB::beginTransaction();
        try
        {

            if(!empty($post_data['custom']))
            {
                $post_data['custom'] = json_encode($post_data['custom']);
            }


            $bool = $mine->fill($post_data)->save();
            if($bool)
            {
                // banner images
                $banner_images = [];
                if(!empty($post_data["banner_images"][0]))
                {
                    // 删除原有图片
                    $custom3_decode = json_decode($mine->custom3,true);
                    if(count($custom3_decode) > 0)
                    {
                        foreach ($custom3_decode as $img)
                        {
                            if(!empty($img["img"]) && file_exists(storage_path("resource/" . $img["img"])))
                            {
                                unlink(storage_path("resource/" . $img["img"]));
                            }
                        }
                    }

                    // 添加图片
                    foreach ($post_data["banner_images"] as $n => $f)
                    {
                        if(!empty($f))
                        {
                            $result = upload_storage($f);
                            if($result["result"]) $banner_images[$n]["img"] = $result["local"];
                            else throw new Exception("upload-image-fail");
                        }
                    }

                    if(count($banner_images) > 0)
                    {
                        $custom3_encode = json_encode($banner_images);
                        $mine->custom3 = $custom3_encode;
                        $mine->save();
                    }
                }

                // 视频背景图片
                if(!empty($post_data["video_background"]))
                {
                    $custom2 = json_decode($mine->custom2,true);
                    // 删除原封面图片
                    $mine_video_background_pic = isset($custom2["video_background"]) ? $custom2["video_background"] : '';
                    if(!empty($mine_video_background_pic) && file_exists(storage_path("resource/" . $mine_video_background_pic)))
                    {
                        unlink(storage_path("resource/" . $mine_video_background_pic));
                    }

                    $result = upload_storage($post_data["video_background"]);
                    if($result["result"])
                    {
                        $custom2["video_background"] = $result["local"];
                        $mine->custom2 = json_encode($custom2);
                        $mine->save();
                    }
                    else throw new Exception("upload-image-fail");
                }
                // FAQ背景图片
                if(!empty($post_data["faq_background"]))
                {
                    $custom2 = json_decode($mine->custom2,true);
                    // 删除原封面图片
                    $mine_faq_background_pic = isset($custom2["faq_background"]) ? $custom2["faq_background"] : '';
                    if(!empty($mine_faq_background_pic) && file_exists(storage_path("resource/" . $mine_faq_background_pic)))
                    {
                        unlink(storage_path("resource/" . $mine_faq_background_pic));
                    }

                    $result = upload_storage($post_data["faq_background"]);
                    if($result["result"])
                    {
                        $custom2["faq_background"] = $result["local"];
                        $mine->custom2 = json_encode($custom2);
                        $mine->save();
                    }
                    else throw new Exception("upload-image-fail");
                }

                // 封面图片
                if(!empty($post_data["cover"]))
                {
                    // 删除原封面图片
                    $mine_cover_pic = $mine->cover_pic;
                    if(!empty($mine_cover_pic) && file_exists(storage_path("resource/" . $mine_cover_pic)))
                    {
                        unlink(storage_path("resource/" . $mine_cover_pic));
                    }

                    $result = upload_storage($post_data["cover"]);
                    if($result["result"])
                    {
                        $mine->cover_pic = $result["local"];
                        $mine->save();
                    }
                    else throw new Exception("upload-cover-fail");
                }
            }

            DB::commit();
            return response_success([]);
        }
        catch (Exception $e)
        {
            DB::rollback();
            $msg = '操作失败，请重试！';
            $msg = $e->getMessage();
//            exit($e->getMessage());
            return response_fail([],$msg);
        }

    }






}
@extends('admin.layout.layout')

@section('title','编辑基本信息')
@section('header','编辑基本信息')
@section('description','编辑基本信息')

@section('breadcrumb')
    <li><a href="{{url('/admin')}}"><i class="fa fa-home"></i>首页</a></li>
    <li><a href="#"><i class="fa "></i>Here</a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info form-container">

            <div class="box-header with-border" style="margin:16px 0;">
                <h3 class="box-title">基本信息</h3>
                <div class="box-tools pull-right">
                </div>
            </div>

            <form action="" method="post" class="form-horizontal form-bordered" id="form-edit-info">
            <div class="box-body">
                {{csrf_field()}}

                {{--企业全称--}}
                <div class="form-group">
                    <label class="control-label col-md-2">企业全称</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[name]" placeholder="企业全称" value="{{$data->custom->name or ''}}">
                    </div>
                </div>

                {{--企业简称--}}
                <div class="form-group">
                    <label class="control-label col-md-2">企业简称</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[name_short]" placeholder="企业简称" value="{{$data->custom->name_short or ''}}">
                    </div>
                </div>

                {{--企业简称--}}
                <div class="form-group">
                    <label class="control-label col-md-2">Slogan</label>
                    <div class="col-md-8 ">
                        <input type="text" class="form-control" name="custom[slogan]" placeholder="Slogan" value="{{$data->custom->slogan or ''}}">
                    </div>
                </div>

                {{--最新动态--}}
                <div class="form-group">
                    <label class="control-label col-md-2">企业简介</label>
                    <div class="col-md-8 ">
                        {{--<input type="text" class="form-control" name="custom[description]" placeholder="" value="{{$data->custom->manager_cost or ''}}">--}}
                        <textarea class="form-control" name="custom[recent_news]" rows="3" cols="100%">{{$data->custom->description or ''}}</textarea>
                    </div>
                </div>

                {{--LOGO--}}
                <div class="form-group">
                    <label class="control-label col-md-2">LOGO</label>
                    <div class="col-md-8 fileinput-group">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->cover_pic))
                                    <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->cover_pic)}}" alt="" />
                                @endif
                            </div>
                            <div class="fileinput-preview fileinput-exists thumbnail">
                            </div>
                            <div class="btn-tool-group">
                                <span class="btn-file">
                                    <button class="btn btn-sm btn-primary fileinput-new">选择图片</button>
                                    <button class="btn btn-sm btn-warning fileinput-exists">更改</button>
                                    <input type="file" name="cover" />
                                </span>
                                <span class="">
                                    <button class="btn btn-sm btn-danger fileinput-exists" data-dismiss="fileinput">移除</button>
                                </span>
                            </div>
                        </div>
                        <div id="titleImageError" style="color: #a94442"></div>

                    </div>
                </div>

                {{--Banner 图--}}
                <div class="form-group">
                    <label class="control-label col-md-2">首页 Banner</label>
                    <div class="col-md-8 fileinput-group">
                        @if(!empty($data->custom3))
                            @foreach($data->custom3 as $img)
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$img->img)}}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        @endif
                    </div>

                    <div class="col-md-8 col-md-offset-2 ">
                        <input id="banner-images" type="file" class="file-" name="banner_images[]" multiple>
                    </div>
                </div>

            </div>
            </form>

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="button" onclick="" class="btn btn-success" id="edit-info-submit"><i class="fa fa-check"></i>提交</button>
                        <button type="button" onclick="history.go(-1);" class="btn btn-default">返回</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection


@section('js')
<script>
    $(function() {

        $("#banner-images").fileinput({
            allowedFileExtensions : [ 'jpg', 'jpeg', 'png', 'gif' ],
            showUpload: false
        });

        // 添加or修改产品信息
        $("#edit-info-submit").on('click', function() {
            var options = {
                url: "{{url('/admin/info/edit')}}",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        location.href = "{{url('/admin/info/index')}}";
                    }
                }
            };
            $("#form-edit-info").ajaxSubmit(options);
        });
    });
</script>
@endsection
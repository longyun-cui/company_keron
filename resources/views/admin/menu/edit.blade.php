@extends('admin.layout.layout')

@section('title')
    @if($operate == 'create') 添加目录 @else 编辑目录 @endif
@endsection

@section('header')
    @if($operate == 'create') 添加目录 @else 编辑目录 @endif
@endsection

@section('description')
    @if($operate == 'create') 添加目录 @else 编辑目录 @endif
@endsection

@section('breadcrumb')
    <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> 首页</a></li>
    <li><a href="{{url('/admin/menu/list')}}"><i class="fa "></i> 目录列表</a></li>
    <li><a href="#"><i class="fa "></i> Here</a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info form-container">

            <div class="box-header with-border" style="margin:16px 0;">
                <h3 class="box-title">@if($operate == 'create') 添加目录 @else 编辑目录 @endif</h3>
                <div class="box-tools pull-right _none">
                </div>
            </div>

            <form action="" method="post" class="form-horizontal form-bordered" id="form-edit-menu">
            <div class="box-body">

                {{csrf_field()}}
                <input type="hidden" name="operate" value="{{$operate or ''}}" readonly>
                <input type="hidden" name="encode_id" value="{{$encode_id or encode(0)}}" readonly>

                {{--类别--}}
                <div class="form-group form-category">
                    <label class="control-label col-md-2">类别</label>
                    <div class="col-md-8">
                        <div class="btn-group">

                            @if($operate == 'edit')
                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="{{ $data->category or 0 }}" checked="checked">
                                            @if($data->category == 0) 未定义
                                            @elseif($data->category == 2) 关于我们
                                            @elseif($data->category == 5) 选择KERON
                                            @elseif($data->category == 11) 服务项目
                                            @elseif($data->category == 18) 常见问题
                                            @elseif($data->category == 21) 资讯动态
                                            @endif
                                        </label>
                                    </div>
                                </button>
                            @elseif($operate == 'create')

                                {{--<button type="button" class="btn">--}}
                                    {{--<div class="radio">--}}
                                        {{--<label>--}}
                                            {{--<input type="radio" name="category" value="0" checked="checked"> 未定义--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</button>--}}

                                {{--<button type="button" class="btn">--}}
                                    {{--<div class="radio">--}}
                                        {{--<label>--}}
                                            {{--<input type="radio" name="category" value="2"> 关于我们--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</button>--}}

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="11" checked="checked"> 服务项目
                                        </label>
                                    </div>
                                </button>

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="5"> 选择KERON
                                        </label>
                                    </div>
                                </button>

                                {{--<button type="button" class="btn">--}}
                                    {{--<div class="radio">--}}
                                        {{--<label>--}}
                                            {{--<input type="radio" name="category" value="21"> 资讯动态--}}
                                        {{--</label>--}}
                                    {{--</div>--}}
                                {{--</button>--}}

                            @endif

                            @if(false)
                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="0"
                                                   @if($operate == 'create' || ($operate == 'edit' && $data->category == 0)) checked="checked" @endif> 未定义
                                        </label>
                                    </div>
                                </button>

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="2"
                                                   @if($operate == 'edit' && $data->category == 2) checked="checked" @endif> 关于我们
                                        </label>
                                    </div>
                                </button>

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="11"
                                                   @if($operate == 'edit' && $data->category == 11) checked="checked" @endif> 服务项目
                                        </label>
                                    </div>
                                </button>

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="11"
                                                   @if($operate == 'edit' && $data->category == 18) checked="checked" @endif> 常见问题
                                        </label>
                                    </div>
                                </button>

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="category" value="21"
                                                   @if($operate == 'edit' && $data->category == 21) checked="checked" @endif> 资讯动态
                                        </label>
                                    </div>
                                </button>
                            @endif

                        </div>
                    </div>
                </div>
                {{--存在详情--}}
                <div class="form-group form-type">
                    <label class="control-label col-md-2">存在详情</label>
                    <div class="col-md-8">
                        <div class="btn-group">

                            <button type="button" class="btn">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="type" value="0"
                                               @if($operate == 'create' || ($operate == 'edit' && $data->type == 0)) checked="checked" @endif> 否
                                    </label>
                                </div>
                            </button>

                            <button type="button" class="btn">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="type" value="1"
                                               @if($operate == 'edit' && $data->type == 1) checked="checked" @endif> 是
                                    </label>
                                </div>
                            </button>

                        </div>
                    </div>
                </div>
                {{--标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">标题</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="title" placeholder="请输入标题" value="{{$data->title or ''}}"></div>
                    </div>
                </div>
                {{--副标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">副标题</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="subtitle" placeholder="请输入副标题" value="{{$data->subtitle or ''}}"></div>
                    </div>
                </div>
                {{--描述--}}
                <div class="form-group">
                    <label class="control-label col-md-2">描述</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="description" placeholder="请输入描述" value="{{$data->description or ''}}"></div>
                    </div>
                </div>
                {{--内容详情--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-md-2">内容详情</label>--}}
                    {{--<div class="col-md-8 ">--}}
                        {{--<div><input type="text" class="form-control" name="content" placeholder="内容" value="{{$data->content or ''}}"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--英文标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">（英文）标题</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="title_en" placeholder="请输入（英文）标题" value="{{$data->title_en or ''}}"></div>
                    </div>
                </div>
                {{--英文标题--}}
                <div class="form-group">
                    <label class="control-label col-md-2">（英文）副标题</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="subtitle_en" placeholder="请输入（英文）副标题" value="{{$data->subtitle_en or ''}}"></div>
                    </div>
                </div>
                {{--英文描述--}}
                <div class="form-group">
                    <label class="control-label col-md-2">（英文）描述</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="description_en" placeholder="请输入（英文）描述" value="{{$data->description_en or ''}}"></div>
                    </div>
                </div>
                {{--英文内容--}}
                {{--<div class="form-group">--}}
                    {{--<label class="control-label col-md-2">内容详情</label>--}}
                    {{--<div class="col-md-8 ">--}}
                        {{--<div><input type="text" class="form-control" name="content_en" placeholder="内容" value="{{$data->content_en or ''}}"></div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--优化alt--}}
                <div class="form-group">
                    <label class="control-label col-md-2">封面图片alt</label>
                    <div class="col-md-8 ">
                        <div><input type="text" class="form-control" name="custom[cover_pic_alt]" placeholder="封面图片alt，用于优化" value="{{$data->custom->cover_pic_alt or ''}}"></div>
                    </div>
                </div>
                {{--cover 封面图片--}}
                <div class="form-group">
                    <label class="control-label col-md-2">封面图片</label>
                    <div class="col-md-8 fileinput-group">

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->cover_pic))
                                    <img src="{{ url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->cover_pic) }}" alt="" />
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

                {{--启用--}}
                @if($operate == 'create')
                    <div class="form-group form-type">
                        <label class="control-label col-md-2">启用</label>
                        <div class="col-md-8">
                            <div class="btn-group">

                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="active" value="0" checked="checked"> 暂不启用
                                        </label>
                                    </div>
                                </button>
                                <button type="button" class="btn">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="active" value="1"> 启用
                                        </label>
                                    </div>
                                </button>

                            </div>
                        </div>
                    </div>
                @endif

            </div>
            </form>

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <button type="button" class="btn btn-success" id="edit-menu-submit"><i class="fa fa-check"></i> 提交</button>
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
        // 添加or编辑
        $("#edit-menu-submit").on('click', function() {
            var options = {
                url: "{{url('/admin/menu/edit')}}",
                type: "post",
                dataType: "json",
                // target: "#div2",
                success: function (data) {
                    if(!data.success) layer.msg(data.msg);
                    else
                    {
                        layer.msg(data.msg);
                        location.href = "{{url('/admin/menu/list')}}";
                    }
                }
            };
            $("#form-edit-menu").ajaxSubmit(options);
        });
    });
</script>
@endsection

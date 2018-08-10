@extends('admin.layout.layout')

@section('title','基本信息')
@section('header','基本信息')
@section('description','基本信息')
@section('breadcrumb')
    <li><a href="{{url(config('common.org.admin.prefix').'/admin')}}"><i class="fa fa-home"></i>首页</a></li>
    <li><a href="#"><i class="fa "></i>Here</a></li>
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN PORTLET-->
        <div class="box box-info form-container">

            <div class="box-header with-border" style="margin: 15px 0;">
                <h3 class="box-title">基本信息</h3>
                <div class="pull-right">
                    <a href="{{url('/admin/info/edit')}}">
                        <button type="button" onclick="" class="btn btn-success pull-right"><i class="fa "></i>编辑信息</button>
                    </a>
                </div>
            </div>

            <form class="form-horizontal form-bordered">
            <div class="box-body">
                {{--邮箱--}}
                <div class="form-group">
                    <label class="control-label col-md-2">企业名称：</label>
                    <div class="col-md-8 ">
                        <div><label class="control-label">{{$data->custom->name or ''}}</label></div>
                    </div>
                </div>
                {{--昵称--}}
                <div class="form-group">
                    <label class="control-label col-md-2">简称：</label>
                    <div class="col-md-8 ">
                        <div><label class="control-label">{{$data->custom->name_short or ''}}</label></div>
                    </div>
                </div>
                {{--真实姓名--}}
                <div class="form-group">
                    <label class="control-label col-md-2">简介：</label>
                    <div class="col-md-8 ">
                        <div><label class="control-label">{{$data->custom->description or ''}}</label></div>
                    </div>
                </div>
                {{--portrait--}}
                <div class="form-group">
                    <label class="control-label col-md-2">首页 Banner：</label>
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
                </div>
                {{--视频背景--}}
                <div class="form-group">
                    <label class="control-label col-md-2">视频背景图：</label>
                    <div class="col-md-8 fileinput-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->custom2->video_background))
                                    <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->custom2->video_background)}}" alt="" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{--FAQ背景图--}}
                <div class="form-group">
                    <label class="control-label col-md-2">FAQ背景图：</label>
                    <div class="col-md-8 fileinput-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->custom2->faq_background))
                                    <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->custom2->faq_background)}}" alt="" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{--LOGO--}}
                <div class="form-group _none">
                    <label class="control-label col-md-2">LOGO：</label>
                    <div class="col-md-8 fileinput-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail">
                                @if(!empty($data->cover_pic))
                                    <img src="{{url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$data->cover_pic)}}" alt="" />
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <div class="box-footer">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        {{--<a href="{{url('/admin/administrator/edit')}}">--}}
                            {{--<button type="button" onclick="" class="btn btn-success"><i class="fa "></i>编辑信息</button>--}}
                        {{--</a>--}}
                        <button type="button" onclick="history.go(-1);" class="btn btn-default">返回</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>
</div>
@endsection

@section('style')
    <style>
        .info-img-block {width: 100px;height: 100px;overflow: hidden;}
        .info-img-block img {width: 100%;}
    </style>
@endsection

@section('js')
<script>
    $(function() {
        // with plugin options
        $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
    });
</script>
@endsection

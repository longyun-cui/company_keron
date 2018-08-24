@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ trans('custom.text.service_title') }} | {{ trans('custom.info.name') }}@endsection
@section('meta_author')@endsection
@section('meta_title')@endsection
@section('meta_description')@endsection
@section('meta_keywords')@endsection




{{--header--}}
@section('component-header')
    @include('frontend.template-2933.component.header')
@endsection


{{--footer--}}
@section('component-footer')
    @include('frontend.template-2933.component.footer')
@endsection




{{--banner-image--}}
@section('banner-image')
    @if(!empty($info->custom2->service_banner)) {{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$info->custom2->service_banner }}
    @else {{ '/custom/images/banner-service.jpg' }}
    @endif
@endsection

{{--custom-content--}}
@section('custom-content')

    @include('frontend.template-2933.component.banner-for-page',[
        'banner_page_title'=>trans('custom.text.service_page_title'),
        'banner_page_background'=>'/custom/images/banner-service.jpg'
    ])

    @include('frontend.template-2933.module.module-service-for-list', ['page_type'=>'list','services'=>$services])

@endsection

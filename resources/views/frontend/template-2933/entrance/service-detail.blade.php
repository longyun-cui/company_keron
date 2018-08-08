@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ $coverage->$view_title or '' }} | {{ trans('custom.info.name') }}@endsection
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


{{--custom-content--}}
@section('custom-content')

    @include('frontend.template-2933.component.banner-for-page',[
        'banner_page_title'=>trans('custom.text.service_page_title'),
        'banner_page_background'=>'/custom/images/banner.jpg'
    ])

    @include('frontend.template-2933.module.module-item', ['item'=>$service])

@endsection

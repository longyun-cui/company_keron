@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')服务产品-{{ config('company.info.name') }}@endsection
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


    @include('frontend.template-2933.component.banner')

    @include('frontend.template-2933.module.module-service-for-list', ['services_type'=>'list','services'=>$services])


@endsection

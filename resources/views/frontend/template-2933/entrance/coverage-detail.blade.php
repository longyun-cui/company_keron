@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ $coverage->title or '' }} | {{ trans('custom.info.short_name') }}@endsection
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
    @if(!empty($info->custom2->coverage_banner)) {{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$info->custom2->coverage_banner }}
    @else {{ '/custom/images/banner-coverage.jpg' }}
    @endif
@endsection

{{--custom-content--}}
@section('custom-content')

    @include('frontend.template-2933.component.banner-for-page',[
        'banner_page_title'=>trans('custom.text.coverage_page_title'),
        'banner_page_background'=>'/custom/images/banner-coverage.jpeg'
    ])

    @include('frontend.template-2933.module.module-coverage-for-detail', ['item'=>$coverage])

@endsection

@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ trans('custom.text.quote_title') }} | {{ trans('custom.info.name') }}@endsection
@section('meta_author')@endsection
@section('meta_title'){{ trans('custom.text.quote_title') }} | {{ trans('custom.info.name') }}@endsection
@section('meta_description'){{ config('common.meta_description') }}@endsection
@section('meta_keywords'){{ config('common.meta_keywords') }}@endsection




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
    @if(!empty($info->custom2->quote_banner)) {{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$info->custom2->quote_banner }}
    @else {{ '/custom/images/banner-quote.jpg' }}
    @endif
@endsection

{{--custom-content--}}
@section('custom-content')

    @include('frontend.template-2933.component.banner-for-page',[
        'banner_page_title'=>trans('custom.text.quote_page_title'),
        'banner_page_background'=>'/custom/images/banner-quote.jpg'
    ])

    @if(App::isLocale('en')) @include('frontend.template-2933.module.module-quote-en')
    @else @include('frontend.template-2933.module.module-quote-zh')
    @endif

@endsection




{{--custom-css--}}
@section('custom-css')

    <link type="text/css" rel="stylesheet" href="{{ asset('include/www.keronmoving.cn/css/index.css') }}" media="all" />
    <link type="text/css" rel="stylesheet" href="{{ asset('include/www.keronmoving.cn/css/move.css') }}" media="all" />
    <link type="text/css" rel="stylesheet" href="{{ asset('include/www.keronmoving.cn/css/common.css') }}" media="all" />

@endsection


{{--custom-js--}}
@section('custom-js')

    <script src="{{ asset('include/www.keronmoving.cn/js/moveing.js') }}"></script>

@endsection

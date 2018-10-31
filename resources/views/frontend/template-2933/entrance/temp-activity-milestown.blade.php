@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')keron-milestown | {{ trans('custom.info.short_name') }}@endsection
@section('meta_author')@endsection
@section('meta_title')keron-milestown | {{ trans('custom.info.short_name') }}@endsection
@section('meta_description'){{ config('common.meta_description') }}@endsection
@section('meta_keywords'){{ config('common.meta_keywords') }}@endsection




{{--header--}}
@section('component-header')
{{--    @include('frontend.template-2933.component.header')--}}
@endsection




{{--custom-content--}}
@section('custom-content')

    <section class="probootstrap-section probootstrap-section-dark" style="padding:0;background-color:#000;text-align:center;">

        <div>
            <a href="/?language=en">
                <img src="{{ asset('/custom/images/activity-1.jpeg') }}" alt="Images">
            </a>
        </div>
        <div>
            <a href="http://www.milestown.cn/index.html">
                <img src="{{ asset('/custom/images/activity-2.jpeg') }}" alt="Images">
            </a>
        </div>

    </section>

@endsection


{{--script--}}
@section('custom-style')
<style>
    body {
        /*background-color:#856D35;*/
        background-color:#000;
        text-align:center;
    }
</style>
@endsection

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
            <div class="col-md-4 col-lg-4 hidden-xs" style="padding:0">
                <img src="{{ asset('/custom/images/activity-1-1.jpeg') }}" alt="Images">
            </div>
            <div class="col-md-4 col-lg-4" style="padding:0">
                <a href="/?language=en">
                    <img src="{{ asset('/custom/images/activity-1-2.jpeg') }}" alt="Images">
                </a>
            </div>
            <div class="col-md-4 col-lg-4 hidden-xs" style="padding:0">
                <img src="{{ asset('/custom/images/activity-1-3.jpeg') }}" alt="Images">
            </div>
        </div>
        <div>
            <div class="col-md-4 col-lg-4 hidden-xs" style="padding:0">
                <img src="{{ asset('/custom/images/activity-2-1.jpeg') }}" alt="Images">
            </div>
            <div class="col-md-4 col-lg-4" style="padding:0">
                <a href="http://www.milestown.cn/index.html">
                    <img src="{{ asset('/custom/images/activity-2-2.jpeg') }}" alt="Images">
                </a>
            </div>
            <div class="col-md-4 col-lg-4 hidden-xs" style="padding:0">
                <img src="{{ asset('/custom/images/activity-2-3.jpeg') }}" alt="Images">
            </div>
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

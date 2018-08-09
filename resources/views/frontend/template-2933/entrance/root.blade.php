@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ trans('custom.info.name') }}@endsection
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

    @include('frontend.template-2933.component.banner-for-root')

    {{--@include('frontend.template-2933.module.module-more')--}}

    @include('frontend.template-2933.module.module-activity-for-root')

    @include('frontend.template-2933.module.module-service-for-root', ['services_type'=>'root','services'=>$services])

    @include('frontend.template-2933.module.module-video-for-root')

    @include('frontend.template-2933.module.module-advantage-for-root')

    @include('frontend.template-2933.module.module-faq-for-root')

    @include('frontend.template-2933.module.module-coverage-for-root', ['coverages_type'=>'root','coverages'=>$coverages])

    @include('frontend.template-2933.module.module-customer-for-root')

    {{--@include('frontend.template-2933.module.module-case', ['cases_type'=>'root','cases'=>$cases])--}}

    {{--@include('frontend.template-2933.module.module-contact-for-root')--}}

@endsection




{{--script--}}
@section('custom-script')
<script>

    $(function() {

        $('.lightcase-vedio').lightcase({
            width:866,
            height:488,
            maxWidth: 9999,
            maxHeight: 9999
        });

    });

</script>
@endsection
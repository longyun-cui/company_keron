@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title'){{ trans('custom.text.faq_title') }} | {{ trans('custom.info.short_name') }}@endsection
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
        'banner_page_title'=>trans('custom.text.faq_title'),
        'banner_page_background'=>'/custom/images/banner-faq.jpg'
    ])

    @include('frontend.template-2933.module.module-faq-for-list', ['page_type'=>'list','faqs'=>$faqs])

@endsection




{{--custom-css--}}
@section('custom-css')

    <link rel="stylesheet" href="/templates/jiaoben2806/css/bellows.min.css">
    <link rel="stylesheet" href="/templates/jiaoben2806/css/bellows-theme.min.css">
    {{--<link rel="stylesheet" href="/templates/jiaoben2806/css/main.css">--}}

@endsection


{{--custom-js--}}
@section('custom-js')
    <script src="/templates/jiaoben2806/js/highlight.pack.js"></script>
    <script src="/templates/jiaoben2806/js/velocity.min.js"></script>
    <script src="/templates/jiaoben2806/js/bellows.js"></script>
<script>

    $(function() {
//
//        $('.accordionMod .accordion-toggle').click(function () {
//
//            $(this).parents('.accordionMod').find('.accordion-inner').toggle();
//            $('.accordionMod').siblings().find('.accordion-inner').hide();
//
//        });

        $('.bellows').bellows();

    });

</script>
@endsection




@extends('frontend.template-2933.layout.layout')


{{--html.head--}}
@section('head_title')案例分享-上海捷迈文化传播有限公司@endsection
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

    @include('frontend.template-2933.module.module-faqs', ['faqs_type'=>'list','faqs'=>$faqs])

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




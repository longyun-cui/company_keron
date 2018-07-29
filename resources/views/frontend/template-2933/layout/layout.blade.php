<!DOCTYPE html>
<html lang="zh_cn">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('head_title')</title>
        <meta name="author" content="@yield('meta_author')" />
        <meta name="description" content="@yield('meta_description')" />
        <meta name="keywords" content="@yield('meta_keywords')" />

        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/styles-merged.css') }}">
        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/custom.css') }}">

        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/layer/3.0.3/skin/moon/style.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/lightcase/2.5.0/css/lightcase.min.css" rel="stylesheet">

        <link type="text/css" rel="stylesheet" href="{{ asset('common/css/common.css') }}" media="all" />
        <link type="text/css" rel="stylesheet" href="{{ asset('common/css/frontend/index.css') }}" media="all" />
        <link type="text/css" rel="stylesheet" href="{{ asset('common/css/backend/index.css') }}" media="all" />
        <link type="text/css" rel="stylesheet" href="{{ asset('root/css/index.css') }}" media="all" />
        <link type="text/css" rel="stylesheet" href="{{ asset('common/css/animate/wicked.css') }}" media="all" />
        <link type="text/css" rel="stylesheet" href="{{ asset('common/css/animate/hover.css') }}" media="all" />

        <!--[if lt IE 9]>
        <script src="{{ asset('/templates/moban2933/js/vendor/html5shiv.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2933/js/vendor/respond.min.js') }}"></script>
        <![endif]-->


        @yield('custom-css')
        @yield('custom-style')

        <style>
            .probootstrap-section .image-block { position:relative; padding-top:75%; overflow:hidden; }
            .probootstrap-section .image-block .image-container { position:absolute; top:0; bottom:0; left:0; right:0; overflow:hidden; }
            .probootstrap-section .image-block .image-container img { width:100%; height:100%; object-fit:cover;object-position: 50% 50%; }
        </style>

    </head>

    <body>

        {{--header--}}
        @yield('component-header')

        {{--content--}}
        @yield('custom-content')

        {{--footer--}}
        @yield('component-footer')



        <script src="{{ asset('/templates/moban2933/js/scripts.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2933/js/main.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2933/js/custom.js') }}"></script>


        {{--<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>--}}
        <script src="https://cdn.bootcss.com/jquery.form/4.2.2/jquery.form.min.js"></script>
        <script src="https://cdn.bootcss.com/layer/3.0.3/layer.min.js"></script>
        <script src="https://cdn.bootcss.com/lightcase/2.5.0/js/lightcase.min.js"></script>


        @yield('custom-js')
        @yield('custom-script')

    </body>

</html>
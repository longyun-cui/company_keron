<!DOCTYPE html>
<html lang="zh_cn">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" type="image/ico" href="{{ url('favicon.ico') }}">
        <link rel="shortcut icon" type="image/png" href="{{ url('favicon.png') }}">
        <link rel="icon" sizes="16x16 32x32 64x64" href="{{ url('favicon.ico') }}">
        <link rel="icon" type="image/png" sizes="196x196" href="{{ url('favicon.png') }}">

        <title>@yield('head_title')</title>
        <meta name="author" content="@yield('meta_author')" />
        <meta name="description" content="@yield('meta_description')" />
        <meta name="keywords" content="@yield('meta_keywords')" />

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="360-site-verification" content="32c2973fd745092c2d50645ce30ca0d3" />

        {{--<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">--}}

        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/styles-merged.css') }}">
        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/style.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/templates/moban2933/css/custom.css') }}">

        <link href="{{ asset('/templates/moban2933/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2933/plugins/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('/templates/moban2933/plugins/slick-nav/slicknav.css') }}" rel="stylesheet">

        <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        {{--<link href="https://cdn.bootcss.com/layer/3.0.3/skin/moon/style.min.css" rel="stylesheet">--}}
        <link rel="stylesheet" href="{{ asset('/resource/component/css/layer-style-3.0.3.min.css') }}">
        <link href="https://cdn.bootcss.com/lightcase/2.5.0/css/lightcase.min.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/fancybox/3.3.5/jquery.fancybox.css" rel="stylesheet">
        <link href="https://cdn.bootcss.com/Swiper/4.2.2/css/swiper.min.css" rel="stylesheet">

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
            .probootstrap-section .image-block { position:relative; padding-top:60%; overflow:hidden; }
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

        <script src="{{ asset('/templates/moban2933/plugins/slick-nav/jquery.slicknav.min.js') }}"></script>
        <script src="{{ asset('/templates/moban2933/plugins/slick/slick.min.js') }}"></script>

        {{--<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>--}}
        <script src="https://cdn.bootcss.com/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
        <script src="https://cdn.bootcss.com/jquery.form/4.2.2/jquery.form.min.js"></script>
        {{--<script src="https://cdn.bootcss.com/layer/3.0.3/layer.min.js"></script>--}}
        <script src="{{ asset('/resource/component/js/layer-3.0.3.min.js') }}"></script>
        <script src="https://cdn.bootcss.com/lightcase/2.5.0/js/lightcase.min.js"></script>
        <script src="https://cdn.bootcss.com/fancybox/3.3.5/jquery.fancybox.js"></script>
        <script src="https://cdn.bootcss.com/Swiper/4.2.2/js/swiper.min.js"></script>


        <script src="{{ asset('/common/js/cookie.js') }}"></script>

        <script>


            $(function() {

                if($.cookie('language') == undefined)
                {
                    console.log("undefined");
                    $.removeCookie('language');
                    $.removeCookie('language', { path: '/' });
                    $.cookie('language', 'zh_cn', { expires: 30, path: '/' });
                }

                $("#change-language").off("click").on('click', function() {

                    var $language = $.cookie('language');
                    if($language == "zh_cn")
                    {
                        $.removeCookie('language');
                        $.removeCookie('language', { path: '/' });
                        $.cookie('language', 'en', { expires: 30, path: '/' });
                    }
                    else if($language == "en")
                    {
                        $.removeCookie('language');
                        $.removeCookie('language', { path: '/' });
                        $.cookie('language', 'zh_cn', { expires: 30, path: '/' });
                    }
                    else
                    {
                        $.removeCookie('language');
                        $.removeCookie('language', { path: '/' });
                        $.cookie('language', 'zh_cn', { expires: 30, path: '/' });
                    }

                    var $request_language = getUrlParam('language');
                    if($request_language == 'en')
                    {
                        var $url = window.location.href;
                        var $url_after = changeURLArg($url,'language','zh_cn');
                        window.location.replace($url_after);
                    }
                    else if($request_language == 'zh_cn')
                    {
                        var $url = window.location.href;
                        var $url_after = changeURLArg($url,'language','en');
                        window.location.replace($url_after);
                    }
                    else
                    {
                        window.location.reload();
                    }

                });

                $('#main-slider').slick({
                    dots: false,
                    infinite: true,
                    fade: true,
                    speed: 1000,
                    autoplaySpeed: 3000,
                    "picWidth": 840, // 设置图片的宽度
                    "picHeihgt": 360, // 设置图片的高度
                    lazyLoad: 'progressive',
                    cssEase: 'linear',
                    adaptiveHeight:true,
                    autoplay: true,
                    prevArrow: '<i class="fa fa-angle-right"></i>',
                    nextArrow: '<i class="fa fa-angle-left"></i>',
                    responsive: [
                        {
                            breakpoint: 991,
                            settings: {
                                arrows: false
                            }
                        }
                    ]
                });

                $('#property-for-rent-slider').slick({
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: false,
                    infinite: true,
                    autoplay: true,
                    speed: 1000,
                    autoplaySpeed: 2000,
                    prevArrow: '<i class="fa fa-angle-left"></i>',
                    nextArrow: '<i class="fa fa-angle-right"></i>',
                    responsive: [
                        {
                            breakpoint: 992,
                            settings: {
                                slidesToShow: 3
                            }
                        },
                        {
                            breakpoint: 768,
                            settings: {
                                arrows: false,
                                slidesToShow: 2
                            }
                        },
                        {
                            breakpoint: 600,
                            settings: {
                                arrows: false,
                                slidesToShow: 1
                            }
                        }
                    ]
                });

            });

            function changeURLArg(url, arg, arg_val) {
                /// <summary>
                /// url参数替换值
                /// </summary>
                /// <param name="url">目标url </param>
                /// <param name="arg">需要替换的参数名称</param>
                ///<param name="arg_val">替换后的参数的值</param>
                /// <returns>参数替换后的url </returns>
                var pattern = arg + '=([^&]*)';
                var replaceText = arg + '=' + arg_val;
                if (url.match(pattern)) {
                    var tmp = '/(' + arg + '=)([^&]*)/gi';
                    tmp = url.replace(eval(tmp), replaceText);
                    return tmp;
                } else {
                    if (url.match('[\?]')) {
                        return url + '&' + replaceText;
                    } else {
                        return url + '?' + replaceText;
                    }
                }
                return url + '\n' + arg + '\n' + arg_val;
            }
            //获取url中的参数
            function getUrlParam(name) {
                var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)"); //构造一个含有目标参数的正则表达式对象
                var r = window.location.search.substr(1).match(reg); //匹配目标参数
                if (r != null) return unescape(r[2]); return null; //返回参数值
            }

        </script>

        <script>
            var swiper_banner = new Swiper('.swiper-container', {
                speed: 1000,
                spaceBetween: 20,
                centeredSlides: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
            var swiper_coverage = new Swiper('.swiper-coverage-', {
                slidesPerView: 3,
                spaceBetween: 30,
                freeMode: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        </script>


        @yield('custom-js')
        @yield('custom-script')

        <script>
            (function(){
                var bp = document.createElement('script');
                var curProtocol = window.location.protocol.split(':')[0];
                if (curProtocol === 'https') {
                    bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
                }
                else {
                    bp.src = 'http://push.zhanzhang.baidu.com/push.js';
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            })();
        </script>


    </body>

</html>
{{--<!-- START: header -->--}}
<header role="banner" class="probootstrap-header">
    <div class="container-fluid">
        <a href="{{ url('/') }}" class="probootstrap-logo">
            <img src="{{ url('/custom/images/logo_img.png') }}" alt="Image" style="height:64px;">
        </a>

        <a href="javascript:void(0);" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="{{ $header_home_active or '' }}"><a href="{{ url('/') }}">首页</a></li>
                <li class="{{ $header_about_active or '' }}"><a href="{{ url('/about') }}">关于我们</a></li>
                <li class="{{ $header_service_active or '' }}"><a href="{{ url('/services') }}">服务产品</a></li>
                {{--<li class="{{ $header_case_active or '' }}"><a href="{{ url('/cases') }}">案例分享</a></li>--}}
                {{--<li class="{{ $header_coverage_active or '' }}"><a href="{{ url('/coverages') }}">新闻动态</a></li>--}}
                <li class="{{ $header_contact_active or '' }}"><a href="{{ url('/contact') }}">联系我们</a></li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="javascript:void(0);" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Social</h5>
                <ul class="social-buttons">
                    <li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="icon-instagram2"></i></a></li>
                </ul>
                <p><small>&copy; Copyright 2017 uiCookies:Format. All Rights Reserved.</small></p>
            </div>
        </nav>
    </div>
</header>
{{--<!-- END: header -->--}}
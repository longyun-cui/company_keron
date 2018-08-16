{{--<!-- START: header -->--}}
<header role="banner" class="probootstrap-header">
    <div class="full-screen">

        <a href="{{ url('/') }}" class="probootstrap-logo">
            <img src="{{ url('/custom/images/logo-white.png') }}" alt="Image" style="height:40px;margin-top:-4px;">
        </a>

        <a href="javascript:void(0);" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li class="{{ $header_home_active or '' }}"><a href="{{ url('/') }}">{{ trans('custom.text.header_home') }}</a></li>
                <li class="{{ $header_about_active or '' }}"><a href="{{ url('/about_us') }}">{{ trans('custom.text.header_about') }}</a></li>
                <li class="{{ $header_service_active or '' }}"><a href="{{ url('/services') }}">{{ trans('custom.text.header_service') }}</a></li>
                <li class="{{ $header_contact_active or '' }}"><a href="{{ url('/contact') }}">{{ trans('custom.text.header_contact') }}</a></li>
                <li class="header-phone">
                    <a href="tel:{{ config('company.info.telephone') }}">
                        <i class="fa fa-mobile-phone"></i>
                        <strong>{{ config('company.info.telephone') }}</strong>
                    </a>
                </li>
                <li class="header-quote"><a href="{{ url('/quote') }}" style="color:#fff">{{ trans('custom.text.get_quote') }}</a></li>

                <li class="header-quote" style="display:none">
                    @if(App::isLocale('en'))
                        <a href="{{ url('/custom/files/KERON2018_en.pdf') }}" target="_blank" style="color:#fff">PDF</a>
                    @else
                        <a href="{{ url('/custom/files/KERON2018_zh.pdf') }}" target="_blank" style="color:#fff">PDF</a>
                    @endif
                </li>
                <li class="header-language" id="change-language" role="button">
                    @if(App::isLocale('en'))
                        <a href="javascript:void(0);" title="切换到中文">
                            <span class="{{ $english_active or '_none' }}"><b>EN</b>/中文</span>
                        </a>
                    @else
                        <a href="javascript:void(0);" title="Switch languages to English">
                            <span class="{{ $chinese_active or '_none' }}"><b>中文</b>/EN</span>
                            {{--<span class="{{ $english_active or '_none' }}" title="切换到中文"><b>EN</b>/中文</span>--}}
                        </a>
                    @endif
                </li>
            </ul>
            <div class="extra-text visible-xs">
                <a href="javascript:void(0);" class="probootstrap-burger-menu"><i>Menu</i></a>
                <h5>Social</h5>
                <ul class="social-buttons">
                    <li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
                    <li><a href="javascript:void(0);"><i class="icon-instagram2"></i></a></li>
                </ul>
                <p><small>&copy; Copyright©2018. KERON All Rights Reserved.</small></p>
            </div>
        </nav>

    </div>
</header>
{{--<!-- END: header -->--}}
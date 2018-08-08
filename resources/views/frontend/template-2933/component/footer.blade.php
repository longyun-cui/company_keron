{{--<!-- START: footer -->--}}
<footer role="contentinfo" class="probootstrap-footer background-blue">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb60 section-heading probootstrap-animate-">
                    <h2 class="module-title title-white">{{ trans('custom.text.contact_title') }}</h2>
                    {{--<p class="module-subtitle lead"><b>{{ trans('custom.text.contact_subtitle') }}</b></p>--}}
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 _none">
                    <div class="probootstrap-footer-widget">
                        <h3><b>第三方合作</b></h3>
                        <p></p>
                        <p><a href="javascript:void(0);" class="link-with-icon _none-">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                    <div class="probootstrap-footer-widget _non">
                        <h3>联系我们</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href=""><i class="icon-twitter"></i></a></li>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="probootstrap-footer-widget" style="padding-right:16px;">
                        <h3><b>{{ trans('custom.text.footer_link_title') }}</b></h3>
                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <a target="_blank" href="https://moveaide.com/movers/keron-international-relocation-shanghai-china-mover-reviews">
                                    <figure><img src="{{ url('custom/images/logo-moveaide.png') }}" alt="Image" class="img-responsive"></figure>
                                    <div class="text">
                                        <h4 style="color:#fff;">MoveAide</h4>
                                        <p>A small river named Duden flows by their place</p>
                                        <p class="secondary-color rate">
                                            <i class="icon-star-full"></i>
                                            <i class="icon-star-full"></i>
                                            <i class="icon-star-full"></i>
                                            <i class="icon-star-full"></i>
                                            <i class="icon-star-half"></i>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="mb10">
                                <a target="_blank" href="javascript:void(0);">
                                    <figure><img src="{{ url('custom/images/logo-moveaide.png') }}" alt="Image" class="img-responsive"></figure>
                                    <div class="text">
                                        <h4 style="color:#fff;">River named Duden flows</h4>
                                        <p>A small river named Duden flows by their place</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="probootstrap-footer-widget">
                        <h3><b>{{ trans('custom.text.footer_wechat_title') }}</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-qrcode" style="visibility:hidden-;"></i></b> &nbsp;&nbsp;
                                    <span><img src="{{ url(config('company.info.wechat_qrcode')) }}" alt="Wechat_Qrcode" style="height:120px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="probootstrap-footer-widget _non">
                        <h3><b>关注我们</b></h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href=""><i class="icon-twitter"></i></a></li>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3><b>{{ trans('custom.text.footer_contact_title') }}</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-location-arrow"></i></b> &nbsp;&nbsp;
                                    <span>{{ trans('custom.info.address') }}</span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-phone"></i></b> &nbsp;&nbsp;
                                    {{--<span><a href="tel:{{ config('company.info.telephone') }}" style="display:inline-block;">{{ config('company.info.telephone') }}</a></span>--}}
                                    <span>{{ config('company.info.telephone') }}</span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-envelope"></i></b> &nbsp;&nbsp;
                                    {{--<span><a href="mailto:{{ config('company.info.email') }}" style="display:inline-block;">{{ config('company.info.email') }}</a></span>--}}
                                    <span>{{ config('company.info.email') }}</span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-weixin"></i></b> &nbsp;&nbsp;
                                    <span>{{ config('company.info.wechat_id') }}</span>
                                </div>
                            </li>
                            <li class="mb10 _none">
                                <div class="text">
                                    <b><i class="fa fa-weixin"></i></b> &nbsp;&nbsp;
                                    <span><img src="{{ url(config('company.info.wechat_qrcode')) }}" alt="Wechat_Qrcode" style="height:120px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="site-footer-bottom">
        <div class="container">
            <div class="row mt20 mb20">
                <div class="col-md-12 text-center">
                    <div>
                        <small> Copyright&copy;2018. {{ config('company.info.english_name') }} KERON All Rights Reserved.</small><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<a href="javascript:void(0);" class="js-backtotop _none" style="position:fixed; right:32px; bottom:32px;"><i class="fa fa-chevron-up"></i></a>
{{--<!-- END: footer -->--}}
{{--<!-- START: footer -->--}}
<footer role="contentinfo" class="probootstrap-footer background-blue">
    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="probootstrap-footer-widget">
                        <h3><b>企业简介</b></h3>
                        <p></p>
                        <p><a href="javascript:void(0);" class="link-with-icon _none">Learn More <i class=" icon-chevron-right"></i></a></p>
                    </div>
                    <div class="probootstrap-footer-widget _none">
                        <h3>联系我们</h3>
                        <ul class="probootstrap-footer-social">
                            <li><a href=""><i class="icon-twitter"></i></a></li>
                            <li><a href=""><i class="icon-facebook"></i></a></li>
                            <li><a href=""><i class="icon-instagram2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="probootstrap-footer-widget">
                        <h3><b>微信公众号</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-qrcode" style="visibility:hidden-;"></i></b> &nbsp;&nbsp;
                                    <span><img src="{{ url(config('company.info.wechat_qrcode')) }}" alt="Wechat_Qrcode" style="height:120px;"></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="probootstrap-footer-widget">
                        <h3><b>联系我们</b></h3>

                        <ul class="probootstrap-product-list">
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-location-arrow"></i></b> &nbsp;&nbsp;
                                    <span>{{ config('company.info.address') }}</span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-phone"></i></b> &nbsp;&nbsp;
                                    <span><a href="tel:{{ config('company.info.telephone') }}" style="display:inline-block;">{{ config('company.info.telephone') }}</a></span>
                                </div>
                            </li>
                            <li class="mb10">
                                <div class="text">
                                    <b><i class="fa fa-envelope"></i></b> &nbsp;&nbsp;
                                    <span><a href="mailto:{{ config('company.info.email') }}" style="display:inline-block;">{{ config('company.info.email') }}</a></span>
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
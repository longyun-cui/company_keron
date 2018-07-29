{{--<!-- START: module-contact -->--}}
<section id="next-section" class="probootstrap-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
                <h2>联系我们</h2>
                <p class="lead">我们会第一时间给您回复.</p>
            </div>
        </div>

        <div class="row mb60">

            <div class="col-md-7 probootstrap-animate">
                <form class="probootstrap-form" id="form-contact">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">姓名 *</label>
                        <input type="text" class="form-control" name="name" id="contact-name">
                    </div>
                    <div class="form-group">
                        <label for="phone">电话 *</label>
                        <input type="phone" class="form-control" name="mobile" id="contact-mobile">
                    </div>
                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="email" class="form-control" name="email" id="contact-email">
                    </div>
                    <div class="form-group _none">
                        <label for="subject">主题</label>
                        <input type="text" class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label for="message">留言 *</label>
                        <textarea cols="30" rows="10" class="form-control" name="content" id="contact-content"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" id="contact-submit" name="submit" value="发送">
                    </div>

                </form>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:8px;color:#666;background:#f2f2f2;">
                <div class="">
                    <h2 style="color:#444;"><b>上海</b></h2>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ config('company.info.address') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
                        <li><i class="fa fa-envelope"></i><span>{{ config('company.info.email') }}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:4px;color:#666;background:#f2f2f2">
                <div class="">
                    <h2 style="color:#444;"><b>北京</b></h2>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ config('company.info.address') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
                        <li><i class="fa fa-envelope"></i><span>{{ config('company.info.email') }}</span></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="row" style="display:none;">
            <div class="col-md-4">
                <h3>New York</h3>
                <ul class="probootstrap-contact-info">
                    <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                    <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                    <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>London</h3>
                <ul class="probootstrap-contact-info">
                    <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                    <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                    <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3>Australia</h3>
                <ul class="probootstrap-contact-info">
                    <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                    <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                    <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-contact -->--}}
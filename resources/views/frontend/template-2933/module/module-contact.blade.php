{{--<!-- START: module-contact -->--}}
<section id="next-section" class="probootstrap-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate">
                <h2 class="module-title">{{ trans('custom.text.contact_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.contact_subtitle') }}</b></p>
            </div>
        </div>

        <div class="row mb60">

            <div class="col-md-7 probootstrap-animate">
                <form class="probootstrap-form" id="form-contact">

                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="name">{{ trans('custom.text.contact_message_name') }} *</label>
                        <input type="text" class="form-control" name="name" id="contact-name">
                    </div>
                    <div class="form-group">
                        <label for="phone">{{ trans('custom.text.contact_message_phone') }} *</label>
                        <input type="phone" class="form-control" name="mobile" id="contact-mobile">
                    </div>
                    <div class="form-group">
                        <label for="email">{{ trans('custom.text.contact_message_email') }}</label>
                        <input type="email" class="form-control" name="email" id="contact-email">
                    </div>
                    <div class="form-group _none">
                        <label for="subject">{{ trans('custom.text.contact_message_subject') }}</label>
                        <input type="text" class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label for="message">{{ trans('custom.text.contact_message_message') }} *</label>
                        <textarea cols="30" rows="10" class="form-control" name="content" id="contact-content"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" class="btn btn-primary" id="contact-submit" name="submit" value="{{ trans('custom.text.contact_message_submit') }}">
                    </div>

                </form>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:8px 16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:8px;color:#666;background:#f2f2f2;">
                <div class="">
                    <h3 style="color:#444;"><b>{{ trans('custom.text.contact_address_office_title') }}</b></h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ trans('custom.text.contact_address_office') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
                        <li><i class="fa fa-envelope"></i><span>{{ config('company.info.email') }}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:8px 16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:4px;color:#666;background:#f2f2f2">
                <div class="">
                    <h3 style="color:#444;"><b>{{ trans('custom.text.contact_address_warehouse_title') }}</b></h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ trans('custom.text.contact_address_warehouse') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:8px 16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:4px;color:#666;background:#f2f2f2">
                <div class="">
                    <h3 style="color:#444;"><b>{{ trans('custom.text.contact_address_office1_title') }}</b></h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ trans('custom.text.contact_address_office1') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-1 probootstrap-animate" style="padding:8px 16px;margin-bottom:16px;border: 2px solid #e6e5e5;border-radius:4px;color:#666;background:#f2f2f2">
                <div class="">
                    <h3 style="color:#444;"><b>{{ trans('custom.text.contact_address_office2_title') }}</b></h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="fa fa-location-arrow"></i> <span>{{ trans('custom.text.contact_address_office2') }}</span></li>
                        <li><i class="fa fa-phone"></i><span>{{ config('company.info.telephone') }}</span></li>
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
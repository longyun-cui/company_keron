{{--<!-- START: module-link-contact -->--}}
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 mb30 section-heading probootstrap-animate-">
                <h2 class="module-title title-white">{{ trans('custom.text.contact_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.contact_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    <a href="{{ url('/contact') }}" class="btn btn-ghost btn-ghost-white btn-lg btn-block" role="button">
                        {{ trans('custom.text.contact_link') }}
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-link-contact -->--}}
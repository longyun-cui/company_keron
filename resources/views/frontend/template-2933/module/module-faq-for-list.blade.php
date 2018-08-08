{{--<!-- START: module-faqs -->--}}
<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb40 section-heading probootstrap-animate-">
                <h2 class="module-title title-black">{{ trans('custom.text.faq_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.faq_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row _none">
            <div class="posts-block col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <article>
                    <h3 class="title">Frequently Asked Questions</h3>
                    <div class="post-content">
                        <p>
                            ...
                        </p>
                    </div>
                </article>
            </div>
            <!-- Left Section End -->
        </div>
        <div class="row mb70">

            <div class="bellows">
                @foreach($faqs as $v)
                <div class="bellows__item">
                    <div class="bellows__header">
                        <h3>{{ $v->$view_title or '' }}</h3>
                    </div>
                    <div class="bellows__content">
                        {!! $v->$view_content or '' !!}
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <div class="row _none">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    <a href="javascript:void(0);" class="btn btn-primary btn-lg btn-block" role="button">View All Services</a>
                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-faqs -->--}}



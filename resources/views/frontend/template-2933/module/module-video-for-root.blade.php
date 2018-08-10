{{--<!-- START: module-link-contact -->--}}
<section class="probootstrap-section probootstrap-section-colored"
         style="background:url({{ url(config('common.host.'.env('APP_ENV').'.cdn').'/'.$info->custom2->video_background) }})">
    <div class="container">
        <div class="row mb30 text-center">
            <div class="col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title title-white">{{ trans('custom.text.video_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.video_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-vedio" data-rel="lightcase" role="button" href="{{ trans('custom.text.video_url') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;margin-:16px auto;"></i>
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-link-contact -->--}}
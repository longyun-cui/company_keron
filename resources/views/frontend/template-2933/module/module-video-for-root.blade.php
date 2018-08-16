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

                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video- _none" data-rel="lightcase" role="button"
                       href="{{ trans('custom.text.video_player') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block lightcase-video" data-rel="lightcase" role="button"
                       href="" data-lc-options='{width:640, height:336, autoplay:false}'
                       data-lc-href="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>


                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block _none" data-fancybox- data-width="640" data-height="336"
                       href="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    <a class="btn btn-ghost btn-ghost-white btn-lg btn-block _none" data-fancybox="" href="#myVideo">
                        <i class="fa fa-play-circle-o" style="font-size:64px;"></i>
                    </a>
                    {{--<video width="640" height="336" controls="" id="myVideo" style="display:none;">--}}
                        {{--<source src="{{ config('common.host.'.env('APP_ENV').'.cdn').trans('custom.text.video') }}" type="video/mp4">--}}
                    {{--</video>--}}

                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-link-contact -->--}}
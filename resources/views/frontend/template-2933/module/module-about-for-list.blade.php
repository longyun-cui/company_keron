{{--<!-- START: module-advantage -->--}}
<section class="probootstrap-section probootstrap-section-dark">
    <div class="container full-screen-">
        <div class="row  mb70">
            <div class="col-lg-12 col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title title-white">{{ trans('custom.text.about_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.about_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row- mb70">

            @foreach($abouts as $v)
                <div class="row item-left-right-style">
                    <div class="col-md-6 col-sm-6 image-container">
                        <div class="image-box">
                            <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Images">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 text-container">
                        <div class="text-box">
                            <h1 class=" color-blue"><b>{{ $v->$view_title or '' }}</b></h1>

                            <div class="withArrow mb20">
                                {{ $v->$view_subtitle or '' }}
                            </div>
                            <a href="{{ '/about/'.$v->id }}" class="btn btn-flat btn-primary">{{ trans('custom.text.view_more') }}</a>
                        </div>
                    </div>
                </div>
            @endforeach

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
{{--<!-- END: module-advantage -->--}}
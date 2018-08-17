{{--<!-- START: module-service -->--}}
<section class="probootstrap-section probootstrap-section-colored-" id="advantage-section">
    <div class="container full-screen-">
        <div class="row _none">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2 class="module-title">{{ trans('custom.text.advantage_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.advantage_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row- mb70">
            @foreach($advantages as $v)
                <div class="row- mb80">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb30 section-heading probootstrap-animate-">
                            <h2 class="module-title">{{ $v->$view_title or '' }}</h2>
                            <p class="module-subtitle lead"><b>{{ $v->$view_subtitle or '' }}</b></p>
                        </div>
                    </div>

                    @foreach($v->items as $i)
                        <div class="row item-left-right-style">
                            <div class="col-md-6 col-sm-6 image-container">
                                <div class="image-box">
                                    <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$i->cover_pic }}" alt="Images">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-container">
                                <div class="text-box">
                                    <h1 class=" color-blue"><b>{{ $i->$view_title or '' }}</b></h1>

                                    <div class="withArrow mb20">
                                        {{ $i->$view_subtitle or '' }}
                                    </div>
                                    <a href="{{ '/advantage/'.$i->id }}" class="btn btn-flat btn-primary">{{ trans('custom.text.view_more') }}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

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
{{--<!-- END: module-service -->--}}
{{--<!-- START: module-advantage -->--}}
<section class="probootstrap-section probootstrap-section-dark" id="">
    <div class="container">
        <div class="row mb40">
            <div class="col-lg-12 col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title">{{ trans('custom.text.customer_title') }}</h2>
                <p class="lead"><b>{{ trans('custom.text.customer_subtitle') }}</b></p>
            </div>
        </div>
        <div class="row mb40">
            <div class="cooperation-container probootstrap-animate-">
                @foreach($customers as $v)
                <div class="cooperation-item col-md-3 probootstrap-box-" role="button">
                    <div class="cooperation-item-box pulse">
                        <a href="{{ $v->link_url or 'javascript:void(0);' }}" target="_blank">
                            <img class="" src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Images">
                        </a>
                        {{--<div class="icon text-center"><i class="icon-desktop"></i></div>--}}
                        {{--<img src="http://shmitong.com/uploads/image/20180414/1523706135.png" alt="">--}}
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
{{--<!-- END: module-advantage -->--}}
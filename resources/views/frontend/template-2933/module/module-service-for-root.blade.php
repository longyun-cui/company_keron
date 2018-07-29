{{--<!-- START: module-service -->--}}
<section class="probootstrap-section probootstrap-section-colored-" id="service-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2>我们的服务</h2>
                <p class="lead">力求打造中国活动策划一站式服务的第一品牌.</p>
            </div>
        </div>
        <div class="row mb70">
            @foreach($services as $v)

                <div class="col-md-3 col-sm-6 probootstrap-animate- service-item">
                    <div class="probootstrap-block-image">
                        <figure class="image-block">
                            <a href="{{ url('/services/'.$v->id) }}">
                                <div class="image-container">
                                    <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image">
                                </div>
                            </a>
                        </figure>
                        <div class="text">
                            <h3 class="mb10 title-row"><a href="{{ url('/services/'.$v->id) }}" style="">{{ $v->title or '' }}</a></h3>
                            <p class="dark">{{ $v->subtitle or '' }}</p>
                            {{--<p class="secondary-color rate">--}}
                            {{--<i class="icon-star-full"></i>--}}
                            {{--<i class="icon-star-full"></i>--}}
                            {{--<i class="icon-star-full"></i>--}}
                            {{--<i class="icon-star-full"></i>--}}
                            {{--<i class="icon-star-half"></i>--}}
                            {{--</p>--}}
                            <hr>
                            <p class="clearfix like" style="text-align: center">
                                <a class="" href="{{ url('/services/'.$v->id) }}"><span class="btn service-btn">了解更多</span></a>
                            </p>

                            <p class="clearfix like _none">
                                <span class="secondary-color rate">
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-full"></i>
                                    <i class="icon-star-half"></i>
                                </span>
                                <a class="pull-right" href="javascript:void(0);"><i class="icon-thumbs-up"></i> 5,216</a>
                                {{--<a class="pull-right" href="javascript:void(0);"><i class="icon-thumbs-down"></i> 32</a>--}}
                            </p>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate">
                <p class="text-center">
                    @if($services_type == 'root')
                        {{--<a href="{{ url('/services') }}" class="btn btn-lg btn-block btn-primary" role="button">更多服务</a>--}}
                    @elseif($services_type == 'list')
                        {{ $services->links() }}
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-service -->--}}
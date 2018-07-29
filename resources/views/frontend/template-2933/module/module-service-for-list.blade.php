{{--<!-- START: module-service -->--}}
<section class="probootstrap-section probootstrap-section-colored-" id="service-section">
    <div class="container">
        <div class="row _none">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2>我们的服务</h2>
                <p class="lead">力求打造中国活动策划一站式服务的第一品牌.</p>
            </div>
        </div>
        <div class="row mb70">
            @foreach($services as $v)
                <div class="row mb70">

                    <div class="row">
                        <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                            <h2>{{ $v->title or '' }}</h2>
                            <p class="lead">{{ $v->subtitle or '' }}</p>
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
                                    <h1 class=" color-blue"><b>{{ $i->title or '' }}</b></h1>

                                    <ul class="withArrow">
                                        <li> {{ $i->subtitle or '' }} </li>
                                    </ul>
                                    <a href="{{ '/service/'.$i->id }}" class="btn btn-flat btn-primary">了解更多</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            @endforeach

        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate">
                <p class="text-center">
                    @if($services_type == 'root')
                        {{--<a href="{{ url('/services') }}" class="btn btn-lg btn-block btn-primary" role="button">更多服务</a>--}}
                    @elseif($services_type == 'list')
                        {{--{{ $services->links() }}--}}
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-service -->--}}
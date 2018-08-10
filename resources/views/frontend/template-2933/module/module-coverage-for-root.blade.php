{{--<!-- START: module-coverage -->--}}
<section class="probootstrap-section probootstrap-section-colored" id="coverage-section">

    <div class="container">
        <div class="row mb40">
            <div class="col-lg-12 col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title title-white">{{ trans('custom.text.coverage_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.coverage_subtitle') }}</b></p>
            </div>
        </div>

        <div class="row probootstrap-gutter0 mb40 _none">
            <div class="col-md-12">
                <div class="probootstrap-footer-widget">
                    {{--<h3>Popular Products</h3>--}}
                    <ul class="probootstrap-product-list">
                        @foreach($coverages as $v)
                            <div class="col-md-4 col-sm-6 coverage-item">
                                <li class="mb20">
                                    <a href="{{ url('/coverage/'.$v->id) }}">
                                        <figure class="image-block--">
                                            <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image" class="img-responsive">
                                        </figure>
                                        <div class="text">
                                            <h4><b>{{ $v->title or '' }}</b></h4>
                                            <p>{{ $v->subtitle or '' }} 理（上海）有限公司是一家成立于2005年，主要提供本地搬家业务&nbsp;</p>
                                            <p class="secondary-color rate"><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-half"></i></p>
                                        </div>
                                    </a>
                                </li>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <div class="row probootstrap-gutter0 mb40">
            <div class="col-md-12">
                <div class="probootstrap-footer-widget">
                    {{--<h3>Popular Products</h3>--}}
                    <ul class="probootstrap-product-list" id="property-for-rent-slider">
                        @foreach($coverages as $v)
                            <div class="col-md-3 col-sm-3 swiper-slide probootstrap-animate-">
                                <div class="probootstrap-box">
                                    {{--<div class="icon text-center"><i class="icon-desktop"></i></div>--}}
                                    <figure class="image-block mb20">
                                        <div class="image-container">
                                            <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image">
                                        </div>
                                    </figure>

                                    <h4 class="text-center"><b>{{ $v->title or '' }}</b></h4>
                                    {{--<p>{{ $v->subtitle or '' }}</p>--}}
                                    <hr>
                                    <div class="clearfix like" style="text-align: center">
                                        <a class="" href="{{ url('/coverage/'.$v->id) }}">
                                            <span class="btn service-btn">{{ trans('custom.text.coverage_more') }}</span>
                                        </a>
                                    </div>
                                    <div class="text-left with-icon colored _none">
                                        {{--<li><i class="icon-radio-checked"></i> <span>A small river named Duden</span></li>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    @if($page_type == 'root')
                        {{--<a href="{{ url('/coverages') }}" class="btn btn-lg btn-block btn-primary" role="button">--}}
                        <a href="{{ url('/coverages') }}" class="btn btn-lg btn-block btn-ghost btn-ghost-white" role="button">
                            {{ trans('custom.text.coverage_more') }}
                        </a>
                    @elseif($page_type == 'list')
                        {{ $coverages->links() }}
                    @endif
                </p>
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-coverage -->--}}
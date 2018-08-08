{{--<!-- START: module-coverage -->--}}
<section class="probootstrap-section probootstrap-section-dark" id="coverage-list-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2 class="module-title title-black">{{ trans('custom.text.coverage_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.coverage_subtitle') }}</b></p>
            </div>
        </div>

        <div class="row probootstrap-gutter0 mb70 _none">
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
                                            <p>{{ $v->subtitle or '' }}</p>
                                            <p class="secondary-color rate _none">
                                                <i class="icon-star-full"></i>
                                                <i class="icon-star-full"></i>
                                                <i class="icon-star-full"></i>
                                                <i class="icon-star-full"></i>
                                                <i class="icon-star-half"></i>
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            </div>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>


        <div class="row probootstrap-gutter0 mb70">
            <div class="col-md-12">
                <div class="probootstrap-footer-widget">
                    {{--<h3>Popular Products</h3>--}}
                    <ul class="probootstrap-product-list">
                        @foreach($coverages as $v)
                            <div class="col-md-3 col-sm-3 probootstrap-animate-">
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
                    {{ $coverages->links() }}
                </p>
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-coverage -->--}}
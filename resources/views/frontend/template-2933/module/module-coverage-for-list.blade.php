{{--<!-- START: module-coverage -->--}}
<section class="probootstrap-section probootstrap-section-dark" id="coverage-list-section">

    <div class="container">
        <div class="row mb40">
            <div class="col-lg-12 col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title title-black">{{ trans('custom.text.coverage_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.coverage_subtitle') }}</b></p>
            </div>
        </div>


        <div class="row probootstrap-gutter0 mb40">
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
                                            <span class="btn service-btn">{{ trans('custom.text.coverage_detail') }}</span>
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
            <div class="col-md-12 probootstrap-animate- text-center">
                {{ $coverages->links() }}
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-coverage -->--}}
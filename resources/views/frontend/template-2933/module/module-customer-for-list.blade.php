{{--<!-- START: module-coverage -->--}}
<section class="probootstrap-section probootstrap-section-dark" id="coverage-list-section">

    <div class="container">
        <div class="row mb40">
            <div class="col-lg-12 col-md-12 section-heading probootstrap-animate-">
                <h2 class="module-title title-black">{{ trans('custom.text.customer_title') }}</h2>
                <p class="module-subtitle lead"><b>{{ trans('custom.text.customer_subtitle') }}</b></p>
            </div>
        </div>


        <div class="row probootstrap-gutter0 mb40">
            <div class="col-md-12">
                <div class="probootstrap-footer-widget">
                    {{--<h3>Popular Products</h3>--}}
                    <ul class="probootstrap-product-list">
                        @foreach($customers as $v)
                            <div class="col-md-3 col-sm-3 probootstrap-animate-">
                                <div class="probootstrap-box">
                                    {{--<div class="icon text-center"><i class="icon-desktop"></i></div>--}}
                                    <figure class="image-block mb20">
                                        <div class="image-container">
                                            <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image">
                                        </div>
                                    </figure>

                                    <hr>
                                    <h4 class="text-center"><b>{{ $v->$view_title or '' }}</b></h4>
                                    {{--<p>{{ $v->subtitle or '' }}</p>--}}
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
                    {{ $customers->links() }}
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-coverage -->--}}
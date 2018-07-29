{{--<!-- START: module-coverage -->--}}
<section class="probootstrap-section " id="coverage-section">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2>资讯动态</h2>
                <p class="lead">用户至上，品牌第一.</p>
            </div>
        </div>

        <div class="row probootstrap-gutter0 mb70">

            {{----}}
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
                                            <h4>{{ $v->title or '' }}</h4>
                                            <p>{{ $v->subtitle or '' }} &nbsp;</p>
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

        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    @if($coverages_type == 'root')
                        <a href="{{ url('/coverages') }}" class="btn btn-lg btn-block btn-primary" role="button">更多资讯</a>
                    @elseif($coverages_type == 'list')
                        {{ $coverages->links() }}
                    @endif
                </p>
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-coverage -->--}}
{{--<!-- START: module-case -->--}}
<section class="probootstrap-section @if($cases_type == 'root') probootstrap-section-colored @endif" id="case-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2>案例分享</h2>
                <p class="lead">用户至上，品牌第一.</p>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row probootstrap-gutter0 mb70">

            @foreach($cases as $v)
                <div class="col-md-4 col-sm-6 case-item">
                    <a href="{{ url('/case/'.$v->id) }}" class="probootstrap-hover-overlay image-block">
                        <div class="image-container">
                            <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image" class="img-responsive">
                        </div>
                        <div class="probootstrap-text-overlay">
                            <h3>{{ $v->title or '' }}</h3>
                            <p>{{ $v->subtitle or '' }}</p>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        <div class="row">
            <div class="col-md-4 col-md-offset-4 probootstrap-animate-">
                <p class="text-center">
                    @if($cases_type == 'root')
                        <a href="{{ url('/cases') }}" class="btn btn-lg btn-block btn-ghost btn-ghost-white" role="button">更多案例</a>
                    @elseif($cases_type == 'list')
                        {{ $cases->links() }}
                    @endif
                </p>
            </div>
        </div>

    </div>
</section>
{{--<!-- END: module-case -->--}}
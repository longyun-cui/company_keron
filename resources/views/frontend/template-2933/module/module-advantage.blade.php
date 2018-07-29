{{--<!-- START: module-advantage -->--}}
<section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 mb70 section-heading probootstrap-animate-">
                <h2>为什么选择KERON？</h2>
                <p class="lead"></p>
            </div>
        </div>
        <div class="row mb70">

            @foreach($advantages as $v)
                <a href="http://local-keron.com/advantage/{{ $v->id or 0 }}">
                    <div class="col-md-4 probootstrap-animate-">
                        <div class="probootstrap-box">
                            {{--<div class="icon text-center"><i class="icon-desktop"></i></div>--}}

                            <figure class="image-block mb20">
                                <div class="image-container">
                                    <img src="{{ config('common.host.'.env('APP_ENV').'.cdn').'/'.$v->cover_pic }}" alt="Image">
                                </div>
                            </figure>

                            <h3 class="text-center"><b>{{ $v->title or '' }}</b></h3>
                            <p>{{ $v->subtitle or '' }}</p>
                            <ul class="text-left with-icon colored _none">
                                <li><i class="icon-radio-checked"></i> <span>A small river named Duden</span></li>
                            </ul>
                        </div>
                    </div>
                </a>
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
{{--<!-- END: module-advantage -->--}}
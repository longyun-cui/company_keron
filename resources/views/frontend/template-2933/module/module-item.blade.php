{{--<!-- START: module-advantage -->--}}
<section id="next-section" class="probootstrap-section">
    <div class="container">
        <div class="col-md-3 col-md-push-9 _none">
            <h2>Description</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            <p class="mb20">
                <strong class="probootstrap-black-color">Role:</strong> <br>
                Design <br>
                Branding <br>
                Mobile Design
            </p>
            <p class="mb50">
                <strong class="probootstrap-black-color">Client</strong> <br>
                Google, Inc.
            </p>

            <p>
                <a href="portfolio-single.html#" role="button" class="btn btn-primary">Visit Website</a>
            </p>
        </div>
        <div class="col-md-12 col-md-pull-0">
            <div class="row" style="text-align:center;">
                <div class="col-lg-12 col-md-12 mb20">
                    <h1><b>{{ $item->title or '' }}</b></h1>
                    <p class="">{{ $item->subtitle or '' }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 mb20">
                    {!! $item->content or '' !!}
                </div>
            </div>
        </div>
    </div>
</section>
{{--<!-- END: module-advantage -->--}}
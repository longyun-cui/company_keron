{{--<!-- START: banner -->--}}
<section class="probootstrap-intro banner-for-page" style-="background-image: url({{ $banner_page_background or '' }}); background-position: center center;" data-stellar-background-ratio="0.5">
    <div class="block-fill">
        <div class="block-fill">

            <img src="@yield('banner-image')" alt="">

            <div class="probootstrap-intro-text">
                <div class="banner-title-box">
                    <div class="banner-title-bin">
                        <h1 class="probootstrap-animate">{{ $banner_page_title or '' }}</h1>
                    </div>
                </div>
                <p class="watch-intro probootstrap-animate"><a href="" class="popup-vimeo">Watch the video <i class="icon-play2"></i></a></p>
            </div>

        </div>
    </div>
    {{--<a class="probootstrap-scroll-down js-next" href="index.html#next-section">Scroll down <i class="icon-chevron-down"></i></a>--}}
</section>
{{--<!-- END: banner -->--}}
{{--<!-- START: module-activity -->--}}
<section class="probootstrap-section" style="height:64px;padding:0;">
    @if(isset($activity))
    <div class="container" style="height:100%;position:relative;">
        <div class="row activity-row">
            <span class="activity-title @if(App::isLocale('en')) title-en @else title-zh @endif microsoft pull-left">
                <b>{{ trans('custom.text.activity_title') }}</b>
            </span>
            <span class="activity-body @if(App::isLocale('en')) body-en @else body-zh @endif">
                <span class="marquee">
                    <b>{{ $activity->$view_title or '' }}</b> {{ $activity->$view_subtitle or '' }}
                </span>
            </span>
            <span class="activity-link-button pull-right" role="button">
                <a href="{{ url('/activity/'.$activity->id) }}"><b>{{ trans('custom.text.view_more') }}</b></a>
            </span>
        </div>
    </div>
    @endif
</section>

<style>

    /* Make it pretty */
    .microsoft {
        /*padding-left: 1.5em;*/
        position: relative;
        font-size: 20px;
    }
    .microsoft:before, .microsoft::before {
        position: absolute;
        left: -36px;
        /*top: -16px;*/
        width: 16px;
        height: 16px;
        content: '';
        box-shadow: 0 16px 0 #F65314, 20px 36px 0 #7CBB00, 0 36px 0 #00A1F1, 20px 16px 0 #FFBB00;
        z-index: 2;
    }
    /*.microsoft:after, .microsoft::after {*/
        /*position: absolute;*/
        /*top: -16px;*/
        /*left: -16px;*/
        /*width: 16px;*/
        /*height: 16px;*/
        /*content: '';*/
        /*background-image: linear-gradient(90deg, white 70%, rgba(255,255,255,0));*/
        /*z-index: 1;*/
    /*}*/


    .activity-row {
        position: relative;
        height: 100%;
        font-size: 16px;
    }
    .activity-title {
        height: 100%; line-height: 68px; padding: 0 8px;
        text-align: center; color: #ea5d5f; font-size: 16px; background: #fff;
        float: left;
        z-index: 3;
    }
    .activity-title.title-zh { width: 88px; }
    .activity-title.title-en { width: 180px; }

    .activity-body {
        position: relative;
        height: 100%;
        line-height: 68px;
        margin: 0 auto;
        white-space: nowrap;
        box-sizing: border-box;
        overflow: hidden;
        float: left;
        z-index: 1;
    }
    .activity-body.body-zh {
        width: calc(100% - 208px);
        width: -moz-calc(100% - 208px);
        width: -webkit-calc(100% - 208px);
    }
    .activity-body.body-en {
        width: calc(100% - 300px);
        width: -moz-calc(100% - 300px);
        width: -webkit-calc(100% - 300px);
    }

    .activity-link-button {
        width: 120px; height: 40px; line-height: 40px; margin-top: 12px;
        text-align: center; color:#fff; background: #ea5d5f;
        z-index: 3;
    }
    .activity-link-button a { color: #fff; }
    .activity-link-button:hover { background: #337ab7; }

    @media screen and (max-width:768px) {
        .activity-row { font-size: 14px; }
        .activity-title { padding: 16px 4px; line-height: 18px; font-size: 14px; }
        .activity-title.title-zh { width: 48px; }
        .activity-title.title-en { width: 96px; }
        .activity-body.body-zh {
            width: calc(100% - 128px);
            width: -moz-calc(100% - 128px);
            width: -webkit-calc(100% - 128px);
        }
        .activity-body.body-en {
            width: calc(100% - 176px);
            width: -moz-calc(100% - 176px);
            width: -webkit-calc(100% - 176px);
        }
        .activity-link-button { width: 80px; }
    }

    .marquee {
        position:relative;
        width: 100%;
        height: 100%;
        float: left;
        animation: marquee 5s linear infinite;
    }
    .marquee:hover { animation-play-state: paused }

    /* Make it move */
    @keyframes marquee {
        0%   { text-indent: 100% }
        100% { text-indent: 0 }
    }
    @media screen and (max-width:768px) {
        .marquee { animation: marquee 5s linear infinite;}
        @keyframes marquee {
            0%   { text-indent: 100% }
            100% { text-indent: -20% }
        }
    }





</style>
{{--<!-- END: module-activity -->--}}
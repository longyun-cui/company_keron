{{--<!-- START: module-advantage -->--}}
<section class="probootstrap-section" style="height:64px;padding:0;">
    @if(isset($activity))
    <div class="container" style="height:100%;position:relative;">
        <div class="row activity-row">
            <span class="activity-title pull-left"><b>{{ trans('custom.text.activity_title') }}</b></span>
            <span class="microsoft marquee">
                <b>{{ $activity->$view_title or '' }}</b> {{ $activity->$view_subtitle or '' }}
            </span>
            <a href="{{ url('/activity/'.$activity->id) }}" class="activity-link-button"><b>{{ trans('custom.text.view_more') }}</b></a>
        </div>
    </div>
    @endif
</section>

<style>
    .activity-row { position:relative;height:100%;font-size:16px; }
    .activity-title { width:108px;height:100%;color:#ea5d5f;line-height:72px;text-align:right;padding-left:8px; }
    .activity-title:before, .activity-title::before {
        position: absolute; left:-36px; width: 16px; height: 16px;
        z-index: 2;
        content: '';
        /*top: -1em;*/
        box-shadow: 0 16px 0 #F65314, 20px 36px 0 #7CBB00, 0 36px 0 #00A1F1, 20px 16px 0 #FFBB00;
    }
    .activity-link-button { width:120px;height:40px;line-height:40px;color:#fff;background:#ea5d5f;margin-top:12px;text-align:center;float:right; }
    .activity-link-button:hover { background:#337ab7; }
    .marquee {
        position:relative;
        width: calc(100% - 268px);
        width: -moz-calc(100% - 268px);
        width: -webkit-calc(100% - 268px);
        height:100%;
        line-height:64px;
        margin: 0 auto;
        overflow: hidden;
        white-space: nowrap;
        box-sizing: border-box;
        animation: marquee 15s linear infinite;
        float:left;
    }

    @media screen and (max-width:768px) {
        .activity-row { font-size:14px; }
        .activity-title { width:96px;padding-left:8px; }
        .activity-link-button { width:100px; }
        .marquee {
            width: calc(100% - 200px);
            width: -moz-calc(100% - 200px);
            width: -webkit-calc(100% - 200px);
            animation: marquee 5s linear infinite;}
    }

    .marquee:hover {
        animation-play-state: paused
    }

    /* Make it move */
    @keyframes marquee {
        0%   { text-indent: 80% }
        100% { text-indent: 0 }
    }

    /* Make it pretty */
    .microsoft {
        /*padding-left: 1.5em;*/
        position: relative;
        font-size: 20px;
    }

    /* ::before was :before before ::before was ::before - kthx */

    .microsoft:after, .microsoft::after {
        z-index: 1;
        content: '';
        position: absolute;
        top: 0; left: 0;
        width: 16px; height: 16px;
        background-image: linear-gradient(90deg, white 70%, rgba(255,255,255,0));
    }
</style>
{{--<!-- END: module-advantage -->--}}
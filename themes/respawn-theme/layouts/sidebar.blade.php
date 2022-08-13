<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 d-none d-lg-block">

    <div class="supp-wgt">
        <ul class="list-group list-unstyled small">
            <li class="pb-1 pt-2">
                <div class="text-center">
                    <i class="fa fa-fw fa-clock"></i> {{ __('sidebar.information.time') }}
                </div>
                <div class="text-center pt-3">
                    <span class="" style="font-size: 30px;" id="timerCurrent">{{ \Carbon\Carbon::now()->format('H:i:s') }}</span>
                </div>
            </li>
        </ul>
    </div>


    <div class="supp-wgt">
        <ul class="list-group list-unstyled small">
            <li>
                <div class="float-left">
                    <p class="font-weight-light font-weight-bold pt-3" style="font-size: 14px;"> Players {{ __('sidebar.information.online') }}</p>
                </div>
                <div class="float-right">
                    <p class="font-weight-light pt-3"> @include('theme::layouts.playercount')</p>
                </div>
            </li>
        </ul>
    </div>

    <div id="team-matches-slider-2" class="widget widget_team-matches widget_team-matches_respawn">
        <div data-slick='{&quot;autoplay&quot;: true, &quot;dots&quot;: true, &quot;infinite&quot;: true, &quot;speed&quot;: &quot;500&quot;,&quot;fade&quot;: true,&quot;cssEase&quot;: &quot;linear&quot; }' class="matches_slider center slider-carousel slick-arrows-fix">

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fas fa-fw fa-check"></i>
                            <h4>{{ __('sidebar.information.cap') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_cap', 110) }}</div>

                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fas fa-fw fa-flask"></i>
                            <h4>{{ __('sidebar.information.exp-sp') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_exp', 1) }}x</div>

                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fa fa-fw fa-users"></i>
                            <h4>{{ __('sidebar.information.party-exp') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_exp_party', 1) }}x</div>

                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fa fa-fw fa-coins"></i>
                            <h4>{{ __('sidebar.information.gold') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_exp_gold', 1) }}x</div>

                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fa fa-fw fa-coins"></i>
                            <h4>{{ __('sidebar.information.drop') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_exp_drop', 1) }}x</div>

                        </div>
                    </div>
                </a>
            </div>

            <div>
                <a class="mc-wrap">
                    <div class="mc-infowrap">
                        <div class="mbtitle-wrapper">
                            <i class="lazy fa fa-fw fa-star"></i>
                            <h4>{{ __('sidebar.information.trade-goods') }}</h4>
                            <h5></h5>
                        </div>
                        <div class="bmatchscore">

                            <div class="vsresult">{{ config('siteSettings.sro_exp_job', 1) }}x</div>

                        </div>
                    </div>
                </a>
            </div>

            @if(config('siteSettings.sro_ip_limit'))

                <div>
                    <a class="mc-wrap">
                        <div class="mc-infowrap">
                            <div class="mbtitle-wrapper">
                                <i class="lazy fa fa-fw fa-exclamation"></i>
                                <h4>{{ __('sidebar.information.ip-limit') }}</h4>
                                <h5></h5>
                            </div>
                            <div class="bmatchscore">

                                <div class="vsresult">{{ config('siteSettings.sro_ip_limit', 1) }}</div>

                            </div>
                        </div>
                    </a>
                </div>

            @endif

            @if(config('siteSettings.sro_hwid_limit'))

                <div>
                    <a class="mc-wrap">
                        <div class="mc-infowrap">
                            <div class="mbtitle-wrapper">
                                <i class="lazy fa fa-fw fa-star"></i>
                                <h4>{{ __('sidebar.information.pc-limit') }}</h4>
                                <h5></h5>
                            </div>
                            <div class="bmatchscore">

                                <div class="vsresult">{{ config('siteSettings.sro_hwid_limit', 1) }}</div>

                            </div>
                        </div>
                    </a>
                </div>

            @endif

        </div>
    </div>

    @include('theme::layouts.supportersonline')

    @include('theme::layouts.jobranking')

    @include('theme::layouts.fortress')

    @include('theme::layouts.timers')

    @include('theme::layouts.discord')

</div>

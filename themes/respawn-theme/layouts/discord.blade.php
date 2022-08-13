@isset($DiscordProvider)

        <div id="plus-pricing-table" class="plus-pricing-table pricing-style-1 hover_normal ">
            <div class="pricing-table-inner">
                <div class="pricing-title-content style-1">
                    <div class="pricing-title-wrap">
                        <div class="pricing-title">{{ __('sidebar.discord.title') }}</div>
                    </div>
                </div>
                <div class="pricing-price-wrap style-1"><span class="price-postfix-text">{{ __('sidebar.discord.online', ['online' => $DiscordProvider['presence_count']]) }}</span></div>

                <div class="pricing-content-wrap listing-content style-1">

                    <ul class="plus-icon-list-items">
                        @forelse($DiscordProvider['members'] as $discord)
                        <li id="tooltip5f7194802b08f" class="plus-icon-list-item elementor-repeater-item-cc82060" data-local="true" data-tippy="" data-tippy-placement="right" data-tippy-interactive="true" data-tippy-theme="dark" data-tippy-arrow="true" data-tippy-arrowtype="round" data-tippy-animation="fade" data-tippy-offset="0,5" data-original-title="Almost Unlimited Space!">
                            <span class="plus-icon-list-icon">
                                <img src="{{ $discord['avatar_url'] }}" class="img-fluid img-rounded" loading="lazy" style="max-width: 20px;border-radius: 25px;margin-left: 10px;"/>
                            </span>
                            <span class="plus-icon-list-text">
                                <p><strong><span style="color: #ffffff;">{{ $discord['username'] }}</span></strong> @if(array_key_exists('game', $discord)) <span class="float-right small pt-1 pr-2">{{ $discord['game']['name'] }}</span> @endif</p>
                            </span>
                            <script>
                                jQuery( document ).ready(function() {
                                    "use strict";
                                    tippy( "#tooltip5f7194802b08f" , {
                                        arrowType : "round",
                                        duration : [250,200],
                                        trigger : "mouseenter",
                                        appendTo: document.querySelector("#tooltip5f7194802b08f")
                                    });
                                });
                            </script>
                        </li>
                        @empty
                            {{ __('sidebar.discord.empty') }}
                        @endforelse
                    </ul>

                    @if(array_key_exists('instant_invite', $DiscordProvider))
                        @if($DiscordProvider['instant_invite'] !== null)
                          <a href="{{ $DiscordProvider['instant_invite'] }}" class="btn read-more-options more" data-default-load="2" data-more-text="+ Join" data-less-text="- Less options">+ {{ __('sidebar.discord.join') }}</a>
                        @endif
                    @endif

                    <div class="content-overlay-bg-color"></div>
                </div>
                <div class="pricing-overlay-color"></div>
            </div>
        </div>

@endisset

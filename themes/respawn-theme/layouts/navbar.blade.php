<header id="custom__menu" class="right-aligned-menu   page_header  mobmenu">
    <!-- Main menu container -->
    <div class="header-bottom">
        <div class="container">
            <div class="hlogo">
                <div class="hlogoinner">
                    <a href="{{ url('/') }}">
                        <img class="lazy" alt="Respawn" src="{{ asset('themes/respawn-theme/assets/img/logo-main.png') }}" data-src="{{ asset('themes/respawn-theme/assets/img/logo-main.png') }}" />
                        <img class="fixed_header_logo lazy" alt="Respawn" src="{{ asset('themes/respawn-theme/assets/img/logo-main.png') }}" data-src="{{ asset('themes/respawn-theme/assets/img/logo-main.png') }}" />
                    </a>
                </div>
            </div>
            <div class="mainmenucont menucont cl-effect-6">
                <div id="mega-menu-wrap-header-menu" class="mega-menu-wrap">
                    <div class="mega-menu-toggle">
                        <div class="mega-toggle-blocks-left"></div>
                        <div class="mega-toggle-blocks-center"></div>
                        <div class="mega-toggle-blocks-right">
                            <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1' id='mega-toggle-block-1'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                                 <span class="mega-toggle-animated-box">
                                 <span class="mega-toggle-animated-inner"></span>
                                 </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul id="mega-menu-header-menu" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-panel-width=".container" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="1000" data-unbind="true" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                        <li class='mega-menu-item '>
                            <a class="mega-menu-link" href="{{ url('/') }}" tabindex="0">{{ __('navbar.nav.home') }}</a>
                        </li>
                        <li class='mega-menu-item'>
                            <a class="mega-menu-link" href="{{ route('downloads-index') }}" tabindex="0">{{ __('navbar.nav.download') }}</a>
                        </li>
                        <li class='mega-menu-item'>
                            <a class="mega-menu-link" href="{{ route('ranking.char') }}" tabindex="0">{{ __('navbar.nav.ranking') }}</a>
                        </li>
                        <li class='mega-menu-item'>
                            <a class="mega-menu-link" href="{{ route('auctions-house') }}" tabindex="0">{{ __('navbar.nav.auction-house') }}</a>
                        </li>
                        <li class='mega-menu-item'>
                            <a class="mega-menu-link" href="{{ route('worldmap') }}" tabindex="0">{{ __('navbar.nav.worldmap') }}</a>
                        </li>

                        <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current-menu-ancestor mega-current-menu-parent mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-4350">
                            <a class="mega-menu-link" href="#" aria-haspopup="true" aria-expanded="false" tabindex="0">{{ __('navbar.nav.pages') }}<span class="mega-indicator" data-has-click-event="true"></span></a>
                            <ul class="mega-sub-menu">
                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-menu-item-73153" id="mega-menu-item-73153"><a class="mega-menu-link" href="{{ route('server-information') }}">{{ __('navbar.nav.serverinformation') }}</a></li>

                                @foreach($NavbarPagesProvider as $pages)
                                    <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-menu-item-73153" id="mega-menu-item-73153"><a class="mega-menu-link" href="{{ route('pages-content', ['slug' => $pages->slug]) }}">{{ $pages->title }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="fullscreen-menu">
                <div class="menuArea">
                    <input type="checkbox" id="mobilemenu">
                    <label for="mobilemenu" class="menuOpen">
                        <span class="open"></span>
                    </label>
                    <div class="menu menuEffects">
                        <label for="mobilemenu"></label>
                        <div class="menuContent">
                            <div id="mega-menu-wrap-header-menu" class="mega-menu-wrap">
                                <div class="mega-menu-toggle">
                                    <div class="mega-toggle-blocks-left"></div>
                                    <div class="mega-toggle-blocks-center"></div>
                                    <div class="mega-toggle-blocks-right">
                                        <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-1' id='mega-toggle-block-1'><button aria-label="Toggle Menu" class="mega-toggle-animated mega-toggle-animated-slider" type="button" aria-expanded="false">
                                          <span class="mega-toggle-animated-box">
                                          <span class="mega-toggle-animated-inner"></span>
                                          </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <ul id="mega-menu-header-menu" class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js" data-event="hover_intent" data-effect="fade_up" data-effect-speed="200" data-effect-mobile="disabled" data-effect-speed-mobile="0" data-panel-width=".container" data-mobile-force-width="false" data-second-click="go" data-document-click="collapse" data-vertical-behaviour="standard" data-breakpoint="1000" data-unbind="true" data-hover-intent-timeout="300" data-hover-intent-interval="100">
                                    <li class='mega-menu-item '>
                                        <a class="mega-menu-link" href="{{ url('/') }}" tabindex="0">{{ __('navbar.nav.home') }}</a>
                                    </li>
                                    <li class='mega-menu-item'>
                                        <a class="mega-menu-link" href="{{ route('downloads-index') }}" tabindex="0">{{ __('navbar.nav.download') }}</a>
                                    </li>
                                    <li class='mega-menu-item'>
                                        <a class="mega-menu-link" href="{{ route('donations-index') }}" tabindex="0">{{ __('navbar.nav.donations') }}</a>
                                    </li>
                                    <li class='mega-menu-item'>
                                        <a class="mega-menu-link" href="{{ route('ranking.char') }}" tabindex="0">{{ __('navbar.nav.ranking') }}</a>
                                    </li>
                                    <li class='mega-menu-item'>
                                        <a class="mega-menu-link" href="{{ route('auctions-house') }}" tabindex="0">{{ __('navbar.nav.auction-house') }}</a>
                                    </li>
                                    <li class='mega-menu-item'>
                                        <a class="mega-menu-link" href="{{ route('worldmap') }}" tabindex="0">{{ __('navbar.nav.worldmap') }}</a>
                                    </li>

                                    <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-current-menu-ancestor mega-current-menu-parent mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-4350">
                                        <a class="mega-menu-link" href="#" aria-haspopup="true" aria-expanded="false" tabindex="0">{{ __('navbar.nav.pages') }}<span class="mega-indicator" data-has-click-event="true"></span></a>
                                        <ul class="mega-sub-menu">
                                            <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-menu-item-73153" id="mega-menu-item-73153"><a class="mega-menu-link" href="{{ route('server-information') }}">{{ __('navbar.nav.serverinformation') }}</a></li>

                                            @foreach($NavbarPagesProvider as $pages)
                                                <li class="mega-menu-item mega-menu-item-type-custom mega-menu-item-object-custom mega-current-menu-item mega-menu-item-73153" id="mega-menu-item-73153"><a class="mega-menu-link" href="{{ route('pages-content', ['slug' => $pages->slug]) }}">{{ $pages->title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav langs">

                @if(count(config('language')) > 1)
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img class="small" src="{{ config('language.' . Session::get('locale', 'en') . '.icon') }}" width="26px" height="16px"> {{ config('language.' . Session::get('locale', 'en') . '.name') }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @foreach(config('language') as $key => $lang)
                                @if($key !== 'example')
                                    <a class="dropdown-item" href="{{ route('change-language', ['lang' => $key]) }}">
                                        <img class="small" src="{{ $lang['icon'] }}" width="26px" height="16px"> {{ $lang['name'] }}
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </li>
                @endif

            </ul>

            {{--
            <div class="hsocial">
                @if(config('siteSettings.facebook_url'))
                    <a href="{{ config('siteSettings.facebook_url') }}" rel="noopener"
                       class="facebook" target="_blank">
                        <i class="fab fa-facebook"></i>
                    </a>
                @endif
                @if(config('siteSettings.youtube_url'))
                    <a href="{{ config('siteSettings.youtube_url') }}" rel="noopener"
                       class="youtube" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                @endif
            </div>
            --}}

            @guest

                <div class="hsearch hcart">
                    <a href="{{ route('login') }}" class="btn" style="padding-right: 15px;"><i class="fa fa-user" aria-hidden="true"></i> {{ __('navbar.login') }}</a>
                </div>

                @if (Route::has('register'))

                    <div class="hsearch hcart">
                        <a href="{{ route('register') }}" class="btn" style="padding-right: 15px;background-color: white;color: #696bff !important;"><i class="fa fa-lock" aria-hidden="true"></i> {{ __('navbar.register') }}</a>
                    </div>

                @endif
            @else

                <div class="hsearch hcart">
                    <a href="{{ route('notification') }}" class="btn"><i class="fas fa-bell" aria-hidden="true"></i> @if($NotificationsCountProvider > 0)<span>{{ $NotificationsCountProvider }}</span>@endif</a>
                </div>

                <ul class="navbar-nav">
                    <li class="nav-item dropdown hsearch hcart">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="padding-right: 15px;background-color: white;color: #696bff !important;">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="top: 10px; left: 0px;">
                            <a class="dropdown-item" href="{{ route('home') }}">
                                {{ __('navbar.home') }}
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('navbar.logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            @role('administrator')
                            <a class="dropdown-item" href="{{ route('index-backend') }}">
                                {{ __('navbar.backend') }}
                            </a>
                            @endrole
                        </div>
                    </li>
                </ul>
            @endguest

            <div class="clear"></div>
        </div>
    </div>
    <div id="search_wrapper">
        <form method="get" id="searchForma">
            <i class="fas fa-search"></i>
            <a id="search_close"><i class="fas fa-times"></i></a>
            <input type="text" class="field" name="s" placeholder="Enter your search">
            <input type="submit" class="submit" value="">
        </form>
    </div>
</header>
<!-- end Custom menu link HEADER -->
<!-- page -->
<!-- post -->
<!-- page -->

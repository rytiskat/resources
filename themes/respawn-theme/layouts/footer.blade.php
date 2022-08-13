<footer>
    <div class="elementor-shape elementor-shape-bottom custom-shape elementor-shape-global elementor-shape-footer" data-negative="false">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" opacity="0.33" d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z"/>
            <path class="elementor-shape-fill" opacity="0.66" d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z"/>
            <path class="elementor-shape-fill" d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z"/>
        </svg>
    </div>
    <div class="main_footer footer_threecolumns">
        <div class="container">
            <div class="footer_column">
                <div class="fc_inner">
                    <!-- Footer widget area 1 -->
                    <div id="nav_menu-6" class="widget widget_nav_menu">
                        <h4>{{ __('footer.short-links.title') }}</h4>
                        <div class="menu-footer-one-container">
                            <ul id="menu-footer-one" class="menu">

                                <li class="menu-item">
                                    <a href="{{ url('/') }}">
                                        {{ __('footer.short-links.home') }}
                                    </a>
                                </li>
                                @guest
                                    <li class="menu-item">
                                        <a href="{{ route('register') }}">
                                            {{ __('footer.short-links.sign-up') }}
                                        </a>
                                    </li>
                                @endguest
                                @auth
                                    <li class="menu-item">
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            {{ __('footer.short-links.logout') }}
                                        </a>
                                    </li>
                                @else
                                    <li class="menu-item">
                                        <a href="{{ route('login') }}">
                                            {{ __('footer.short-links.login') }}
                                        </a>
                                    </li>
                                @endauth

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_column">
                <div class="fc_inner">
                    <!-- Footer widget area 2 -->
                    <div id="nav_menu-6" class="widget widget_nav_menu">
                        <h4>{{ __('footer.general.title') }}</h4>
                        <div class="menu-footer-one-container">
                            <ul id="menu-footer-one" class="menu">

                                @if (Route::has('rules-index'))
                                    <li class="menu-item">
                                        <a href="{{ route('rules-index') }}">
                                            {{ __('footer.general.rules') }}
                                        </a>
                                    </li>
                                @endif
                                @if(config('siteSettings.contact_email'))
                                    <li class="menu-item">
                                        <a href="mailto:{{ config('siteSettings.contact_email') }}">
                                            {{ __('footer.general.email') }}
                                        </a>
                                    </li>
                                @endif

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_column">
                <div class="fc_inner">
                    <!-- Footer widget area 3 -->
                    <div id="nav_menu-6" class="widget widget_nav_menu">
                        <h4>{{ __('footer.backlinks.title') }}</h4>
                        <div class="menu-footer-one-container">
                            <ul id="menu-footer-one" class="menu">

                                @forelse($BacklinksProvider as $backlink)
                                    <li>
                                        <a href="{{ $backlink->url }}" target="_blank" rel="noopener">
                                            @if($backlink->image)
                                            <img src="{{ Storage::disk('images')->url($backlink->image->filename) }}"
                                                 loading="lazy"
                                                 class="img-fluid d-none d-sm-inline"
                                                 width="24" height="24" alt="{{ $backlink->name }}">
                                            @endif
                                            {{ $backlink->name }}
                                        </a>
                                    </li>
                                @empty
                                    <span class="small">
                                        {{ __('footer.backlinks.no-backlink') }}
                                    </span>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="fb_text">
                <p>
                    © {{ now()->year }} <a href="https://github.com/Devsome/silkroad-laravel/"
                                           target="_blank" rel="noopener" class="text-secondary">
                        {{ config('app.name', 'DevsomeSRO') }}
                    </a>

                    <span class="text-muted">
                         | {!! __('footer.copyrights') !!}
                    </span>

                </p>

            </div>
            <div class="fb_social">
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
            </div>
            <div class="clear"></div>
        </div>
    </div>
</footer>

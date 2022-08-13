@extends('theme::layouts.app')
@section('theme::title', __('seo.index'))
@section('theme::content')
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12 news-container">
        <div class="latest-news container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>{{ __('index.latest-news') }}</h1>

                        @forelse($news as $newsData)
                            <div id="post-2938" class=" blogs-style1 blogs-featured blogs-style2 spcard post-2938 post type-post status-publish format-standard has-post-thumbnail hentry category-shooters">
                                <div class="spwrapper cat_color__background_color" >
                                    <div class="spbgimg blog-roll-i post2938" >
                                        <a href="{{ route('news-slug', ['slug' => $newsData->slug]) }}" class="spvideolink"><i class="fas fa-play" aria-hidden="true"></i></a>
                                        <a href="{{ route('news-slug', ['slug' => $newsData->slug]) }}" class="spaudiolink"><i class="fas fa-microphone" aria-hidden="true"></i></a>
                                        <a href="{{ route('news-slug', ['slug' => $newsData->slug]) }}">
                                            <img class="lazy" alt="{{ $newsData->title }}" title="{{ $newsData->title }}" src="{{ Storage::disk('images')->url($newsData->image->filename) }}" data-src="{{ Storage::disk('images')->url($newsData->image->filename) }}" />
                                        </a>
                                    </div>
                                    <div class="spdata">
                                        <div class="spcontent">
                                            <h1 class="sptitle">
                                                <a rel="bookmark" href="{{ route('news-slug', ['slug' => $newsData->slug]) }}">{{ $newsData->title }}</a>
                                            </h1>
                                            {!! $newsData->body !!}
                                        </div>
                                        <div class="spextra">
                                            <span class="spauthor">
                                            <a href="#">
                                               <img src="/themes/respawn-theme/assets/img/13-100x100.jpg" data-src="/themes/respawn-theme/assets/img/13-100x100.jpg" width="40" height="40" alt="Admin" class="avatar avatar-40 wp-user-avatar wp-user-avatar-40 alignnone photo lazy" />
                                            </a>
                                            <a href="#">
                                               <span>by Admin</span>
                                            </a>
                                            </span>
                                            <div class="spdate">
                                                <i class="icon-calendar" aria-hidden="true"></i> {{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$newsData->published_at)->format('Y-m-d') }}
                                            </div>
                                        </div>
                                    </div>
                                    <i class="fas fa-quote-left" aria-hidden="true"></i>
                                </div>
                            </div>

                        @empty
                        @endforelse

                        @if($news->count() > 4)
                            <div class="text-center">
                                <div class="main-btn-holder">
                                    <a href="{{ route('news-archive') }}" class="hbtn hbtn-default">
                                        {{ __('index.show-all') }}
                                    </a>
                                </div>
                            </div>
                        @endif

                        <!--
                        <div class="pagination">
                           <ul>
                              <li class='active'><a href='#'>1</a></li>
                              <li><a href='#' class='inactive' >2</a></li>
                              <li><a class='page-selector' href='#' >&raquo;</a></li>
                           </ul>
                        </div>
                        -->
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

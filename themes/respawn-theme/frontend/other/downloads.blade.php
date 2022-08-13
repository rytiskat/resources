@extends('theme::layouts.app')
@section('theme::title', __('seo.downloads'))
@section('theme::content')
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1>{{ __('downloads.title') }}</h1>
                    <div class="row">
                        @forelse($downloads as $download)
                            <div class="col-md-4">
                                <div class="card download-card">
                                    @if(isset($download->image))
                                        <img src="{{ Storage::disk('images')->url($download->image->filename) }}"
                                             class="card-img-top"
                                             loading="lazy"
                                             alt="{{ $download->name }}">
                                    @endif
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ $download->name }}
                                        </h5>
                                        <p class="card-text">
                                            {{ $download->file_size }}
                                        </p>
                                        <a href="{{ $download->link }}" target="_blank"
                                           class="btn btn-sm btn-primary">
                                            {{ __('downloads.download-button') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-md-12">
                                <div class="alert alert-warning" role="alert">
                                    {{ __('downloads.no-downloads') }}
                                </div>

                            </div>
                        @endforelse
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="downloadBlock">
                                <h3 class="text-center">System Requirements</h3>
                                <p class="text-center">We recommend that you install the latest operating system for the game to load and run smoothly.</p>
                                <div class="center">
                                    <table class="recom" style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>System</th>
                                            <th>Minimum</th>
                                            <th>Recommended</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>OS</td>
                                            <td>Microsoft Windows 7 SP2</td>
                                            <td>Microsoft Windows 10(64 Bit)</td>
                                        </tr>
                                        <tr>
                                            <td>CPU</td>
                                            <td>Pentium 4 1.4Ghz</td>
                                            <td>Pentium 4 3.0Ghz</td>
                                        </tr>
                                        <tr>
                                            <td>RAM</td>
                                            <td>2GB or higher</td>
                                            <td>3GB or higher</td>
                                        </tr>
                                        <tr>
                                            <td>Graphics</td>
                                            <td>
                                                <ul>
                                                    <li>ATI Radeon 9200 or higher</li>
                                                    <li>GeForce 5 series or higher</li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul>
                                                    <li>ATI Radeon HD or higher</li>
                                                    <li>GeForce 7 series or higher</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>HDD</td>
                                            <td colspan="2">5GB or higher</td>
                                        </tr>
                                        <tr>
                                            <td>DirectX</td>
                                            <td colspan="2">DirectX 9.0c or higher</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

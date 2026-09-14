@extends('frontEnd.layouts.probiz')

@section('meta_title', $metaTitle ?? 'ProBiz Awards 2026 Dubai')
@section('meta_description', $metaDescription ?? ($page['intro'] ?? 'ProBiz Awards 2026 Dubai'))

@section('content')
    <section class="probiz-page-hero">
        <div class="container">
            <div class="probiz-kicker">{{ $page['eyebrow'] ?? 'ProBiz Awards 2026 Dubai' }}</div>
            <h1>{{ $page['title'] }}</h1>
            <p>{{ $page['intro'] }}</p>
            @if(!empty($page['buttons']))
                <div class="probiz-actions">
                    @foreach($page['buttons'] as $button)
                        <a href="{{ $button['url'] }}" class="{{ $loop->first ? 'btn-nominate' : 'btn-sponsor' }}">{{ $button['label'] }}</a>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    @if(!empty($page['sections']))
        <section class="probiz-section">
            <div class="container">
                <div class="probiz-grid probiz-grid-2">
                    @foreach($page['sections'] as $section)
                        <article class="probiz-card">
                            <h3>{{ $section['title'] }}</h3>
                            <p>{{ $section['body'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection

@extends('frontEnd.layouts.probiz')

@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@section('content')
    <section class="probiz-page-hero">
        <div class="container">
            <div class="probiz-kicker">Sponsorship</div>
            <h1>Put Your Brand at the Centre of UAE Business Excellence</h1>
            <p>Partner with ProBiz Awards 2026 Dubai to build visibility among businesses, entrepreneurs and professionals. Explore partnership options combining event presence, digital promotion, hospitality and networking.</p>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-grid">
                @foreach($sponsorPackages as $package)
                    <article class="probiz-card">
                        <span>{{ $package['price'] }}</span>
                        <h3>{{ $package['title'] }}</h3>
                        <p>{{ $package['description'] }}</p>
                        <a href="{{ url('/contact?topic=sponsorship&package='.$package['id']) }}">Enquire About This Package</a>
                    </article>
                @endforeach
            </div>
            <p class="probiz-note">Contact the ProBiz team to discuss availability, deliverables and partnership arrangements. Sponsorship does not determine award results.</p>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt" id="category-partnerships">
        <div class="container">
            <div class="probiz-section-head">
                <div class="probiz-kicker">Category Partners</div>
                <h2>Build a Relevant Industry Connection</h2>
                <p>Align your brand with a category or an agreed industry partnership at ProBiz Awards. Create a focused presence through category association, relevant content and event participation.</p>
            </div>
            <div class="probiz-grid probiz-grid-2">
                @foreach(['Official Restaurant Awards Partner', 'Official Real Estate Awards Partner', 'Official Technology Awards Partner', 'Official Beauty & Wellness Awards Partner', 'Official Travel Awards Partner'] as $theme)
                    <article class="probiz-card"><h3>{{ $theme }}</h3><p>Discuss the right partnership scope with our team, including visibility, content, gala branding and hospitality as agreed in your partnership package.</p></article>
                @endforeach
            </div>
            <div class="probiz-spotlight">
                <div>
                    <h3>Our Confirmed Partners</h3>
                    <p>Partnership announcements will appear here as they are confirmed. Explore the available opportunities to take part.</p>
                </div>
                <a href="{{ url('/contact?topic=sponsorship') }}" class="btn-nominate">Discuss a ProBiz Partnership</a>
            </div>
        </div>
    </section>
@endsection

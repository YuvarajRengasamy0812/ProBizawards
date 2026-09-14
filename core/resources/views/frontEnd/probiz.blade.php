@extends('frontEnd.layouts.probiz')

@section('meta_title', 'ProBiz Awards 2026 Dubai | UAE Business Awards')
@section('meta_description', 'Explore ProBiz Awards 2026 Dubai. Discover business and restaurant award categories, nomination details and the gala on 11 December 2026.')

@section('content')
    <section class="probiz-hero tw-relative tw-overflow-hidden">
        <video class="probiz-hero-video" autoplay muted loop playsinline preload="metadata" poster="{{ asset('assets/keditor/probiz/assets/banner/banner_bg02.jpg') }}">
            <source src="{{ asset('assets/keditor/probiz/assets/background.mp4') }}" type="video/mp4">
        </video>
        <div class="probiz-hero-media" style="background-image: url('{{ asset('assets/keditor/probiz/assets/banner/banner_bg02.jpg') }}')"></div>
        <div class="probiz-hero-sheen"></div>
        <div class="container probiz-hero-inner">
            <div class="tw-grid tw-items-center tw-gap-10 lg:tw-grid-cols-[1.05fr_0.95fr]">
                <div class="probiz-hero-copy tw-relative tw-z-10">
                    <div class="probiz-kicker">{{ $event['eyebrow'] }}</div>
                    <h1 class="probiz-hero-title">
                        <span class="probiz-title-desktop">Celebrating</span>
                        <span class="probiz-title-desktop">Excellence Across</span>
                        <span class="probiz-title-desktop">UAE Business</span>
                        <span class="probiz-title-mobile">Celebrating</span>
                        <span class="probiz-title-mobile">Excellence</span>
                        <span class="probiz-title-mobile">Across UAE</span>
                        <span class="probiz-title-mobile">Business</span>
                    </h1>
                    <p>Recognising the businesses, entrepreneurs and professionals shaping the UAE. Explore your award category, share your achievements and take the first step towards ProBiz Awards 2026 Dubai.</p>
                    <div class="probiz-event-line">{{ $event['date'] }} | {{ $event['venue_short'] }}</div>
                    <div class="probiz-actions">
                        <a href="{{ url('/nominate') }}" class="btn-nominate">Nominate Now</a>
                        <a href="{{ url('/award-categories') }}" class="btn-sponsor">Explore Award Categories</a>
                    </div>
                </div>
                <div class="probiz-hero-showcase tw-relative tw-z-10">
                    <div class="probiz-glass-panel">
                        <img src="{{ asset('assets/keditor/probiz/assets/probiz-awards-dubai-2026-light.png') }}" alt="ProBiz Awards Dubai 2026" class="probiz-hero-logo">
                        <img src="{{ asset('assets/keditor/probiz/assets/banner/banner_img.png') }}" alt="ProBiz Awards trophy banner" class="probiz-hero-trophy">
                        <div class="probiz-hero-chips">
                            <span>10 Pillars</span>
                            <span>70 Awards</span>
                            <span>Dubai Gala</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-intro-band">
        <div class="container">
            <div class="probiz-split tw-items-center">
                <div>
                    <div class="probiz-kicker">Introduction</div>
                    <h2>Where Business Excellence Takes Centre Stage</h2>
                </div>
                <p>ProBiz Awards brings together businesses and leaders from across the UAE for recognition, networking and celebration. From restaurants and hospitality to technology, real estate, healthcare and entrepreneurship, the programme gives eligible nominees a platform to present their achievements and connect with a wider business community.</p>
            </div>
            <div class="probiz-stats">
                <div><strong>10</strong><span>Industry Pillars</span></div>
                <div><strong>50</strong><span>Main Awards</span></div>
                <div><strong>20</strong><span>Restaurant Distinctions</span></div>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt">
        <div class="container">
            <div class="probiz-section-head">
                <div class="probiz-kicker">Categories</div>
                <h2>Find the Award That Fits Your Achievement</h2>
                <p>Explore 10 industry pillars, 50 main awards and 20 special restaurant distinctions. Choose the category that best reflects your work, business or professional contribution.</p>
            </div>
            <div class="probiz-grid">
                @foreach($pillars as $pillar)
                    <article class="probiz-card">
                        <span>{{ $pillar['id'] }}</span>
                        <h3>{{ $pillar['title'] }}</h3>
                        <p>{{ $pillar['description'] }}</p>
                        <a href="{{ url('/award-categories/'.$pillar['slug']) }}">View Pillar</a>
                    </article>
                @endforeach
            </div>
            <div class="probiz-spotlight">
                <div>
                    <div class="probiz-kicker">Restaurant Spotlight</div>
                    <h3>Celebrating the UAE Dining Scene</h3>
                    <p>From neighbourhood favourites to distinctive dining destinations, discover restaurant awards celebrating cuisine, service, creativity and customer experience across the UAE.</p>
                </div>
                <img src="{{ asset('assets/keditor/probiz/assets/images/about_img01.png') }}" alt="ProBiz Awards dining and hospitality spotlight" class="probiz-spotlight-img">
                <a href="{{ url('/restaurant-awards') }}" class="btn-nominate">Explore Restaurant Distinctions</a>
            </div>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-section-head">
                <div class="probiz-kicker">Benefits</div>
                <h2>Recognition That Reaches Beyond the Stage</h2>
            </div>
            <div class="probiz-grid probiz-grid-3">
                <article class="probiz-card probiz-media-card"><img src="{{ asset('assets/keditor/probiz/assets/awards-best.png') }}" alt="Award recognition"><h3>Recognition</h3><p>Present your achievements through a structured award nomination and review process.</p></article>
                <article class="probiz-card probiz-media-card"><img src="{{ asset('assets/keditor/probiz/assets/bannerimage.png') }}" alt="Business visibility"><h3>Visibility</h3><p>Confirmed finalists receive a business profile, social announcement and official campaign assets.</p></article>
                <article class="probiz-card probiz-media-card"><img src="{{ asset('assets/keditor/probiz/assets/gallary.jpg') }}" alt="Gala connections"><h3>Connections</h3><p>Meet businesses, professionals and potential partners during the ProBiz gala experience.</p></article>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt">
        <div class="container">
            <div class="probiz-split">
                <div>
                    <div class="probiz-kicker">Process</div>
                    <h2>Choose. Submit. Review. Celebrate.</h2>
                </div>
                <p>Choose your category. Submit your nomination. Complete the eligibility review. Selected nominees move to shortlisting and finalist participation, followed by the published recognition process and gala.</p>
            </div>
            <div class="probiz-spotlight">
                <div>
                    <div class="probiz-kicker">Official Finalist Experience</div>
                    <h3>AED 5,000 | Three Gala Dinner Invitations</h3>
                    <p>Includes an official finalist badge, a company profile, campaign assets and event recognition. Finalist status does not guarantee category victory.</p>
                </div>
                <a href="{{ url('/finalist-package') }}" class="btn-nominate">View Finalist Experience</a>
            </div>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-split">
                <div>
                    <div class="probiz-kicker">Partners</div>
                    <h2>Partner with ProBiz Awards</h2>
                </div>
                <p>Connect your brand with businesses and leaders across the UAE. Explore event, category and table partnership opportunities designed around visibility, hospitality and business connections.</p>
            </div>
            <div class="probiz-spotlight">
                <div>
                    <div class="probiz-kicker">Brochure</div>
                    <h3>Explore the ProBiz Awards 2026 Brochure</h3>
                    <p>Discover the award pillars, restaurant distinctions, finalist experience, partnership options and gala venue in one guide.</p>
                </div>
                <a href="{{ asset('magazine/ProBizAwardsMagazine-DecemberEdition2026.pdf') }}" class="btn-sponsor" download>Download Brochure</a>
            </div>
            <div class="probiz-final-cta">
                <h2>Ready to Put Your Business Forward?</h2>
                <p>Choose your category and tell us what makes your business or achievement stand out.</p>
                <a href="{{ url('/nominate') }}" class="btn-nominate">Nominate Now</a>
            </div>
        </div>
    </section>
@endsection

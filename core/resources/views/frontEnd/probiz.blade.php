@extends('frontEnd.layouts.probiz')

@section('meta_title', 'ProBiz Awards 2026 Dubai | UAE Business Awards')
@section('meta_description', 'Explore ProBiz Awards 2026 Dubai. Discover business and restaurant award categories, nomination details and the gala on 11 December 2026.')

@section('content')
    @php
        $imageBase = $images['base'];
        $thumbLabels = [
            'business-entrepreneurship' => '01-entrepreneurship',
            'food-chef-hospitality' => '02-hospitality',
            'fashion-beauty' => '03-beauty',
            'healthcare-wellness' => '04-wellness',
            'lifestyle-luxury-innovation' => '05-luxury-innovation',
            'real-estate-property' => '06-property',
            'opticals-eyewear' => '07-eyewear',
            'electronics-technology' => '08-technology',
            'travel-tourism-resorts' => '09-tourism-resorts',
            'it-software-digital-platforms' => '10-digital-platforms',
        ];
    @endphp

    <section class="probiz-hero probiz-composition-hero">
        <div class="container probiz-hero-inner">
            <div class="probiz-hero-copy">
                <div class="probiz-brand-text">PROBIZ AWARDS</div>
                <div class="probiz-kicker">First Edition / Dubai 2026</div>
                <h1>
                    <span class="probiz-title-line">Celebrating</span>
                    <span class="probiz-title-line probiz-gold-word">excellence</span>
                    <span class="probiz-title-line">across UAE</span>
                    <span class="probiz-title-line">business.</span>
                </h1>
                <div class="probiz-event-line">11 December 2026 | Le Meridien Dubai</div>
                <div class="probiz-actions">
                    <a href="{{ url('/nominate') }}" class="btn-nominate">Start Your Nomination</a>
                    <a href="{{ url('/award-categories') }}" class="btn-sponsor">Explore Categories</a>
                </div>
            </div>
            <picture class="probiz-hero-stage">
                <source media="(max-width: 575px)" srcset="{{ asset($imageBase.'/'.$images['hero_mobile']) }}">
                <img src="{{ asset($imageBase.'/'.$images['hero_desktop']) }}" alt="ProBiz Awards trophy with Dubai skyline">
            </picture>
        </div>
    </section>

    <section class="probiz-section probiz-intro-band">
        <div class="container">
            <div class="probiz-split">
                <div>
                    <div class="probiz-kicker">Introduction</div>
                    <h2>Where business excellence takes centre stage</h2>
                </div>
                <p>ProBiz Awards brings together businesses and leaders from across the UAE for recognition, networking and celebration. From restaurants and hospitality to technology, real estate, healthcare and entrepreneurship, the programme gives eligible nominees a platform to present their achievements and connect with a wider business community.</p>
            </div>
            <div class="probiz-stats" data-aos="fade-up">
                <div><strong class="probiz-count" data-count="10">0</strong><span>Industry Pillars</span></div>
                <div><strong class="probiz-count" data-count="50">0</strong><span>Main Awards</span></div>
                <div><strong class="probiz-count" data-count="20">0</strong><span>Restaurant Distinctions</span></div>
                <div><strong class="probiz-count" data-count="3">0</strong><span>Gala Invitations Per Finalist</span></div>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt">
        <div class="container">
            <div class="probiz-section-head">
                <div class="probiz-kicker">Categories</div>
                <h2>Find the award that fits your achievement</h2>
                <p>Explore 10 industry pillars and 50 main awards. Each pillar includes five focused categories so nominees can choose the recognition path that matches their work.</p>
            </div>
            <div class="probiz-thumb-strip" aria-label="ProBiz pillar image set">
                @foreach($pillars as $pillar)
                    <a href="{{ url('/award-categories/'.$pillar['slug']) }}">
                        <img src="{{ asset($imageBase.'/'.$pillar['image']) }}" alt="{{ $pillar['title'] }}">
                        <strong>{{ $thumbLabels[$pillar['slug']] ?? $pillar['id'].'-'.$pillar['slug'] }}</strong>
                        <span class="probiz-thumb-view">View</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-feature-row probiz-restaurant-feature" data-aos="fade-up">
                <div data-aos="fade-right" data-aos-delay="100">
                    <div class="probiz-kicker">Restaurant Distinctions</div>
                    <h2>A place for every flavour.</h2>
                    <p>20 distinctions celebrating the UAE dining scene, from cuisine and service to ambience, customer experience and homegrown restaurant brands.</p>
                    <a href="{{ url('/restaurant-awards') }}" class="btn-nominate">Explore Restaurant Distinctions</a>
                </div>
                <img data-aos="fade-left" data-aos-delay="180" src="{{ asset($imageBase.'/'.$images['restaurant_hero']) }}" alt="Restaurant awards concept">
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt">
        <div class="container">
            <div class="probiz-section-head">
                <div class="probiz-kicker">Process</div>
                <h2>Choose. Submit. Review. Celebrate.</h2>
            </div>
            <div class="probiz-grid probiz-steps-grid">
                @foreach(['Choose your category', 'Submit your nomination', 'Eligibility review', 'Shortlisting', 'Confirm finalist participation', 'Evaluation, voting and gala'] as $index => $step)
                    <article class="probiz-card">
                        <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <h3>{{ $step }}</h3>
                        <p>{{ $index === 4 ? 'Confirmed finalists receive the AED 5,000 finalist experience with three gala dinner invitations.' : 'The ProBiz team will guide eligible entries through the published process for the selected category.' }}</p>
                    </article>
                @endforeach
            </div>
            <!-- <p class="probiz-note">Submitting a nomination does not confirm finalist status. Finalist participation does not guarantee category victory.</p> -->
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-feature-row probiz-feature-row-reverse">
                <img class="probiz-brochure-mockup" src="{{ asset($imageBase.'/'.$images['brochure']) }}" alt="ProBiz Awards 2026 brochure concept">
                <div>
                    <div class="probiz-kicker">Finalist Experience</div>
                    <h2>More than an award.</h2>
                    <p>The Official Finalist Experience is priced at {{ $event['finalist_price'] }} and includes {{ $event['finalist_invitations'] }}, finalist recognition, a business profile, campaign assets and event participation.</p>
                    <div class="probiz-actions">
                        <a href="{{ url('/finalist-package') }}" class="btn-nominate">View Finalist Experience</a>
                        <a href="{{ asset('magazine/ProBizAwardsMagazine-DecemberEdition2026.pdf') }}" class="btn-sponsor" download>Download Brochure</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt">
        <div class="container">
            <div class="probiz-final-cta">
                <div>
                    <div class="probiz-kicker">Partners</div>
                    <h2>Partner with ProBiz Awards</h2>
                    <p>Explore Title, Platinum, Gold, Category and Table partnership options with clear hospitality allocations and event visibility.</p>
                </div>
                <a href="{{ url('/sponsors') }}" class="btn-nominate">View Sponsorship Packages</a>
            </div>
        </div>
    </section>
@endsection

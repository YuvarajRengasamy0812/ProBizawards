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
        $approvedHomeMediaPartners = ($approvedMediaPartners ?? collect())->flatten(1)->filter(function ($partner) {
            return !empty($partner->logo);
        });
        $homeMediaFallback = [
            ['name' => 'Coinstelegram', 'logo' => 'assets/keditor/probiz/assets/partners/coinstelegram.png'],
            ['name' => 'Cryptoken Media', 'logo' => 'assets/keditor/probiz/assets/CryptokenMedia.png'],
            ['name' => 'Coins Capture', 'logo' => 'assets/keditor/probiz/assets/partners/coins.png'],
            ['name' => 'The Coin Republic', 'logo' => 'assets/keditor/probiz/assets/partners/thecoinrepublic.png'],
            ['name' => 'Financial Markets Media', 'logo' => 'assets/keditor/probiz/assets/partners/financial-markets-media.png'],
            ['name' => 'Forex Live', 'logo' => 'assets/keditor/probiz/assets/partners/forex-live-1.png'],
            ['name' => 'FXMAG', 'logo' => 'assets/keditor/probiz/assets/partners/fxmag-1.png'],
            ['name' => 'Arabic Trader', 'logo' => 'assets/keditor/probiz/assets/partners/arabic-trader.png'],
        ];
        $homeAwardTiers = [
            [
                'label' => 'Official Sponsor',
                'logos' => [
                    ['name' => 'Domino Markets', 'logo' => 'assets/keditor/probiz/assets/sponsors/Domino Markets.png'],
                ],
            ],
            [
                'label' => 'Event Sponsor',
                'logos' => [
                    ['name' => 'Bridging FX', 'logo' => 'assets/keditor/probiz/assets/sponsors/bridgingfx.png'],
                    ['name' => 'FinxCart', 'logo' => 'assets/keditor/probiz/assets/sponsors/finxcart.png'],
                ],
            ],
            [
                'label' => 'Co-Sponsors',
                'logos' => [
                    ['name' => 'Bridging White', 'logo' => 'assets/keditor/probiz/assets/sponsors/bridging-white.png'],
                    ['name' => 'Profit White', 'logo' => 'assets/keditor/probiz/assets/sponsors/profit-white.png'],
                ],
            ],
            [
                'label' => 'Award Winners',
                'logos' => [
                    ['name' => 'YaMarkets', 'logo' => 'assets/keditor/probiz/assets/sponsors/9-yamarkets.png'],
                    ['name' => 'HyroTrader', 'logo' => 'assets/keditor/probiz/assets/sponsors/hyrotrader.png'],
                    ['name' => 'Leverage Markets', 'logo' => 'assets/keditor/probiz/assets/sponsors/leveragemarkets.png'],
                    ['name' => 'Pipstone Capital', 'logo' => 'assets/keditor/probiz/assets/pipstones.png'],
                    ['name' => 'Forexer', 'logo' => 'assets/keditor/probiz/assets/sponsors/10-forexer.png'],
                    ['name' => 'TradeUltra', 'logo' => 'assets/keditor/probiz/assets/partners/tradeultra.png'],
                    ['name' => 'Liberty Markets', 'logo' => 'assets/keditor/probiz/assets/sponsors/libertymarkets.png'],
                    ['name' => 'ArabicBroker', 'logo' => 'assets/keditor/probiz/assets/arabicbroker.png'],
                ],
            ],
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
                <img src="{{ asset($imageBase.'/'.$images['hero_desktop']) }}" alt="ProBiz Awards trophy with Dubai skyline" fetchpriority="high" width="1536" height="1024">
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
                <div><strong class="probiz-count" data-count="10">10</strong><span>Industry Pillars</span></div>
                <div><strong class="probiz-count" data-count="50">50</strong><span>Main Awards</span></div>
                <div><strong class="probiz-count" data-count="20">20</strong><span>Restaurant Distinctions</span></div>
                <div><strong class="probiz-count" data-count="3">3</strong><span>Gala Invitations Per Finalist</span></div>
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
                        <img loading="lazy" src="{{ asset($imageBase.'/'.$pillar['image']) }}" alt="{{ $pillar['title'] }}">
                        <strong>{{ $pillar['title'] }}</strong>
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
            <div class="probiz-home-process-carousel" aria-label="ProBiz process">
                <div class="probiz-home-process-track">
                    @for($repeat = 0; $repeat < 1; $repeat++)
                        @foreach(['Choose your category', 'Submit your nomination', 'Eligibility review', 'Shortlisting', 'Confirm finalist participation', 'Evaluation, voting and gala'] as $index => $step)
                            <article class="probiz-card probiz-home-process-card" aria-hidden="{{ $repeat === 1 ? 'true' : 'false' }}">
                                <span>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                <h3>{{ $step }}</h3>
                                <p>{{ $index === 4 ? 'Confirmed finalists receive the AED 5,000 finalist experience with three gala dinner invitations.' : 'The ProBiz team will guide eligible entries through the published process for the selected category.' }}</p>
                            </article>
                        @endforeach
                    @endfor
                </div>
            </div>
            <!-- <p class="probiz-note">Submitting a nomination does not confirm finalist status. Finalist participation does not guarantee category victory.</p> -->
        </div>
    </section>

    <section class="probiz-section probiz-home-media-showcase" id="home-media-partners">
        <div class="container">
            <div class="probiz-section-head probiz-media-logo-head">
                <div class="probiz-kicker">Our Media Partners</div>
                <h2>Media Partners</h2>
                <p>Approved media partners and event coverage collaborators appear here.</p>
            </div>

            <div class="probiz-home-logo-carousel" aria-label="Media partner logos">
                <div class="probiz-home-logo-track">
                    @for($repeat = 0; $repeat < 1; $repeat++)
                        @if($approvedHomeMediaPartners->isNotEmpty())
                            @foreach($approvedHomeMediaPartners as $partner)
                                <a href="{{ $partner->website ?: '#' }}"
                                    class="probiz-home-media-logo {{ $partner->website ? '' : 'is-disabled' }}"
                                    @if($partner->website) target="_blank" rel="noopener noreferrer" @endif
                                    aria-label="{{ $partner->company_name }}"
                                    aria-hidden="{{ $repeat === 1 ? 'true' : 'false' }}">
                                    <img src="{{ asset('uploads/media_partners/'.$partner->logo) }}" alt="{{ $partner->company_name }}">
                                </a>
                            @endforeach
                        @else
                            @foreach($homeMediaFallback as $partner)
                                <a href="{{ url('/media-partners') }}"
                                    class="probiz-home-media-logo"
                                    aria-label="{{ $partner['name'] }}"
                                    aria-hidden="{{ $repeat === 1 ? 'true' : 'false' }}">
                                    <img src="{{ asset($partner['logo']) }}" alt="{{ $partner['name'] }}">
                                </a>
                            @endforeach
                        @endif
                    @endfor
                </div>
            </div>

            <div class="probiz-media-cta">
                <a href="{{ url('/media-partners') }}" class="btn-nominate probiz-media-open-btn">Become a Media Partner</a>
            </div>
        </div>
    </section>

    <section class="probiz-section probiz-section-alt probiz-home-awards-showcase" id="home-awards-partners">
        <div class="container">
            <div class="probiz-section-head probiz-media-logo-head">
                <div class="probiz-kicker">ProBiz Awards Sponsors</div>
                <h2>Check Who Made The Event Possible</h2>
            </div>

            <div class="probiz-home-awards-stack">
                @foreach($homeAwardTiers as $tier)
                    <div class="probiz-home-awards-tier">
                        <h3>{{ $tier['label'] }}</h3>
                        <div class="probiz-home-awards-grid">
                            @foreach($tier['logos'] as $item)
                                <a href="{{ url('/sponsors') }}" class="probiz-home-awards-logo" aria-label="{{ $item['name'] }}">
                                    <img src="{{ asset($item['logo']) }}" alt="{{ $item['name'] }}">
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="probiz-media-cta">
                <a href="{{ url('/sponsors') }}" class="btn-nominate probiz-media-open-btn">View Sponsorship Packages</a>
            </div>
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

@extends('frontEnd.layouts.probiz')

@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@section('content')
    @php
        $imageBase = $images['base'];
    @endphp

    <section class="probiz-page-hero probiz-masthead" style="background-image: url('{{ asset($imageBase.'/'.$images['gala']) }}')">
        <div class="container">
            <div class="probiz-kicker">Sponsorship</div>
            <h1>Put Your Brand at the Centre of UAE Business Excellence</h1>
            <p>Partner with ProBiz Awards 2026 Dubai to build visibility among businesses, entrepreneurs and professionals. Explore partnership options combining event presence, digital promotion, hospitality and networking.</p>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            @if(session('sponsor_success'))
                <div class="probiz-alert">{{ session('sponsor_success') }}</div>
            @endif
            <div class="probiz-grid">
                @foreach($sponsorPackages as $package)
                    <article class="probiz-card">
                        <span>{{ $package['price'] }}</span>
                        <h3>{{ $package['title'] }}</h3>
                        <p>{{ $package['description'] }}</p>
                        <button type="button"
                            class="probiz-package-btn"
                            data-bs-toggle="modal"
                            data-bs-target="#packageEnquiryModal"
                            data-package-id="{{ $package['id'] }}"
                            data-package-title="{{ $package['title'] }}"
                            data-package-price="{{ $package['price'] }}">
                            Enquire About This Package
                        </button>
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

    <div class="modal fade probiz-modal" id="packageEnquiryModal" tabindex="-1" aria-labelledby="packageEnquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <div class="probiz-kicker mb-1">Sponsorship Enquiry</div>
                        <h5 class="modal-title" id="packageEnquiryModalLabel">Enquire About This Package</h5>
                        <p class="probiz-modal-subtitle mb-0" id="packageEnquiryPackage">Select a package</p>
                    </div>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('contactPageSubmited') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="enquiry_type" value="Sponsorship">
                        <input type="hidden" name="partnership_interest" id="packageInterest" value="">
                        <input type="hidden" name="preferred_category" id="packageId" value="">

                        <div class="probiz-form-grid">
                            <label>Contact name
                                <input type="text" name="full_name" required>
                            </label>
                            <label>Work email
                                <input type="email" name="email" required>
                            </label>
                            <label>Phone
                                <input type="tel" name="phone">
                            </label>
                            <label>Company name
                                <input type="text" name="company" required>
                            </label>
                            <label>Country
                                <input type="text" name="country" value="United Arab Emirates" required>
                            </label>
                            <label>Package
                                <input type="text" id="packageDisplay" value="" readonly>
                            </label>
                        </div>
                        <label>Message
                            <textarea name="message" rows="4" placeholder="Tell us about your partnership objective"></textarea>
                        </label>
                        <label class="probiz-check">
                            <input type="checkbox" name="privacy_ack" value="1" required>
                            <span>I have read the Privacy Policy and understand that my details will be used to respond to this enquiry.</span>
                        </label>
                        <label class="probiz-check">
                            <input type="checkbox" name="marketing_consent" value="1">
                            <span>Send me ProBiz sponsorship and event updates.</span>
                        </label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-sponsor" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn-nominate">Send Enquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const modal = document.getElementById('packageEnquiryModal');
            if (!modal) {
                return;
            }

            modal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                if (!button) {
                    return;
                }

                const title = button.getAttribute('data-package-title') || '';
                const price = button.getAttribute('data-package-price') || '';
                const id = button.getAttribute('data-package-id') || '';
                const label = [title, price].filter(Boolean).join(' | ');

                modal.querySelector('#packageEnquiryModalLabel').textContent = 'Enquire About ' + title;
                modal.querySelector('#packageEnquiryPackage').textContent = label;
                modal.querySelector('#packageInterest').value = title;
                modal.querySelector('#packageId').value = id;
                modal.querySelector('#packageDisplay').value = label;
            });
        });
    </script>
@endsection

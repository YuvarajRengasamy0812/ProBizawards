<footer class="footer" id="footer">
    <!-- Scroll to Top Button -->
    <a href="#top" class="scroll-top5">
        <i class="bi bi-arrow-up"></i>
    </a>


    <div class="container">
        <div class="row">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 mb-4 text-lg-start">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/keditor/probiz/assets/probiz-awards-dubai-2026-dark.png') }}" alt="ProBiz Awards Dubai 2026"
                        class="footer-logo">
                </a>
                <p class="footer-description">
                    Asia's premier ProBiz Awards platform for financial, fintech, brokerage, and trading excellence.
                </p>
                <div class="d-flex align-items-center justify-content-center gap-5">

                    <div>

                        <div class="presented-by mt-5 text-center">Organised By</div>
                        <a href="https://probizawards.com/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/keditor/probiz/assets/Media-logo.png') }}" alt="ProBiz Media"
                                class="probiz-media-logo">
                        </a>
                    </div>
                    <div>

                        <div class="presented-by mt-5 text-center">Official Sponsor</div>
                        <a href="https://probizawards.com/" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('assets/keditor/probiz/assets/Untitled-1.png') }}" alt="Official Sponsor"
                                class="" >
                        </a>
                    </div>
                </div>
            </div>


            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h3 class="footer-heading">Quick Links</h3>
                <ul class="footer-link">
                    <li><a href="{{ url('/') }}#about">About Us</a></li>
                    <li><a href="{{ url('/') }}#agenda">Agenda</a></li>
                    <li><a href="{{ url('/') }}#speakers">Speakers</a></li>
                </ul>

            </div>

            <!-- Useful Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h3 class="footer-heading">Useful Links</h3>
                <ul class="footer-link">
                    <li><a href="{{ url('/event') }}">Recent Event Sponsor</a></li>
                    <li><a href="{{ url('/media') }}">Media Sponsor</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h3 class="footer-heading">Subscribe Newsletter</h3>
                <p class="newsletter-text">
                    Subscribe to our newsletter for the latest updates, exclusive offers, and industry insights
                    delivered straight to your inbox
                </p>


                @if(Helper::GeneralSiteSettings("style_subscribe"))

                    {{ Form::open(['route' => 'subscribeSubmit', 'method' => 'POST', 'id' => 'subscribeForm', 'class' => 'newsletter-forms']) }}
                    {!! Form::email('subscribe_email', old('subscribe_email'), [
                        'placeholder' => 'info@probizawards.com',
                        'class' => 'newsletter-input',
                        'id' => 'subscribe_email',
                        'required' => 'required',
                        'autocomplete' => 'off'
                    ]) !!}
                    <button type="submit" id="subscribeFormSubmit" class="newsletter-btn" aria-label="Subscribe">
                        <i class="bi bi-send"></i>
                    </button>
                    {{ Form::close() }}

                @endif
                <div class="social-icons-footer">
                    <a href="https://www.facebook.com/probizawards" target="_blank" rel="noopener noreferrer"
                        aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/probizawards?igsh=MTgzbmx0bDh5dnl5eA%3D%3D"
                        target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.youtube.com/channel/UCH48JVPRS6QMuuATpSelwXA" target="_blank"
                        rel="noopener noreferrer" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=%2B971588845033&text&type=phone_number&app_absent=0"
                        target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i
                            class="bi bi-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <!-- Association -->
                <div class="col-lg-5 col-md-12 mb-3 mb-lg-0">
                    <div class="association-section">
                        <span class="association-text">Association With</span>
                        <div class="association-logos">
                            <img src="{{ asset('assets/keditor/probiz/assets/Association-with.png') }}"
                                alt="Association partner">

                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-lg-4 col-md-12 mb-3 mb-lg-0">
                    <p class="copyright mb-0">
                        Copyright &copy; {{ date('Y') }} <strong>ProBiz Awards</strong>. All Rights Reserved.
                    </p><br>
                    
                </div>

                <!-- Bottom Links -->
                <div class="col-lg-3 col-md-12">
                    <div class="footer-bottom-links">
                        <a href="{{ asset('assets/keditor/probiz/assets/Terms-and-Condition.pdf') }}" download>Terms &
                            Conditions</a>
                        <a href="{{ asset('assets/keditor/probiz/assets/privacy-policy.pdf') }}" download>Privacy
                            Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

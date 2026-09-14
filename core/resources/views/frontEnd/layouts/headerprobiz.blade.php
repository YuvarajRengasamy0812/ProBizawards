    <!-- Top Bar -->
    <div class="top-bar" id="top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 col-md-12 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="venue-info">
                        <strong>11 December 2026</strong>
                        <span class="venue-date">Falcon Ballroom, Le Meridien Dubai Hotel & Conference Centre | Dubai, UAE</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-end">
                    <div class="social-icons">
                        <a href="https://www.facebook.com/probizawards" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/probizawards?igsh=MTgzbmx0bDh5dnl5eA%3D%3D" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="https://www.youtube.com/channel/UCH48JVPRS6QMuuATpSelwXA" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                        <a href="https://api.whatsapp.com/send/?phone=%2B971588845033&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="navbar navbar-expand-lg main-header">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand probiz-brand" href="{{ url('/') }}" aria-label="ProBiz Awards 2026">
                <img src="{{ asset('assets/keditor/probiz/assets/probiz-awards-dubai-2026-light.png') }}"
                    alt="ProBiz Awards Dubai 2026" class="header-logo">
            </a>

            <!-- Mobile Toggle Button -->
            <button class="probiz-menu-toggle" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse d-lg-flex probiz-header-menu" id="navbarNav">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/how-it-works') }}">PROCESS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                            CATEGORIES
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(config('probiz.pillars') as $pillar)
                                <li><a class="dropdown-item" href="{{ url('/award-categories/'.$pillar['slug']) }}">{{ $pillar['title'] }}</a></li>
                            @endforeach
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="{{ url('/restaurant-awards') }}">Restaurant Distinctions</a></li>
                            <li><a class="dropdown-item" href="{{ url('/award-categories') }}">View All Categories</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                            PARTNERS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/sponsors') }}">Sponsorship</a></li>
                            <li><a class="dropdown-item" href="{{ url('/media-partners') }}">Media Partners</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" aria-expanded="false">
                          GALA
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/gala-night') }}">Gala Night</a></li>
                            <li><a class="dropdown-item" href="{{ url('/finalist-package') }}">Finalist Experience</a></li>
                            <li><a class="dropdown-item" href="{{ url('/judging-and-voting') }}">Judging & Voting</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">CONTACT</a>
                    </li>
                </ul>

                <!-- CTA Buttons -->
                <div class="cta-buttons d-flex align-items-center gap-2">
                    <a href="{{ url('/winners') }}" class="btn-nominate">WINNERS</a>
                    <a href="{{ url('/nominate') }}" class="btn-nominate">NOMINATE</a>
                    <a href="#sponsor" class="btn-sponsor" data-bs-toggle="modal"
                        data-bs-target="#sponsorModal">SPONSOR</a>
                </div>
            </div>
        </div>
    </nav>
<div class="modal fade z-index-9999" id="sponsorModal" tabindex="-1" aria-labelledby="sponsorModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow">
      <div class="modal-header">
        <h5 class="modal-title text-dark fw-semibold" id="sponsorModalLabel">Become a Sponsor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <div class="text-center mb-3">
        <img src="{{ asset('assets/keditor/probiz/assets/probiz-awards-dubai-2026-light.png') }}"
          alt="ProBiz Awards Dubai 2026" class="sponsor-modal-logo">
      </div>
      <form action="{{ route('contactPageSubmited') }}" method="POST">
        @csrf
        <input type="hidden" name="enquiry_type" value="Sponsorship">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Contact name</label>
            <input type="text" name="full_name" class="form-control" placeholder="Enter contact name" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Work email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" placeholder="Enter phone number">
          </div>
          <div class="col-md-6">
            <label class="form-label">Company name</label>
            <input type="text" name="company" class="form-control" placeholder="Enter company name" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Country</label>
            <input type="text" name="country" class="form-control" value="United Arab Emirates" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">Partnership interest</label>
            <select name="partnership_interest" class="form-select" required>
              <option>Discuss Options</option>
              <option>Title Partner</option>
              <option>Platinum Partner</option>
              <option>Gold Partner</option>
              <option>Category Partner</option>
              <option>Table Partner</option>
              <option>Media Partner</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="3" placeholder="Tell us about your objectives"></textarea>
          </div>
          <div class="col-12">
            <label class="form-check-label text-dark">
              <input type="checkbox" name="privacy_ack" value="1" required>
              I have read the Privacy Policy and understand that my details will be used to respond to this enquiry.
            </label>
          </div>
        </div>

        <div class="text-center mt-4">
          <button type="submit" class="btn btn-primary px-5 py-2">Send Partnership Enquiry</button>
        </div>
      </form>

      </div>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    // Check if session has sponsor_success
    @if(session('sponsor_success'))
        var sponsorSuccess = true;
    @else
        var sponsorSuccess = false;
    @endif

    if(sponsorSuccess){
        var sponsorModalEl = document.getElementById('sponsorModal');
        if(sponsorModalEl){
            var sponsorModal = new bootstrap.Modal(sponsorModalEl);
            sponsorModal.show();

            // Auto close after 3 seconds
            setTimeout(function() {
                sponsorModal.hide();
            }, 3000);
        }
    }
});
</script>


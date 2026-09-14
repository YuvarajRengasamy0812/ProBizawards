@extends('frontEnd.layouts.probiz')

@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@section('content')
    <section class="probiz-page-hero">
        <div class="container">
            <div class="probiz-kicker">{{ $pillar['theme'] }}</div>
            <h1>{{ $pillar['title'] }}</h1>
            <p>{{ $pillar['description'] }}</p>
            <div class="probiz-actions">
                <a href="{{ url('/nominate?pillar='.$pillar['slug']) }}" class="btn-nominate">Nominate for an Award in This Pillar</a>
                @if($pillar['slug'] === 'food-chef-hospitality')
                    <a href="{{ url('/restaurant-awards') }}" class="btn-sponsor">Restaurant Distinctions</a>
                @endif
            </div>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-grid">
                @foreach($pillar['awards'] as $award)
                    <article class="probiz-card">
                        <span>{{ $award['id'] }}</span>
                        <h3>{{ $award['title'] }}</h3>
                        <p>{{ $award['description'] }}</p>
                        <div class="probiz-card-actions">
                            <a href="{{ url('/awards/'.$award['slug']) }}">View Category</a>
                            <a href="{{ url('/nominate?category='.$award['id']) }}">Nominate for This Award</a>
                        </div>
                    </article>
                @endforeach
            </div>
            <p class="probiz-note">Every nomination is reviewed for eligibility and category fit. Submission does not confirm finalist status or guarantee a win.</p>
        </div>
    </section>
@endsection

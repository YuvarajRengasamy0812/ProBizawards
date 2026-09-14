@extends('frontEnd.layouts.probiz')

@section('meta_title', $metaTitle)
@section('meta_description', $metaDescription)

@section('content')
    <section class="probiz-page-hero">
        <div class="container">
            <div class="probiz-kicker">Restaurant Distinctions</div>
            <h1>Celebrating the UAE Dining Scene</h1>
            <p>Explore special distinctions for restaurants, cafes, dining concepts and catering businesses. Choose the category that best reflects your strengths and share the story behind your guest experience.</p>
            <div class="probiz-actions">
                <a href="{{ url('/nominate?pillar=restaurant-awards') }}" class="btn-nominate">Nominate Your Restaurant</a>
            </div>
        </div>
    </section>

    <section class="probiz-section">
        <div class="container">
            <div class="probiz-grid">
                @foreach($restaurantAwards as $award)
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
        </div>
    </section>
@endsection

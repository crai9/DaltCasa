@extends('layouts.page')

@section('main')



<div class="container">

    <div class="hero">
        <div class="hero-image-cover image-cover"></div>
        <div class="hero-image-cover dots-cover"></div>
        <span class="hero-text">Welcome to Dalt Casa...</span>
        <br>
        <br>
        <span>
			<a href="/about" class="link-button">Learn more &raquo;</a>
		</span>
    </div>

    <div class="break"></div>

    <div class="featured">
        <h2 class="section-title">Featured</h2>
        <hr width="95%" size="6">
        <div class="cards-centered">
            <div class="card-set">
                <div class="card">
                    <span class="card-icon">
                        <span class="glyphicon glyphicon-{{ $featuredItems->get(0)->type }}" aria-hidden="true"></span>
                    </span>
                    <div class="card_image">
                        <a href="{{ $featuredItems->get(0)->link }}">
                            <img src="{{ $featuredItems->get(0)->image_url }}" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="{{ $featuredItems->get(0)->link }}">
                                {{ $featuredItems->get(0)->text }}
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="card">
                    <span class="card-icon">
                        <span class="glyphicon glyphicon-{{ $featuredItems->get(1)->type }}" aria-hidden="true"></span>
                    </span>
                    <div class="card_image">
                        <a href="{{ $featuredItems->get(1)->link }}">
                            <img src="{{ $featuredItems->get(1)->image_url }}" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="{{ $featuredItems->get(1)->link }}">
                                {{ $featuredItems->get(1)->text }}
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="card-set">
                <div class="card">
                    <span class="card-icon">
                        <span class="glyphicon glyphicon-{{ $featuredItems->get(2)->type }}" aria-hidden="true"></span>
                    </span>
                    <div class="card_image">
                        <a href="{{ $featuredItems->get(2)->link }}">
                            <img src="{{ $featuredItems->get(2)->image_url }}" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="{{ $featuredItems->get(2)->link }}">
                                {{ $featuredItems->get(2)->text }}
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="card">
                    <span class="card-icon">
                        <span class="glyphicon glyphicon-{{ $featuredItems->get(3)->type }}" aria-hidden="true"></span>
                    </span>
                    <div class="card_image">
                        <a href="{{ $featuredItems->get(3)->link }}">
                            <img src="{{ $featuredItems->get(3)->image_url }}" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="{{ $featuredItems->get(3)->link }}">
                                {{ $featuredItems->get(3)->text }}
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="grey">

        <div class="home-info">
            <div class="home-info-left">
                <img src="/img/crowd.jpg">
            </div>
            <div class="home-info-right">

                <p>Dalt Casa originally started in Dalt Vila, throwing an intimate party every Tuesday in September, under the name "Dalt Mila". With an eclectic, international, and underground line-up, along with a superb crowd - we only thought it was right to bring the brand back home to Scotland for winter - renaming it "Dalt Casa", which in Catalan means "Top House".</p>
                <p>Sign up today to stay informed about the latest Dalt Casa events and news.</p>
                <br>
                <span>
			        <a href="/register" class="link-button">Sign up &raquo;</a>
		        </span>

            </div>
        </div>

    </div>

</div>

@endsection

@extends('page')

@section('main')



<div class="container">

    <div class="hero">
        <div class="hero-image-cover"></div>
        <span class="hero-text">Welcome to Dalt Casa...</span>
        <br>
        <span>
			<a href="/about" class="link-button">Learn more &raquo;</a>
		</span>
    </div>

    <div class="featured">

        <h2 class="section-title">Featured Content</h2>
        <div class="cards-centered">
            <div class="card-set">
                <div class="card">
                    <div class="card_image">
                        <a href="#">
                            <img src="https://unsplash.it/275" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="#">
                                Article One
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <a href="#">
                            <img src="https://unsplash.it/275" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="#">
                                Event One
                            </a>
                        </h3>
                    </div>
                </div>
            </div>

            <div class="card-set">
                <div class="card">
                    <div class="card_image">
                        <a href="#">
                            <img src="https://unsplash.it/275" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="#">
                                Article Two
                            </a>
                        </h3>
                    </div>
                </div>

                <div class="card">
                    <div class="card_image">
                        <a href="#">
                            <img src="https://unsplash.it/275" class="card_image" alt="" style="">
                        </a>
                    </div>
                    <div class="card_details">
                        <h3 class="card_title">
                            <a href="#">
                                Event Two
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
                <br>
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

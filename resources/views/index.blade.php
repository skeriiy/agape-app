@extends('layout.main')

@section('content')

    <div class="header">
        <div class="container">
            @include('include.navbar')

            <div class="row">
                <div class="col-2">
                    <h1> IRRESISTIBLE<br> PASTRY<br> BLISS </h1>
                    <p>Savor joy in every delicious, tempting pastry bite
                    </p>
                </div>
                <div class="col-2">
                    <img src="{{ asset('imgs/picki.png') }}">
                </div>
            </div>
        </div>
    </div>

<!-----featured produucts----->
<div class="small-container">
    <h2 class="title">FEATURED PRODUCTS</h2>
    <div class="row">

        <div class="col-4">
            <a href="/cre"><img src="{{ asset('imgs/creampuff.jpg') }}"></a>
            <h4>Creampuff (8s) </h4>
            <p>₱599.00</p>
        </div>
        <div class="col-4">
            <a href="/bro"><img src="{{ asset('imgs/brownies.jpg') }}"></a>
            <h4> Brownies (8's)</h4>
            <p>₱450.00</p>
        </div>
        <div class="col-4">
            <a href="/ban"><img src="{{ asset('imgs/banana.jpg') }}"></a>
            <h4> Banana Cupcake (12's) </h4>
            <p>₱500.00</p>
        </div>
        <div class="col-4">
            <a href="/chif"><img src="{{ asset('imgs/chiffonC.jpg') }}"></a>
            <h4> Chiffon Cake </h4>
            <p>₱799.00</p>
        </div>

    </div>
</div>

<!---Offer---->
    <div class="offer">
        <div class="small-cotainer">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('imgs/bread.png') }}" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available Agape</p>
                    <h1> AGAPE's</h1>
                    <small>Savor the joy of our delicious pastries, skillfully baked for perfect flavors and textures.
                        Each treat is a burst of sweetness, turning every bite into a moment <br>of pure delight.
                        Indulge in the goodness that satisfies your sweet cravings and brings happiness to your dessert moments.</small><br>
                        <a href="/products" class="btn">Buy Now &#x261B;</a>
                </div>
            </div>
        </div>
    </div>

    <!--footer-->
        <div class="footer">
            @include('include.footer')
        </div>

@endsection

@extends('layout.main')

@section('content')
        <div class="container">
            @include('include.navbar')
        </div>

    <!--- Single Product details --->
    <!--- Baylohi lng mga Picture --->

    <div class="small-container single-product" >
        <div class="row">
            <div class="col-2">
                <img src="{{ asset ('imgs/cinannamon.jpg') }}" width="100%" id="ProductImg">
                
                <div class="small-img-row">
                    <div class="small-img-col">
                        <img src="{{ asset ('imgs/cinannamon.jpg') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset ('imgs/agplogo.png') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset ('imgs/agplogo.png') }}" width="100%" class="small-img">
                    </div>
                    <div class="small-img-col">
                        <img src="{{ asset ('imgs/agplogo.png') }}" width="100%" class="small-img">
                    </div>
                </div>
            </div>

            <div class="col-2">
                <h1> Cinnamon (10's) </h1>
                <h4>₱399.00</h4>
                @include('include.order')
                <h3>Product Detail</h3>
                <br>
                <p>Indulge in the delightEnjoy the soft, 
                    cinnamon-infused swirls and savor every moment of this irresistible treatful world of cupcake!</p>
            </div>
        </div>
    </div>
<br><br>
    <!--Title-->
    <div class="small-container">
        <div class="row row-2">
            <h2>Other Products</h2>
        </div>
    </div>

<br>

<div class="small-container">
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
            <!--cinnamon-->

            <div class="col-4">
                <a href="/spa"><img src="{{ asset('imgs/spanishB.jpg') }}"></a>
                <h4>  Special Spanish Bread (10s) </h4>
                <p>₱100.00</p>
            </div>
            <div class="col-4">
                <a href="/red"><img src="{{ asset('imgs/redvelvet.jpg') }}"></a>
                <h4>Red Velvet Cupcake (15s) </h4>
                <p>₱399.00</p>
            </div>
            <div class="col-4">
                <a href="/tart"><img src="{{ asset('imgs/tart.jpg') }}"></a>
                <h4> Tart (10s) </h4>
                <p>₱450.00</p>
            </div>
            <div class="col-4">
                <a href="/suf"><img src="{{ asset('imgs/sufle.jpg') }}"></a>
                <h4> Chocolate Souffle (4's) </h4>
                <p>₱199.00</p>
            </div>
            <div class="col-4">
                <a href="/mam"><img src="{{ asset('imgs/mamon.jpg') }}"></a>
                <h4> Mamon (5's) </h4>
                <p>₱199.00</p>
            </div>
    </div>
</div>

    <!--footer-->
        <div class="footer">
            @include('include.footer')
        </div>

@endsection('content')

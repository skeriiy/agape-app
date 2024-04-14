
@extends('layout.main')

@section('content')

<div class="account-page">
<!--Account page-->
    <div class="container">
        @include('include.navbar')
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('imgs/picki.png') }}" width="100%">
            </div>

            <div class="col-2">
                <div class="form-container">
                    <div class="form-btn">
                        <span>Order_here↓</span>
                    </div>
                    <div class="msgs">
                        <form action="/add/message" method="post" class="customer">
                            @include('include.message')
                            @csrf
                            <textarea name="message" id="" cols="30" rows="10"></textarea>
                                <button type="submit" class="btn">Submit</button>
                            <br><br>
                            <a href="/process/logout" class="btn"><b> LOG-OUT </b></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br><br>

<div class="small-container">
        <div class="row">
            <h1>All Products</h1>
        </div>
        <br>
        <br>

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
            <div class="col-4">
                <a href="/cin"><img src="{{ asset('imgs/cinannamon.jpg') }}"></a>
                <h4> Cinnamon (10s) </h4>
                <p>₱399.00</p>
            </div>
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
        <div class="col-2">
            <center><h1> To Order </h1>
            <h3> Click the order button below ↓ to Direct Message ↓ your Desired ordered product.</h3>
            <a href="/customer" class="btn"> Order Now  </a>
            <h3> For Questions or Verification, Please Contact as by →<a href="/contact"><u>Clicking Here</u></a>←  </h3>
        </center>
        <br><br><br>
        </div>
    </div>

    <!--footer-->
        <div class="footer">
    @include('include.footer')

        </div>

<!--js for toggle form-->
 <script>

    var LoginForm = document.getElementById("LoginForm")
    var RegForm = document.getElementById("RegForm")
    var Indicator = document.getElementById("Indicator")

    function register(){

        RegForm.style.transform = "translateX(0px)"
        LoginForm.style.transform = "translateX(0px)"
        Indicator.style.transform = "translateX(100px)"
    }

    function login(){

        RegForm.style.transform = "translateX(300px)"
        LoginForm.style.transform = "translateX(300px)"
        Indicator.style.transform = "translateX(0px)"
    }


</script>

@endsection('content')


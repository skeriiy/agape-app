@extends('layout.main')

@section('content')

<div class="header">
    <div class="container">
        @include('include.navbar')
        <div class="row">
            <div class="col-2">
                <h3>About Us</h3>
                <h1>Welcome to Agape</h1>
                    <p class="about">Welcome to our online e-commerce website,
                    created by the senior high school students of Filamer Christian University, under the TVL-ICT 12 strand and section.
                    The aims or purposes of creating this website are explained by the following student below:
                    </p>
            </div>
            <div class="col-2">
                <img src="{{ asset('imgs/picki.png') }}" width="100%" style="padding-left: 20px">
            </div>
        </div>
    </div>
</div>

{{-- testmonial about us --}}

<div class="testimonial">
    <div class="small-container">
        <center>
            <h1>The following students are involved in creating this online e-commerce website:</h1>
        </center>
        <br><br>
        <div class="row">
            <div class="col-3">
                <h3>Rica Mae Llorico </h3>
                <img src="{{asset('imgs/rica.jpg')}}" alt="">
                <p>
                    Our aim is to provide a convenient platform for customers to browse
                    and purchase products or services from the comfort of their own homes.
                </p>
            </div>
            <div class="col-3">
                <h3>Ayhesa Marie Carillo</h3>
                <img src="{{asset('imgs/Ahyeng.jpg')}}" alt="">
                <p>
                    Our aim for creating this website is for customers to have easy access to our products,
                    through this website users can easily browse and purchase our sweet delicacies.
                </p>
            </div>
            <div class="col-3">
                <h3>Rachel Paraguas</h3>
                <img src="{{asset('imgs/chel.jpg')}}" alt="">
                <p>
                    Our aim is to grow our business through an online shop. This lets us reach more customers,
                    increase sales, make buying easier, and provide convenience.
                    It also boosts our brand visibility and competitiveness online
                </p>
            </div>
            <div class="col-3">
                <h3>Shelwyn Cabañas</h3>
                <img src="{{asset('imgs/wyn.jpg')}}" alt="">
                <p>
                    Our aim for creating this online e-commerce website is to cater to customers
                    by providing them with easy and accessible features, as well as offering quality service.
                </p>
            </div>
            <div class="col-3">
                <h3>El Justin Basinang</h3>
                <img src="{{asset('imgs/agplogo.png')}}" alt="">
                <p>
                    We aim to create an online store,
                    reaching more customers, boosting sales, and making shopping easier. This helps our brand stand out online.
                </p>
            </div>
        </div>
    </div>
</div>


@include('include.footer')

@endsection

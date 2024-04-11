@extends('layout.main')

@section('content')
<div class="contact-page">
    @include('include.navbar')
    <!--contact page--> 
        <div class="contact-info">
        
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('imgs/picki.png') }}" width="100%">
                </div>
                <div class="contact-details">
                    <div class="small-container">
                        <div class="row">
                            <div class="contact-col-1">
                                <h3> CONTACT INFORMATION</h3>
                                <br>
                                <ul>
                                    <li> <b>0939-880-(6684)</b> <i>Smart</i></li>
                                    <li> <b>0970-511-(8835)</b> <i>TNT</i></li>
                                    <li> <b>0916-728-(1437)</b> <i>Globe</i></li>
                                    <br>
                                </ul>

                                <h3> Messaging Pages </h3>
                                <ul>
                                    <li><a href="https://www.facebook.com/profile.php?id=61556756150037&mibextid=ZbWKwL"><img src="{{ asset('imgs/fb.png') }}" width="30px">FACEBOOK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!--footer-->
        <div class="footer">
            @include('include.footer')
        </div>

@endsection('content')

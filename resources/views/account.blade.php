
@extends('layout.main')

@section('content')

<div class="account-page">
<!--Account page-->




        <div class="container">
        @include('include.navbar')
            <div class="row">

                @include('include.message')

                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="login()">Login</span>
                            <span onclick="register()">Register</span>
                            <hr id="Indicator">
                        </div>

                        <form action="/account/processLogin" method="post" id="LoginForm">
                            @csrf
                            <input type="text" name="email" placeholder="Email">
                            @error('email') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <input type="password" name="password" placeholder="Password">
                            @error('password') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <button type="submit" class="btn">Login</button>
                        </form>

                        <form action="/account/store" method="post" id="RegForm">
                            @csrf
                            <input type="text" name="first_name" placeholder="Firstname">
                            @error('first_name') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <input type="text" name="last_name" placeholder="Lastname">
                            @error('last_name') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <input type="text" name="contact_no" placeholder="Contact No.">
                            @error('contact_no') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <input type="text" name="email" placeholder="Email">
                            @error('email') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <input type="password" name="password" placeholder="Password">
                            @error('password') <p style="color: red; font-size: 11px;">{{ $message }}</p> @enderror
                            <button type="submit" class="btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
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


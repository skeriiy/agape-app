@extends('layout.main')

@section('content')

        <div class="container">
            @include('include.navbar')
        </div>

        <!-- Cart items details-->

<div class="small-container cart-page">

    <table>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>

        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/creampuff.jpg')}}">
                    <div>
                        <p>Creampuff (8's)</p>
                        <small>Price: 599.00 </small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/brownies.jpg')}}">
                    <div>
                        <p>Brownies (8's)</p>
                        <small>Price: 450.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/banana.jpg')}}">
                    <div>
                        <p> Banana Cupcake (12's)</p>
                        <small>Price: 500.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/chiffonC.jpg')}}">
                    <div>
                        <p>Chiffon Cake</p>
                        <small>Price: 799.00 </small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/cinannamon.jpg')}}">
                    <div>
                        <p>Cinnamon (10's)</p>
                        <small>Price: 399.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/spanishB.jpg')}}">
                    <div>
                        <p> Special Spanish Bread (10's)</p>
                        <small>Price: 100.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/redvelvet.jpg')}}">
                    <div>
                        <p>Red velvet Cupcake (15's) </p>
                        <small>Price: 399.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/tart.jpg')}}">
                    <div>
                        <p>Tart (10's)</p>
                        <small>Price: 450.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/sufle.jpg')}}">
                    <div>
                        <p> Chocolate Soufle (4's) </p>
                        <small>Price: 450.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        <tr>
            <td>
                <div class="cart-info">
                    <img src="{{ asset('imgs/mamon.jpg')}}">
                    <div>
                        <p>Mamon (5's)</p>
                        <small>Price: 199.00</small>
                        <br>
                        <a href=""> Remove </a>
                    </div>
                </div>
            </td>
            <td><input type="number" value="1"></td>
            <td>₱50.00</td>
        </tr>
        
    </table>

    <!--total price-->
    <div class="total-price">
        <table>
            <tr>
                <td><a href="" class="btn">Checkout</a></td>
                <td>Total</td>
                <td>170.00</td>
            </tr>
        </table>
    </div>
</div>



    <!--footer-->
        <div class="footer">
            @include('include.footer')
        </div>

@endsection

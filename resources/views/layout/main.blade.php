<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    @yield('content')

    <!-----js for toggle menu----->
    <script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "300px"
            }
            else
            {
                MenuItems.style.maxHeight = "0px"
            }
        }

    var ProductImg = document.getElementById("ProductImg");
            var SmallImg = document.getElementsByClassName("small-img")

                SmallImg[0].onclick = function()
                {
                    ProductImg.src = SmallImg[0].src;
                }
                SmallImg[1].onclick = function()
                {
                    ProductImg.src = SmallImg[1].src;
                }
                SmallImg[2].onclick = function()
                {
                    ProductImg.src = SmallImg[2].src;
                }
                SmallImg[3].onclick = function()
                {
                    ProductImg.src = SmallImg[3].src;
                }
                SmallImg[4].onclick = function()
                {
                    ProductImg.src = SmallImg[4].src;
                }
        </script>
</body>
</html>

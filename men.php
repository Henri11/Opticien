<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<div class="row">
    <div class="col-sm-12 men-img d-flex justify-content-center align-items-center">
        <!--            <img src="img/woman-422706_1920.jpg" width="100%" height="80%" alt="">-->
        <h1><strong> MEN'S</strong></h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 d-flex justify-content-center align-items-center">
        <h2>Les meilleurs ventes</h2>

    </div>
</div>

<div class="row">

    <div class="col-sm-3">

        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="container-hm">
            <img src="img/wood-sunglasses-2500492_1920.jpg%20%20.jpg" alt="Avatar" class="image" style="width:100%">
            <a href="">
                <div class="middle">
                    <div class="text">Gucci <br> 120€ </div>


                </div>
            </a>
        </div>
    </div>



</div>






<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">


</script>
<script>
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 5) {

            $('header nav').removeClass('navbar-dark');
            $('header nav').addClass('navbar-light');
            $('header nav').addClass('black');
            $('.logo').attr({
                'src': "assets/img/brand_logo_black.png"
            });
        } else {
            $('header nav').removeClass('navbar-light');
            $('header nav').removeClass('black');
            $('header nav').addClass('navbar-dark');
            $('.logo').attr({
                'src': "assets/img/brand_logo.png"
            });
        }
    });

</script>
<!-- Bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">


</script>
<!-- AOS On Scroll Effect Js -->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script>
    AOS.init();

</script>

<?php include 'includes/footer.php';?>

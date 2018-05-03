<?php include 'includes/head.php';?>
<?php include 'includes/header.php';?>

<div class="row">
    <div class="col-sm-12 contact-img">
        <!--            <img src="img/woman-422706_1920.jpg" width="100%" height="80%" alt="">-->
        <h1> Nous contacter</h1>
    </div>
</div>

<section id="contact">
    <div class="section-content">
        <h1 class="section-header">Get in <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Touch with us</span></h1>
        <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h3>
    </div>
    <div class="contact-section">
        <div class="container">
            <form>
                <div class="col-md-6 form-line">
                    <div class="form-group">
                        <label for="exampleInputUsername">Your name</label>
                        <input type="text" class="form-control" id="" placeholder=" Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email Address</label>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder=" Enter Email id">
                    </div>
                    <div class="form-group">
                        <label for="telephone">Mobile No.</label>
                        <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description"> Message</label>
                        <textarea class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                    </div>
                    <div>

                        <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button>
                    </div>

                </div>
            </form>
        </div>
</section>




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

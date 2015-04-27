<!DOCTYPE html>
<html lang="en">

<head>

    <?php include 'includes/head.html' ?>
    <meta property="og:url" content="http://iasas.jisedu.or.id/softball/index.php">

    <title>IASAS Softball 2015</title>

</head>

<body>

    <?php include 'includes/nav.html' ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/front-logo.png');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-fountain.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-field-2.jpg');"></div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/front-field.jpg');"></div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-">
                <h1 class="page-header">
                    Welcome to the 32<sup>nd</sup> IASAS Softball Tournament!
                </h1>
            </div>
            <div class="col-md-12">
                <p>Dear IASAS Softball players, coaches, administrators and visitors,</p>
                <p>A warm and sincere welcome to the Jakarta Intercultural School campus as our esteemed guests for what promises to be a fabulous IASAS Softball tournament.  Softball is a sport that has enjoyed tremendous interest and support within our IASAS league for many years now and this year is no exception.  Each team has put in the ‘hard yards’ and is primed and ready to do battle.</p>
                <p>I would like to thank our Athletics Coordinator, Mr. Jake Stockman, and his amazing team of helpers, for putting this event together.  We have spent many months planning and crafting a tournament that is worthy of the effort and commitment that our players will bring to it.  Our entire campus has thrown itself behind the event and we look forward to enjoying the talent on display, celebrating the inspiring performances and camaraderie between the teams, whilst also building new friendships and connections in the process.</p>
                <p>As with all IASAS events, the success of this event will emanate not only from the quality of the individual performances that we will see, but also from the energy, support and spirit of the collective group of participants. I encourage you to celebrate the sport in true IASAS spirit – one of healthy competition, friendship and mutual respect.</p>
                <p>We stand at the ready to serve your needs, so please don’t hesitate to ask for anything you need.  I wish you all the very best for tournament and hope you embrace the opportunity to build new friendships and share the love of the game. May all players find the sweet spot, run hard and turn left.</p>
                <p>Steve Clark<br>
                High School Principal<br>
                Jakarta Intercultural School</p>
            </div>
        </div>
        <!-- /.row -->

    <?php include 'includes/footer.html' ?>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

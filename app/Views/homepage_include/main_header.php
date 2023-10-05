<!-- Start Main Top -->
<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark navbar-default bootsnav">
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                    aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="<?= base_url() ?>images/logo.png" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="/shop">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="/category">Products</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li> -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <!-- ... (previous code) -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item search">
                        <a href="#" class="nav-link"><i class="fa fa-search text-white"></i></a>
                    </li>
                    <li class="nav-item">
                        <a href="/signin" class="nav-link btn btn-dark login-button">
                            Login <!--alam ko na ung mas mdaling paraan without creating a new view file but for now, ill make one-->
                        </a>
                    </li>
                </ul>
            </div>

    </nav>
    <!-- End Navigation -->
</header>
<!-- End Main Top -->


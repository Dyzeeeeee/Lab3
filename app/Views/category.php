<?= $this->include('homepage_include/head'); ?>


<body>

    <!-- Start Main Top -->
    <?= $this->include('homepage_include/main_header'); ?>

    <?= $this->include('homepage_include/search'); ?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>All Products</h2>
                    <!-- isset ko later -->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <?= $this->include('products_include/products'); ?>
    
    <?= $this->include('homepage_include/insta'); ?>


    <?= $this->include('homepage_include/footer'); ?>


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <?= $this->include('homepage_include/js_plugins'); ?>

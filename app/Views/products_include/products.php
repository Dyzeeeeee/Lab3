<!-- Start Shop Page  -->
<div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3><!-- isset later -->
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <!-- <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1"
                                        data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Clothing
                                        <small class="text-muted">(100)</small>
                                    </a>
                                </div> --> 
                                <?php foreach ($categories as $c): ?>
                                <a href="#" class="list-group-item list-group-item-action"> <?= $c['cat_name']?> <small
                                        class="text-muted">(0) </small></a> <!--yung dami ay saka na-->
                                        <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
                                            <?php foreach ($products as $p): ?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <img src="<?=base_url()?>images/img-pro-01.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        data-placement="right" title="View"><i
                                                                            class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        data-placement="right" title="Compare"><i
                                                                            class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title="Add to Wishlist"><i
                                                                            class="far fa-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4><?= $p['name'] ?></h4>
                                                    <h5>₱<?= $p['price'] ?></h5>
                                                    <p><?= $p['description'] ?></p>
                                                    <a class="btn hvr-hover" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
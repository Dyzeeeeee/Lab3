<!-- Start Categories -->
<div class="categories-shop">
    <div class="container">
        <div class="row justify-content-center"> <!-- Added justify-content-center class to center the columns -->
            <?php foreach ($categories as $c): ?>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <!-- Adjusted column width to fit four boxes in one line -->
                <div class="shop-cat-box text-center">
                    <img class="img-fluid" src="<?= base_url((isset($c['cat_pic']) && ($c['cat_pic'] != Null)) ? $c['cat_pic'] : 'images/fill.jpg')?>" alt="" />
                    <a class="btn hvr-hover" href="#"><?= $c['cat_name']?></a>
                </div>
            </div>
            <?php endforeach;?>


        </div>
    </div>
</div>


<style>
.img-fluid{
    background: #f2e1d9;
}

.shop-cat-box{
    background: #f2e1d9;
}

</style>
<!-- End Categories -->
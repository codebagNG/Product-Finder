<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="main-container">
    <header class="page-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="<?= base_url('/public/assets/img/hero23.jpg') ?>">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span class="text-white alt-font">Latest Products&nbsp;</span>
                    <h1 class="text-white">Check here for best deals</h1>

                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="blog-masonry bg-muted">

        <div class="container">
		
            <div class="row">
			
                <div class="blog-masonry-container">
				<?php foreach ($products as $product) : ?>
                    <div class="col-md-4 col-sm-4 blog-masonry-item branding">
                        <div class="item-inner">
                            <a href="blog-single.html">
                                <img alt="Produt Image" src="<?= base_url('/images/'.$product->product_image) ?>" width="600" height="400">
                            </a>
                            <div class="post-title">
                                <h2><a href = "https://<?= $product->product_link ?>" target="_blank" > <?= $product->name ?> </a>
								</h2>
								
                                <p>
								<h6><?= $product->price ?>USD </h6>
                                    Category: <?= $this->product_model->get_category($product->category) ?> </br>
									Condition: <?= ($product->product_state == 1 ? "New": ($product->product_state == 2 ? "Fairly Used": "In Good Condition")) ?> </br>
									Quantity: <?= $product->quantity ?> </br>
                                </p>
                                <div class="post-meta">
                                    <span class="sub alt-font">Posted on </span>
                                    <span class="sub alt-font"><?= $product->created_at ?></span>
                                </div>
                                <a href="view/<?= $product->id ?>" class="link-text">Read More</a>
                            </div>
                        </div>
                    </div><!--end of individual post-->
					<?php endforeach; ?>
                </div><!--end of blog masonry container-->
				
            </div><!--end of row-->
			
        </div><!--end of container-->



    </section>
</div>


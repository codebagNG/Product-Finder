<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="main-container">
    <header class="page-header">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="<?= base_url('/public/assets/img/hero23.jpg') ?>">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span class="text-white alt-font">news &amp; Views&nbsp;</span>
                    <h1 class="text-white">Read and Get Fulfilled</h1>

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
                                    <span class="sub alt-font">Posted on June 16th</span>
                                    <span class="sub alt-font">4 Minute Read</span>
                                </div>
                                <a href="blog-single.html" class="link-text">Read More</a>
                            </div>
                        </div>
                    </div><!--end of individual post-->
					<?php endforeach; ?>
                </div><!--end of blog masonry container-->
				
            </div><!--end of row-->
			
        </div><!--end of container-->



    </section>
</div>


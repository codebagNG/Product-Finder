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

                    <div class="col-md-6 col-sm-6 blog-masonry-item branding">
                        <div class="item-inner">
                            <a href="blog-single.html">
                                <img alt="Blog Preview" src="<?= base_url('/public/assets/img/blog-masonry-1.jpg') ?>">
                            </a>
                            <div class="col-md-12">
			<?php if (isset($products) && !empty($products)) : ?>
				<table class="table table-striped table-condensed table-hover">
					<caption></caption>
					<thead>
						<tr>
							<th>Topics</th>
							<th>Posts</th>
							<th class="hidden-xs">Latest Products</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($products as $product) : ?>
							<tr>
								<td>
									<p>
										<a href="<?= base_url($product->permalink) ?>"><?= $product->name ?></a><br>
										<small>created by <a href="<?= base_url('user/' . $product->owner_id) ?>"><?= $product->owner_id ?></a>, <?= $product->created_at ?></small>
									</p>
								</td>
								<td>
									<p>
										<small><?= $product->count_posts ?></small>
									</p>
								</td>
								<td class="hidden-xs">
									<p>
										<small>by <a href="<?= base_url('user/' . $product->latest_post->author) ?>"><?= $product->latest_post->author ?></a><br><?= $product->latest_post->created_at ?></small></p>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else : ?>
				<h4>No Products yet</h4>
			<?php endif; ?>
		</div>
                        </div>
                    </div><!--end of individual post-->

                </div><!--end of blog masonry container-->
            </div><!--end of row-->
        </div><!--end of container-->



    </section>
</div>

<div class="footer-container">

    <footer class="bg-primary short-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="text-white">© 2017 Pivot Inc.</span>
                    <span class="text-white"><a href="#">hello@mini-blog.net</a></span>
                    <span class="text-white">+234 6127 492</span>
                    <span class="text-white">300 Collins St. Ikeja Lagos 3000</span>
                </div>
            </div><!--end for row-->
        </div><!--end of container-->

        <div class="contact-action">
            <div class="align-vertical">
                <i class="icon text-white icon_mail"></i>
                <a href="contact.html" class="text-white"><span class="text-white">Get in touch with us <i class="icon arrow_right"></i></span></a>
            </div>
        </div>
    </footer>
</div>
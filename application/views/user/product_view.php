<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="main-container">
    <header class="title">
        <div class="background-image-holder parallax-background">
            <img class="background-image" alt="Background Image" src="<?=base_url('/images/'.$product->product_image) ?>">
        </div>

        <div class="container align-bottom">
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-white"><a href="https://<?=$product->product_link ?>"><?=$product->name ?></a></h1>
                    <span class="sub alt-font text-white"><?=$product->created_at ?></span>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </header>

    <section class="article-single">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="article-body">
                        <p class="lead">
                            Price: <?=$product->price ?>USD
                        </p>

                        <p>
						Category: <?=$this->product_model->get_category($product->category) ?> </br>
						Quantity: <?=$product->quantity ?> </br>
						</p>

                        <p> Description: </br> <?=$product->description ?></p>


                    </div><!--end of article body-->
                </div>
            </div><!--end of row-->

            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="author-details">
                        <img alt="Author" src="../public/assets/img/team-small-1.png">
                        <h5><?= $this->user_model->get_name_from_user_id($product->owner_id); ?></h5>
                        <p>
                            Baba Dudu is a freelance writer and conservationist. He currently works as the Admissions Coordinator and oversees communications at the Seymour Marine Discovery Center in Ibadan, Nigeria.
                        </p>
                        <ul class="social-icons">
                            <li>
                                <a href="#">
                                    <i class="icon social_twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon social_facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="icon social_tumblr"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end of row-->

        </div><!--end of container-->
    </section>
</div>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="main-container">
    <section class="no-pad login-page fullscreen-element">

        <div class="background-image-holder">
            <img class="background-image" alt="Poster Image For Mobiles" src="<?= base_url('/public/assets/img/hero6.jpg') ?>">
        </div>

        <div class="container align-vertical">
            <div class="row">

                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    <h1 class="text-white">Error</h1>
                    <h4 class="text-white"><?= $error ?></h4>


                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>

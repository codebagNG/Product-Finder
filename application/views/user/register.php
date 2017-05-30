<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="main-container">
    <section class="no-pad login-page fullscreen-element">

        <div class="background-image-holder">
            <img class="background-image" alt="Poster Image For Mobiles" src="<?= base_url('/public/assets/img/hero6.jpg') ?>">
        </div>

        <div class="container align-vertical">
            <div class="row">
			<?php if (validation_errors()) : ?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?= validation_errors() ?>
				</div>
			</div>
			<?php endif; ?>
			<?php if (isset($error)) : ?>
				<div class="col-md-12">
					<div class="alert alert-danger" role="alert">
						<?= $error ?>
					</div>
				</div>
			<?php endif; ?>
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    <h1 class="text-white">Signup please</h1>
                    <div class="photo-form-wrapper clearfix">
                        <?= form_open() ?>
                            <input class="form-username" type="text" placeholder="Username" name="username" >
                            <input class="form-email" type="text" placeholder="Email Address" name="email">
                            <input class="form-password" type="password" placeholder="Password" name="password">
							<input class="form-password" type="password" placeholder="Confirm Password" name="password_confirm">
                            <Button class="btn btn-danger login-btn btn-filled" type="submit">Register</Button>
                        </form>
                    </div><!--end of photo form wrapper-->
                    <a href="<?= base_url('user/login') ?>" class="text-white">Have An Account? Sign In ?</a>
                </div>
            </div><!--end of row-->
        </div><!--end of container-->
    </section>
</div>
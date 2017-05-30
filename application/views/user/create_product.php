

<section class="article-single">
	
        <div class="container">
            <div class="row">
			
				<div class="background-image-holder parallax-background">
					<img class="background-image" alt="Background Image" src="<?= base_url('/public/assets/img/hero3.jpg') ?>">
				</div>
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <div class="article-body">
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
                                
								<?= form_open_multipart('product/create'); ?>

                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label class="control-label" >Product Name</label>
                                            <input type="text" class="form-control"  name="name" placeholder="Product Name and Model" autocomplete="off"  />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" >Category</label>
                                            <select name="category" class="form-control" value="3" data-plugin="select2" >
                                                <option selected="selected" disabled>Select Category</option>
                                                <option value="1" >Computers</option>
												<option value="2">Cars</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" >Condition</label>
                                            <select name="product_state" class="form-control" data-plugin="select2">
                                                <option selected="selected" disabled>Select Condition</option>
                                                <option value="1" >New</option>
												<option value="2" >Fairly Used</option>
												<option value="3">In Good Condition</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" >Quantity</label>
                                            <input type="text" class="form-control"  name="quantity"    placeholder="Quantity Available" autocomplete="off"  />
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label class="control-label" >Link</label>
                                            <input type="text" class="form-control"  name="link"    placeholder="Link to Product" autocomplete="off"  />
                                        </div>
										
                                    </div>
                                    <div class="row">
									<div class="form-group col-sm-12">
										<label class="control-label">Add Images </label>
										<input type="file" name="userfile" id="userfile" class="form-control" accept="image/*" />
										
									</div>
									
                                        <div class="form-group col-sm-12">
                                            <label class="control-label" >About Product</label>
                                            <textarea class="form-control"  name="about" rows="5"  placeholder="A Short Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button  class="btn btn-primary">Create</button>
                                    </div>
									
                                </form>
						</div>
				</div><!--end of individual post-->

			</div><!--end of blog masonry container-->
		</div><!--end of row-->
	



</section>

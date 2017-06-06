<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


<!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Product List</h1>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="row row-lg">


                    <div class="col-md-12">
                        <!-- Example Bordered Table -->
                        <div class="example-wrap">
						<?php if (isset($products) && !empty($products)) : ?>
                            <h4 class="example-title"><?=$username?></h4>
                            <div class="example table-responsive">
                                <!--
                                 <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <p class="text-center"></p>
                                </div>
                                 -->
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        
                                        <th>Product Name</th>
										<th>Category</th>
                                        <th>Date Posted</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($products as $product) : ?>
									<tr>
                                        
                                        <td><a href = "<?= $product->product_link ?>" > <?= $product->name ?> </a> </td>
										<td><?= $this->product_model->get_category($product->category) ?></td>
                                        <td><?= $product->created_at ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                                                    data-original-title="View">
                                                <a href="" ><i class="icon wb-eye" aria-hidden="true"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit">
                                                <a href="" ><i class="icon wb-edit" aria-hidden="true"></i></a>
                                            </button>
											<?php if($_SESSION['is_admin']=== true || $username === $_SESSION['username']): ?>
                                            <a href="<?= base_url('/product/delete_product/'.$product->id) ?>">
											<button type="button"  data-toggle="modal" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
											data-original-title="Delete">
												<i class="icon wb-close" aria-hidden="true"></i>
											</button>
											</a>
											<?php endif; ?>
                                        </td>
                                    </tr>
                                    
									<?php endforeach; ?>
									
									<?php else : ?>
										<h4>No Products yet</h4>
									<?php endif; ?>
									<!-- Modal For Delete -->
                                    <div class="modal fade" id="{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center">Warning!!!</h4>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <p style="font-weight: bold; font-size:24px;">Do you want to delete the category called <span style="text-transform: capitalize;">{{$category->category_name}}</span>?</p>
                                                    <img class="img-responsive center-block" width="30%" src="public/dashboard/img/delete.png" alt="">
                                                </div>
                                                <div class="modal-footer">
                                                    <a data-dismiss="modal" class="btn btn-info"><i class="zmdi zmdi-close"></i> Close</a> <a href="{{url('delete-category')}}/{{$category->id}}/{{str_slug($category->category_name)}}" class="btn btn-danger"><i class="zmdi zmdi-delete"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

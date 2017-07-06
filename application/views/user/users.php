<!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Users</h1>
    </div>
    <div class="page-content">
        <!-- Panel -->
        <div class="panel">
            <div class="panel-body container-fluid">
                <div class="row row-lg">
				<div class="col-md-12">
                        <!-- Example Bordered Table -->
                        <div class="example-wrap">
						<?php if (isset($users) && !empty($users)) : ?>
                            <h4 class="example-title">Users</h4>
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
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Name</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($users as $user) : ?>
									<tr>
                                        <td><a href = "<?= base_url('user/index/').$user->username ?>" > <?= $user->username ?> </a> </td>
										<td><?= $user->email ?></td>
                                        <td><?= $user->name ?></td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                                                    data-original-title="View">
                                                <a href="" ><i class="icon wb-eye" aria-hidden="true"></i></a>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                                                    data-original-title="Edit">
                                                <a href="" ><i class="icon wb-edit" aria-hidden="true"></i></a>
                                            </button>
                                            <a href="<?= base_url('/admin/delete_user/'.$user->id) ?>">
											<button type="button"  data-toggle="modal" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
											data-original-title="Delete">
												<i class="icon wb-close" aria-hidden="true"></i>
											</button>
											</a>
                                        </td>
                                    </tr>
                                    
									<?php endforeach; ?>
									
									<?php else : ?>
										<h4>No Users</h4>
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

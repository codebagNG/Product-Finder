<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<body class="@yield('body')">

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
                data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
                data-toggle="collapse">
            <i class="icon wb-more-horizontal" aria-hidden="true"></i>
        </button>
        <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
            <img class="navbar-brand-logo" src="../public/dashboard/assets/images/logo.png" title="Remark">
            <span class="navbar-brand-text hidden-xs"> Pivot</span>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
                data-toggle="collapse">
            <span class="sr-only">Toggle Search</span>
            <i class="icon wb-search" aria-hidden="true"></i>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="hidden-float" id="toggleMenubar">
                    <a data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="hidden-xs" id="toggleFullscreen">
                    <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
                <li class="hidden-float">
                    <a class="icon wb-search" data-toggle="collapse" href="#" data-target="#site-navbar-search"
                       role="button">
                        <span class="sr-only">Toggle Search</span>
                    </a>
                </li>

            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">

                <li class="dropdown">
                    <a style="text-transform: capitalize;" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
                       data-animation="scale-up" role="button">
                        Hello Blogger's name
                    </a>

                </li>
                <li class="dropdown">
                    <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
                       data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="../public/dashboard/portraits/5.jpg" alt="...">
                <i></i>
              </span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation">
                            <a href="" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
                        </li>
                        <li role="presentation">
                            <a href="" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Password Reset</a>
                        </li>
                        <li class="divider" role="presentation"></li>
                        <li role="presentation">
                            <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="scale-up"
                       aria-expanded="false">
                        <span class="flag-icon flag-icon-ng"></span>
                    </a>
                </li>

            </ul>
        </div>
        <!-- End Navbar Collapse -->

        <!-- Site Navbar Seach -->
        <div class="collapse navbar-search-overlap" id="site-navbar-search">
            <form role="search">
                <div class="form-group">
                    <div class="input-search">
                        <i class="input-search-icon wb-search" aria-hidden="true"></i>
                        <input type="text" class="form-control" name="site-search" placeholder="Search...">
                        <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
                                data-toggle="collapse" aria-label="Close"></button>
                    </div>
                </div>
            </form>
        </div>
        <!-- End Site Navbar Seach -->
    </div>
</nav>

<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu">
                    <li class="site-menu-category">General</li>
                    <li class="site-menu-item has-sub active open">
                        <a href="">
                            <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub active ">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-user" aria-hidden="true"></i>
                            <span class="site-menu-title">Profile</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="profile.html">
                                    <span class="site-menu-title">Update Profile</span>
                                </a>
                                <a class="animsition-link" href="view-profile.html">
                                    <span class="site-menu-title">View Profile</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="site-menu-item has-sub active ">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon wb-grid-4" aria-hidden="true"></i>
                            <span class="site-menu-title">Blog</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="create-blog.html">
                                    <span class="site-menu-title">Create Post</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="view-blog.html">
                                    <span class="site-menu-title">View Posts</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>


            </div>
        </div>
    </div>

    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
           data-original-title="Settings">
            <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon wb-power" aria-hidden="true"></span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>

<!-- Page -->
<div class="page animsition">
    <div class="page-header">
        <h1 class="page-title">Blog List</h1>
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
                            <h4 class="example-title">Product List Table</h4>
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
                                        <th>Seller</th>
                                        <th>Product Name</th>
                                        <th>Date Posted</th>
                                        <th class="text-nowrap">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($products as $product) : ?>
									<tr>
                                        <td><?= $product->seller ?></td>
                                        <td><a href = <?= $product->product_link ?> > <?= $product->name ?> </a> </td>
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
                                            <button type="button"  data-toggle="modal" href="#" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                                                    data-original-title="Delete">
                                                <i class="icon wb-close" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    
									<?php endforeach; ?>
									<div class="pagination">
									<?php
										$next_page = ($this_page + 1 <= $total_pages) ?  $this_page + 1 : "";
										
										if ($this_page == 1){
											echo sprintf('<strong>1</strong> 2 <a href = "./%u" > > </a>',$next_page );
										}else if($this_page == $total_pages){
											echo sprintf('<a href = "./%u" > < </a> %u <strong>%u</strong> ',$this_page - 1, $this_page - 1, $this_page );
										}else {
											echo sprintf('<a href = "./%u" > < </a> %u <strong>%u</strong> %u <a href = "./%u" > > </a>',$this_page-1, $this_page - 1, $this_page, $this_page+1, $this_page+1);
										}

									?>
									</div>									
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

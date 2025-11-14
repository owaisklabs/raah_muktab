<div class="sidebar-wrapper">
	<div>
		<div class="logo-wrapper">
			<a href="<?php echo e(route('/')); ?>"><img class="img-fluid for-light" src="<?php echo e(asset('assets/images/logo/logo.png')); ?>" alt=""><img class="img-fluid for-dark" src="<?php echo e(asset('assets/images/logo/logo_dark.png')); ?>" alt=""></a>
			<div class="back-btn"><i class="fa fa-angle-left"></i></div>
			<div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
		</div>
		<div class="logo-icon-wrapper"><a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a></div>
		<nav class="sidebar-main">
			<div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
			<div id="sidebar-menu">
				<ul class="sidebar-links" id="simple-bar">
					<li class="back-btn">
						<a href="<?php echo e(route('/')); ?>"><img class="img-fluid" src="<?php echo e(asset('assets/images/logo/logo-icon.png')); ?>" alt=""></a>
						<div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
					</li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav " href="<?php echo e(route('index')); ?>">
                                <i data-feather="git-pull-request"> </i><span><?php echo e(trans('lang.Dashboard')); ?></span>
                            </a>
                    </li>
                    
                    <li class="sidebar-main-title">
						<div>
							<h6 class="lan-1"><?php echo e(trans('lang.General')); ?> </h6>
						</div>
					</li>
                    <li class="sidebar-list">
						
                        <a class="sidebar-link sidebar-title " href="#">
                            <i data-feather="shopping-cart"></i><span>Sales</span>
							
                            <div class="according-menu"><i class="fa fa-angle-"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->routeIs(['sales.index','sales.create']) ? 'block' : 'none;'); ?>;">
                            <li><a href="" class="">Sales</a></li>
                            <li><a href="" class="">Create Sale</a></li>
                        </ul>
                    </li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->routeIs(['author.index','author.create']) ? 'active' : ''); ?>" href="#">
							<i data-feather="shopping-bag"></i><span>Authors</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->routeIs(['author.index','author.create']) ? 'down' : 'right'); ?>"></i></div>
						</a>
						
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->routeIs(['author.index','author.create'])  ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('author.index')); ?>" class="<?php echo e(request()->routeIs(['author.index']) ? 'active' : ''); ?>">Authors</a></li>
		                    <li><a href="<?php echo e(route('author.create')); ?>" class="<?php echo e(request()->routeIs(['author.create']) ? 'active' : ''); ?>">Create Author</a></li>
		                </ul>
					</li>



                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->routeIs(['publisher.index','publisher.create']) ? 'active' : ''); ?>" href="#">
							<i data-feather="dollar-sign"></i><span>Publishers</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->routeIs(['publisher.index','publisher.create']) ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display:<?php echo e(request()->routeIs(['publisher.index','publisher.create'])  ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('publisher.index')); ?>" class="<?php echo e(request()->routeIs(['publisher.index']) ? 'active' : ''); ?>">Publishers</a></li>
		                    <li><a href="<?php echo e(route('publisher.create')); ?>" class="<?php echo e(request()->routeIs(['publisher.create']) ? 'active' : ''); ?>">Create Publisher</a></li>
		                </ul>
					</li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title<?php echo e(request()->routeIs(['supplier.index','supplier.create']) ? 'active' : ''); ?> " href="#">
                            <i data-feather="dollar-sign"></i><span>Supplier</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->routeIs(['supplier.index','supplier.create']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->routeIs(['supplier.index','supplier.create'])  ? 'block' : 'none;'); ?>">
                            <li><a href="<?php echo e(route('supplier.index')); ?>" class="<?php echo e(request()->routeIs(['supplier.index']) ? 'active' : ''); ?>">Suppliers</a></li>
                            <li><a href="<?php echo e(route('supplier.create')); ?>" class="<?php echo e(request()->routeIs(['supplier.create']) ? 'active' : ''); ?>">Create Supplier</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title<?php echo e(request()->routeIs(['book.index','book.create']) ? 'active' : ''); ?> " href="#">
                            <i data-feather="dollar-sign"></i><span>Book</span>
                            <div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->routeIs(['book.index','book.create']) ? 'down' : 'right'); ?>"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: <?php echo e(request()->routeIs(['book.index','book.create'])  ? 'block' : 'none;'); ?>">
                            <li><a href="<?php echo e(route('book.index')); ?>" class="<?php echo e(request()->routeIs(['book.index']) ? 'active' : ''); ?>">Books</a></li>
                            <li><a href="<?php echo e(route('book.create')); ?>" class="<?php echo e(request()->routeIs(['book.create']) ? 'active' : ''); ?>">Create Book</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title " href="#">
                            <i data-feather="dollar-sign"></i><span>Returns</span>
                            <div class="according-menu"><i class="fa fa-angle-"></i></div>
                        </a>
                        <ul class="sidebar-submenu" style="display: none;">
                            <li><a href="" class="">Returns</a></li>
                            <li><a href="" class="">Create Return</a></li>
                        </ul>
                    </li>

                    <li class="sidebar-main-title">
						<div>
							<h6>Others</h6>
						</div>
					</li>
                    



                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="form1">
                        <?php echo csrf_field(); ?>
                    </form>
                    <li class="sidebar-list">
						<a class="sidebar-link " href="javascript:;" onclick="document.getElementById('form1').submit();">
							<i data-feather="log-out"></i><span>Logout</span>
						</a>
					</li>
					





				</ul>
			</div>
			<div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
		</nav>
	</div>
</div>
<?php /**PATH D:\wamp64\www\raah_muktab\resources\views/ui/layouts/simple/sidebar.blade.php ENDPATH**/ ?>
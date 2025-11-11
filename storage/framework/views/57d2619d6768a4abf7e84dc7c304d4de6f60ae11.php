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
                            <a class="sidebar-link sidebar-title link-nav <?php echo e(Route::currentRouteName()=='index' ? 'active' : ''); ?>" href="<?php echo e(route('index')); ?>">
                                <i data-feather="git-pull-request"> </i><span><?php echo e(trans('lang.Dashboard')); ?></span>
                            </a>
                    </li>
                    
                    <li class="sidebar-main-title">
						<div>
							<h6 class="lan-1"><?php echo e(trans('lang.General')); ?> </h6>
						</div>
					</li>
					<li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="shopping-bag"></i><span>Purchase</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Purchases</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Purchase</a></li>
		                </ul>
					</li>

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="shopping-cart"></i><span>Sales</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Sales</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Sale</a></li>
		                </ul>
					</li>

                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="dollar-sign"></i><span>Payments</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Payments</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Payment</a></li>
		                </ul>
					</li>
                    <li class="sidebar-main-title">
						<div>
							<h6>Others</h6>
						</div>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="users"></i><span>Customers</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Customers</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Customer</a></li>
		                </ul>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="user-check"></i><span>Purchaser</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Purchasers</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Purchaser</a></li>
		                </ul>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="user"></i><span>Suppliers</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Suppliers</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Supplier</a></li>
		                </ul>
					</li>
                    <li class="sidebar-list">
						<a class="sidebar-link sidebar-title <?php echo e(request()->route()->getPrefix() == '/users' ? 'active' : ''); ?>" href="#">
							<i data-feather="book-open"></i><span>Reports</span>
							<div class="according-menu"><i class="fa fa-angle-<?php echo e(request()->route()->getPrefix() == '/users' ? 'down' : 'right'); ?>"></i></div>
						</a>
						<ul class="sidebar-submenu" style="display: <?php echo e(request()->route()->getPrefix() == '/users' ? 'block' : 'none;'); ?>;">
		                    <li><a href="<?php echo e(route('user-profile')); ?>" class="<?php echo e(Route::currentRouteName()=='user-profile' ? 'active' : ''); ?>">Payments</a></li>
		                    <li><a href="<?php echo e(route('user-cards')); ?>" class="<?php echo e(Route::currentRouteName()=='user-cards' ? 'active' : ''); ?>">Create Payment</a></li>
		                </ul>
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
<?php /**PATH C:\wamp64\www\Cuba\resources\views/layouts/simple/sidebar.blade.php ENDPATH**/ ?>
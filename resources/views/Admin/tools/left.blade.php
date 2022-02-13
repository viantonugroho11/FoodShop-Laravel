
		<div class="brand-logo">
			<a href="index.html">
				<img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="{{route('administrator')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-house-1"></span><span class="mtext">Dashboard</span>
						</a>
					</li>
					<li>
						<a href="{{route('produk.index')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-edit2"></span><span class="mtext">Product</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="{{route('transaksi.index')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-library"></span><span class="mtext">Transaksi</span>
						</a>
					</li>
					<li>
						<a href="{{route('laporan.index')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Laporan</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="{{route('admin.logout')}}" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-apartment"></span><span class="mtext">Log out</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
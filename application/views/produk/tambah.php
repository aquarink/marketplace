		<!-- begin::Body -->
<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
	<!-- BEGIN: Left Aside -->
	<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
		<i class="la la-close"></i>
	</button>
	<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
		<!-- BEGIN: Aside Menu -->
		<div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		data-menu-vertical="true"
		data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
		>
		<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
			<li class="m-menu__item  m-menu__item--active" aria-haspopup="true" >
				<a  href="index.html" class="m-menu__link ">
					<i class="m-menu__link-icon flaticon-line-graph"></i>
					<span class="m-menu__link-title">
						<span class="m-menu__link-wrap">
							<span class="m-menu__link-text">
								Dashboard
							</span>
							<span class="m-menu__link-badge">
								<span class="m-badge m-badge--danger">
									2
								</span>
							</span>
						</span>
					</span>
				</a>
			</li>
			<li class="m-menu__section">
				<h4 class="m-menu__section-text">
					Components
				</h4>
				<i class="m-menu__section-icon flaticon-more-v3"></i>
			</li>
			<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover">
				<a  href="#" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-layers"></i>
					<span class="m-menu__link-text">
						Base
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu ">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
							<span class="m-menu__link">
								<span class="m-menu__link-text">
									Base
								</span>
							</span>
						</li>
						<li class="m-menu__item " aria-haspopup="true" >
							<a  href="components/base/state.html" class="m-menu__link ">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									State Colors
								</span>
							</a>
						</li>										
					</ul>
				</div>
			</li>
		</ul>
	</div>
	<!-- END: Aside Menu -->
</div>
<!-- END: Left Aside -->
<div class="m-grid__item m-grid__item--fluid m-wrapper">
	<!-- BEGIN: Subheader -->
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Tambah Produk
				</h3>
			</div>
			<div>
				<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
					<span class="m-subheader__daterange-label">
						<span class="m-subheader__daterange-title"></span>
						<span class="m-subheader__daterange-date m--font-brand"></span>
					</span>
					<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
						<i class="la la-angle-down"></i>
					</a>
				</span>
			</div>
		</div>
	</div>
	<!-- END: Subheader -->
	<div class="m-content">
		<!--Begin::Section-->
		<div class="row">
			<div class="col-xl-12">

				<div class="m-portlet" id="m_portlet">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Informasi Produk
								</h3>
							</div>
						</div>
					</div>
					<form class="m-form m-form--state">
						<div class="m-portlet__body">
							<div class="form-group m-form__group has-success">
								<label class="form-control-label" for="inputSuccess1">
									Nama Produk
								</label>
								<span class="m-form__help">
									Tulis nama produk sesuai jenis, merek, dan rincian produk.
								</span>
								<input type="text" name="name" placeholder="Masukkan Judul Produk Anda..." class="form-control form-control-success m-input" id="">
							</div>

							<div class="form-group m-form__group has-success">
								<label class="form-control-label" for="inputSuccess1">
									Gambar Produk
								</label>
								<span class="m-form__help">
									Format gambar .jpg .jpeg .png dan ukuran minimum 300 x 300px (Untuk gambar optimal gunakan ukuran 700 x 700 px)
								</span>
								<div class="col-lg-4 col-md-9 col-sm-12">
									<div class="m-dropzone dropzone m-dropzone--primary" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
										<div class="m-dropzone__msg dz-message needsclick">
											<h3 class="m-dropzone__msg-title">
												Drop files here or click to upload.
											</h3>
											<span class="m-dropzone__msg-desc">
												Upload up to 10 files
											</span>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group m-form__group has-success">
								<label class="form-control-label" for="inputSuccess1">
									Kategori
								</label>
								<span class="m-form__help">
									Pilih kategori produk.
								</span>
								<select class="form-control form-control-success m-input">
									<option>a</option>
								</select>
							</div>


							<div class="form-group m-form__group has-danger">
								<label class="form-control-label" for="inputDanger1">
									Input with danger
								</label>
								<input type="text" class="form-control form-control-danger m-input" id="inputDanger1">
								<div class="form-control-feedback">
									Sorry, that username's taken. Try another?
								</div>
								<span class="m-form__help">
									Example help text that remains unchanged.
								</span>
							</div>
						</div>
					</form>
					
				</div>

				<div class="m-portlet" id="m_portlet">
					<div class="m-portlet__head">
						<div class="m-portlet__head-caption">
							<div class="m-portlet__head-title">
								<h3 class="m-portlet__head-text">
									Harga Produk
								</h3>
							</div>
						</div>
					</div>
					<form class="m-form m-form--state">
						<div class="m-portlet__body">
							<div class="form-group m-form__group has-success">
								<label class="form-control-label" for="inputSuccess1">
									Pemesanan Minimum / Buah
								</label>
								<span class="m-form__help">
									Atur jumlah minimum yang harus dibeli untuk produk ini. Maksimum 10.000
								</span>
								<input type="number" name="name" class="form-control form-control-success m-input" id="" value="1">
							</div>

							<div class="form-group m-form__group has-success">
								<label class="form-control-label" for="inputSuccess1">
									Kategori
								</label>
								<span class="m-form__help">
									Pilih kategori produk.
								</span>
								<select class="form-control form-control-success m-input">
									<option>a</option>
								</select>
								
								<div class="form-control-feedback">
									Success! You've done it.
								</div>
							</div>


							<div class="form-group m-form__group has-danger">
								<label class="form-control-label" for="inputDanger1">
									Input with danger
								</label>
								<input type="text" class="form-control form-control-danger m-input" id="inputDanger1">
								<div class="form-control-feedback">
									Sorry, that username's taken. Try another?
								</div>
								<span class="m-form__help">
									Example help text that remains unchanged.
								</span>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</div>
		<!--End::Section-->
	</div>
</div>
</div>
<!-- end:: Body -->


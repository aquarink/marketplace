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
	<!-- <div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title ">
					Tambah Produk
				</h3>
			</div>
		</div>
	</div> -->

	<div class="m-content">
		
		<form>
			<!--begin::Portlet-->
			<div class="m-portlet">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Tambhan Produk
							</h3>
						</div>
					</div>
				</div>

				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Nama Produk
								<span class="m-form__help">
									(Nama produk sesuai jenis)
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="text" name="name" placeholder="Masukkan Judul Produk Anda..." class="form-control form-control-danger m-input" id="">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Kategori Produk
								<span class="m-form__help">
									(Kategori produk sesuai jenis)
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<select style="border-color: #5867dd" name="name" class="form-control form-control-danger m-input" id="">
									<option>aaaa</option>
								</select>
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Gambar Produk

								<span class="m-form__help">
									(Format gambar .jpg .jpeg .png)
								</span>
							</label>
							<div class="col-lg-7 col-md-9 col-sm-12">
								<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
									<div class="m-dropzone__msg dz-message needsclick">
										<h3 class="m-dropzone__msg-title">
											Klik atau Drop gambar produk disini
										</h3>
										<span class="m-dropzone__msg-desc">
											(Upload up to 5 files)
										</span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>


				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Tambhan Produk
							</h3>
						</div>
					</div>
				</div>
				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Nama Produk
								<span class="m-form__help">
									(Nama produk sesuai jenis)
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="text" name="name" placeholder="Masukkan Judul Produk Anda..." class="form-control form-control-danger m-input" id="">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Kategori Produk
								<span class="m-form__help">
									(Kategori produk sesuai jenis)
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<select style="border-color: #5867dd" name="name" class="form-control form-control-danger m-input" id="">
									<option>aaaa</option>
								</select>
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Gambar Produk

								<span class="m-form__help">
									(Format gambar .jpg .jpeg .png)
								</span>
							</label>
							<div class="col-lg-7 col-md-9 col-sm-12">
								<div class="m-dropzone dropzone m-dropzone--primary dz-clickable" action="inc/api/dropzone/upload.php" id="m-dropzone-two">
									<div class="m-dropzone__msg dz-message needsclick">
										<h3 class="m-dropzone__msg-title">
											Klik atau Drop gambar produk disini
										</h3>
										<span class="m-dropzone__msg-desc">
											(Upload up to 5 files)
										</span>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-9 ml-lg-auto">
									<button type="reset" class="btn btn-brand">
										Submit
									</button>
									<button type="reset" class="btn btn-secondary">
										Cancel
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>
</div>
<!-- end:: Body -->


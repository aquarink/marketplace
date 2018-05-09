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
				<!-- ============ INFORMASI PRODUK BEGIN ============ -->
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h5 class="m-portlet__head-text">
								Tambah Produk
							</h5>
						</div>
					</div>
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<h5 class="m-portlet__head-text">
									Informasi Produk
								</h5>
							</li>
						</ul>
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
								<input style="border-color: #5867dd" type="text" name="namaProduk" placeholder="Masukkan Nama Produk Anda..." class="form-control form-control-danger m-input" id="">
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
								<select style="border-color: #5867dd" name="kategoriProduk" class="form-control form-control-danger m-input" id="">
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

				<!-- ============ INFORMASI PRODUK END ============ -->

				<!-- ============ HARGA PRODUK BEGIN ============ -->
				<div class="m-portlet__head">
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<h5 class="m-portlet__head-text">
									Harga Produk
								</h5>
							</li>
						</ul>
					</div>
				</div>

				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Minimum Pemesanan / Buah
								<span class="m-form__help">
									Atur jumlah minimum yang harus dibeli untuk produk ini.
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="number" name="minProduk" class="form-control form-control-danger m-input" id="" value="1">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Harga Produk
								<span class="m-form__help">
									(Kategori produk sesuai jenis)
								</span>
							</label>
							<label class="col-form-label col-lg-1">
								Rp.
							</label>
							<div class="col-lg-3 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="number" name="namaProduk" class="form-control form-control-danger m-input" id="">
							</div>
						</div>
					</div>

				</div>

				<!-- ============ HARGA PRODUK END ============ -->

				<!-- ============ PENGELOLA PRODUK BEGIN ============ -->
				<div class="m-portlet__head">
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<h5 class="m-portlet__head-text">
									Pengelola Stok
								</h5>
							</li>
						</ul>
					</div>
				</div>

				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Status Produk
							</label>

							<div class="col-md-9 col-sm-12">
								<div class="m-radio-list">
									<label class="m-radio">
										<input type="radio" name="example_6" value="1">
										Selalu tersedia
										<span  style="border: 1px solid #5867dd"></span>
									</label>
									<span class="m-form__help" style="margin-top: 0;margin-bottom: 5px;">
										Stok produk akan selalu tersedia dan tidak mengurangi stok ketika berhasil terjual.
									</span>

									<label class="m-radio">
										<input type="radio" name="example_6" value="2">
										Stock terbatas
										<span  style="border: 1px solid #5867dd"></span>
									</label>
									<span class="m-form__help" style="margin-top: 0;margin-bottom: 5px;">
										Aktifkan untuk mengatur jumlah stok & mencegah pembatalan pembelian.
									</span>

									<label class="m-radio">
										<input type="radio" name="example_6" value="3">
										Stok kosong
										<span  style="border: 1px solid #5867dd"></span>
									</label>

								</div>
							</div>
							
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Jumlah Stok
								<span class="m-form__help">
									Stok akan berkurang saat pembayaran produk oleh pembeli telah diverifikasi. Jumlah stok tidak ditampilkan pada pembeli.
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="number" name="stokProduk" class="form-control form-control-danger m-input" id="" value="1">
							</div>
						</div>
					</div>
				</div>

				<!-- ============ PENGELOLA PRODUK END ============ -->

				<!-- ============ DESKRIPSI BEGIN ============ -->
				<div class="m-portlet__head">
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<h5 class="m-portlet__head-text">
									Deskripsi Produk
								</h5>
							</li>
						</ul>
					</div>
				</div>

				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Kondisi Produk
							</label>

							<div class="col-md-9 col-sm-12">
								<div class="m-radio-inline">
									<label class="m-radio">
										<input type="radio" name="example_6" value="1">
										Baru
										<span style="border: 1px solid #5867dd"></span>
									</label>

									<label class="m-radio">
										<input type="radio" name="example_6" value="2">
										Bekas
										<span style="border: 1px solid #5867dd"></span>
									</label>
								</div>
							</div>
							
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Deskripsi Produk
								<span class="m-form__help">
									Deskripsikan produk secara lengkap & jelas.
								</span>
							</label>
							<div class="col-md-9 col-sm-12">
								<textarea style="border-color: #5867dd" class="form-control m-input" id="exampleTextarea" rows="10" placeholder="Masukkan Deskripsi Produk"></textarea>
							</div>
						</div>
					</div>
				</div>

				<!-- ============ DESKRIPSI END ============ -->

				<!-- ============ PENGIRIMAN BEGIN ============ -->
				<div class="m-portlet__head">
					<div class="m-portlet__head-tools">
						<ul class="m-portlet__nav">
							<li class="m-portlet__nav-item">
								<h5 class="m-portlet__head-text">
									Pengiriman
								</h5>
							</li>
						</ul>
					</div>
				</div>

				<div class="m-form m-form--fit m-form--label-align-right">
					<div class="m-portlet__body">

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Berat
							</label>

							<div class="col-md-9">
								<div class="row">
									<div class="col-md-3">
										<select class="form-control" style="border-color: #5867dd">
											<option>Gram(g)</option>
											<option>Kilogram(kg)</option>
										</select>
									</div>
									<div class="col-md-5">
										<input style="border-color: #5867dd" type="number" name="minProduk" class="form-control form-control-danger m-input" id="" value="1">
									</div>
								</div>
								
							</div>
							
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Asuransi
								<span class="m-form__help">
									Aktifkan jaminan kerugian, kerusakan & kehilangan atas pengiriman produk ini.
								</span>
							</label>
							<div class="col-md-9 col-sm-12">
								<div class="m-radio-inline">
									<label class="m-radio">
										<input type="radio" name="example_6" value="1">
										Opsional
										<span style="border: 1px solid #5867dd"></span>
									</label>

									<label class="m-radio">
										<input type="radio" name="example_6" value="2">
										Ya
										<span style="border: 1px solid #5867dd"></span>
									</label>
								</div>
							</div>
						</div>
					</div>

					<div class="m-portlet__foot m-portlet__foot--fit">
						<div class="m-form__actions m-form__actions">
							<div class="row">
								<div class="col-lg-9 ml-lg-auto">
									<button type="reset" class="btn btn-brand">
										Simpan
									</button>
									<button type="reset" class="btn btn-secondary">
										Cancel
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- ============ PENGIRIMAN END ============ -->




			</form>
			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>
</div>
<!-- end:: Body -->


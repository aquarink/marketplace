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

	<div class="m-content" ng-controller="MainCtrl">
		
		<form action="" method="post" enctype="multipart/form-data" name="formTambahProduk" id="formTambahProduk">

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
								<input  required style="border-color: #5867dd" type="text" ng-model="namaProduk" name="namaProduk" id="namaProduk" placeholder="Masukkan Nama Produk Anda..." class="form-control form-control-danger m-input" id="">
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
								<select required style="border-color: #5867dd" ng-model="kategoriProduk" name="kategoriProduk" id="kategoriProduk" class="form-control form-control-danger m-input" id="">
									<option ng-selected="kategoriProduk = 'kategoriOne'" value="kategoriOne">aaaa</option>
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
							<div class="col-lg-4 col-md-9 col-sm-12">
								<a style="border-color: #5867dd"class="form-control form-control-danger m-input" id="pilihGambarProduk">Pilih Gambar Produk Maksimal 5</a>
								<input required type="file" ng-model="triggerGambarProduk" name="triggerGambarProduk[]" id="triggerGambarProduk" multiple="" style="display:none"/ accept="image/,.jpg,.jpeg,.png">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<div class="col-md-1" id="previewGambarProduk"></div>
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
								<input required style="border-color: #5867dd" type="number" ng-model="minPesanProduk" name="minPesanProduk" id="minPesanProduk" class="form-control form-control-danger m-input" id="" value="1">
							</div>
						</div>

						<div class="form-group m-form__group row">
							<label class="col-form-label col-lg-3 col-sm-12">
								Harga Produk
								<span class="m-form__help">
									(Kategori produk sesuai jenis)
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">

								<div class="input-group">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2" style="border-color: #5867dd">
											Rp.
										</span>
									</div>
									<input required style="border-color: #5867dd" type="number" ng-model="hargaSatuanProduk" name="hargaSatuanProduk" id="hargaSatuanProduk" class="form-control form-control-danger m-input" id="">
								</div>
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
										<input required checked="" type="radio" ng-model="stokProduk" name="stokProduk" value="stokProdukTersedia">
										Selalu tersedia
										<span  style="border: 1px solid #5867dd"></span>
									</label>
									<span class="m-form__help" style="margin-top: 0;margin-bottom: 5px;">
										Stok produk akan selalu tersedia dan tidak mengurangi stok ketika berhasil terjual.
									</span>

									<label class="m-radio">
										<input type="radio" name="stokProduk" value="stokProdukTerbatas">
										Stock terbatas
										<span  style="border: 1px solid #5867dd"></span>
									</label>
									<span class="m-form__help" style="margin-top: 0;margin-bottom: 5px;">
										Aktifkan untuk mengatur jumlah stok & mencegah pembatalan pembelian.
									</span>

									<label class="m-radio">
										<input type="radio" name="stokProduk" value="stokProdukKosong">
										Stok kosong
										<span  style="border: 1px solid #5867dd"></span>
									</label>

								</div>
							</div>
							
						</div>

						<div class="form-group m-form__group row" id="inputProdukStok">
							<label class="col-form-label col-lg-3 col-sm-12">
								Jumlah Stok
								<span class="m-form__help">
									Stok akan berkurang saat pembayaran produk oleh pembeli telah diverifikasi. Jumlah stok tidak ditampilkan pada pembeli.
								</span>
							</label>
							<div class="col-lg-4 col-md-9 col-sm-12">
								<input style="border-color: #5867dd" type="number" name="inputStokProdukTerbatas" id="inputStokProdukTerbatas" class="form-control form-control-danger m-input" id="" value="1">
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
										<input required type="radio" ng-model="kondisiProduk" name="kondisiProduk" value="kondisiProdukBaru">
										Baru
										<span style="border: 1px solid #5867dd"></span>
									</label>

									<label class="m-radio">
										<input type="radio" name="kondisiProduk" value="kondisiProdukBekas">
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
							<div class="col-md-7 col-sm-12">
								<textarea required style="border-color: #5867dd" ng-model="deskripsiProduk" name="deskripsiProduk" id="deskripsiProduk" class="form-control m-input" id="exampleTextarea" rows="10" placeholder="Masukkan Deskripsi Produk"></textarea>
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
										<select required ng-model="satuanBeratProduk" name="satuanBeratProduk" id="satuanBeratProduk" class="form-control" style="border-color: #5867dd">
											<option ng-selected="satuanBeratProduk = 'gram'" value="gram">Gram(g)</option>
											<option value="kilogram">Kilogram(kg)</option>
										</select>
									</div>
									<div class="col-md-5">
										<input required style="border-color: #5867dd" type="number" ng-model="beratProduk" name="beratProduk" id="beratProduk" class="form-control form-control-danger m-input" id="" value="1">
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
										<input required type="radio" ng-model="asuransiProduk" name="asuransiProduk" value="asuransiProdukOptional">
										Opsional
										<span style="border: 1px solid #5867dd"></span>
									</label>

									<label class="m-radio">
										<input type="radio" name="asuransiProduk" value="asuransiProdukPakai">
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
									<button ng-disabled="formTambahProduk.$invalid" style="color:#fff" class="btn btn-brand" id="submitProduk" data-toggle="modal" data-target="#loadingSendProdukBaru" data-keyboard="false" data-backdrop="static">
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




<div class="modal fade" id="loadingSendProdukBaru" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<center>
					<table>
						<tr>
							<td style="vertical-align:middle;">
								<div class="m-spinner m-spinner--brand m-spinner--lg"></div>
								<div class="m-spinner m-spinner--primary m-spinner--lg"></div>
								<div class="m-spinner m-spinner--success m-spinner--lg"></div>
								<div class="m-spinner m-spinner--info m-spinner--lg"></div>
								<div class="m-spinner m-spinner--warning m-spinner--lg"></div>
								<div class="m-spinner m-spinner--danger m-spinner--lg"></div>
							</td>
						</tr>
					</table>
					<h5>Menyimpan Produk</h5>
				</center>
			</div>
		</div>
	</div>
</div>
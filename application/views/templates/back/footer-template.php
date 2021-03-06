<!-- begin::Footer -->
	<footer class="m-grid__item		m-footer ">
		<div class="m-container m-container--fluid m-container--full-height m-page__container">
			<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
				<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
					<span class="m-footer__copyright">
						2017 &copy; Metronic theme by
						<a href="https://keenthemes.com" class="m-link">
							Keenthemes
						</a>
					</span>
				</div>
				<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
					<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">
									About
								</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#"  class="m-nav__link">
								<span class="m-nav__link-text">
									Privacy
								</span>
							</a>
						</li>
						<li class="m-nav__item m-nav__item">
							<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
								<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- end::Footer -->
</div>
<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
	<i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->

<!-- begin::Quick Nav -->	
<!--begin::Base Scripts -->
<script src="<?php echo base_url(); ?>resources/assets/vendors/base/vendors.bundle.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>resources/assets/demo/default/base/scripts.bundle.min.js" type="text/javascript"></script>
<!--end::Base Scripts -->   
<!--begin::Page Vendors -->
<script src="<?php echo base_url(); ?>resources/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->  
<!--begin::Page Snippets -->
<script src="<?php echo base_url(); ?>resources/assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Snippets -->

<script type="text/javascript">var baseUrl = "<?php echo base_url(); ?>";</script>


<?php if($page == "produk/tambah") { ?>
	<script src="<?php echo base_url(); ?>resources/assets/js/angularJSv1.2.32.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>resources/assets/js/tambah.produk.js" type="text/javascript"></script>
<?php } ?>

</body>
<!-- end::Body -->
</html>
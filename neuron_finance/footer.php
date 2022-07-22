        <footer>
			<div class="primary-footer">
				<div class="container">
					<div class="row">
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-4">
							<?php dynamic_sidebar('widget-1'); ?>
						</div> <!--end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-2">
							<?php dynamic_sidebar('widget-2'); ?>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<?php dynamic_sidebar('widget-3'); ?>
						</div><!-- end single footer widget -->
						
						<!-- start single footer widget -->
						<div class="col-sm-6 col-md-3">
							<?php dynamic_sidebar('widget-4'); ?>
						</div><!-- end single footer widget -->
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- /.primary-footer -->

			<!-- footer copyright area -->
			<div class="copyright-wrapper text-center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright@2022. All Rights Reserved. Beautiful WordPress Theme By <a href="#">ACR</a></p>
						</div>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</div><!-- ./end copyright-wrapper -->
		</footer>

		<!-- preloader -->
		<div id="loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_four"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_one"></div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
	</body>
</html>
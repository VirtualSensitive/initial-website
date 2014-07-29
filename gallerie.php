<?php include_once( dirname( __FILE__ ) . '/config.php' ); ?>
<?php include_once( dirname( __FILE__ ) . '/includes/header.php' ); ?>

<div class="content_block">
	<!-- top_title -->
	<div class="top_title">
 		<div class="wraper">
   			<h2>
			   	Nos réalisations 
			   	<span>Evènementiel, plateau TV, accueil du public dans une bibliothèque, tout est possible avec Connec'table!</span>
   			</h2>
  		</div>
 	</div>
 	<!-- /top_title -->
</div>
<!-- End .content_block -->

<section id="middle" class="wraper">
					<div class="content_wrap nobg">
<!-- __________________________________________________ Start Content -->
						<section id="middle_content">
							<div class="entry">
								<section class="portfolio_container three_blocks">
									<?php 
						    			$projectObj = new Project();
						    			$projects = $projectObj->findAll();
						    		
						    			foreach( $projects as $project ) {
											$path = dirname( __FILE__ ) . '/uploads/' . $project->getId() . '/';
											$pattern="(\.jpg$)|(\.png$)|(\.jpeg$)"; //valid image extensions

											$imgs = array();
											
											if( $handle = opendir( $path ) ) {
											
												while( ($file = readdir( $handle ) ) !== false ) {
													if( $file != '.' && $file != '..' ) {
														$imgs[] = 'uploads/' . $project->getId() . '/' . $file;
													}
												}
												closedir( $handle );
											}
											
											if( count( $imgs ) <= 1 ) {
											?>
											<article class="portfolio format-album" data-category="<?php echo $project->getCategory(); ?>">
												<div class="portfolio_inner">
													<div class="portfolio_inner_box">
														<figure>
															<a href="projet.php?id=<?php echo $project->getId(); ?>" class="preloader"><img src="<?php echo $imgs[ 0 ]; ?>" alt="" class="fullwidth" /></a>
														</figure>
														<header class="entry-header">
															<h6 class="entry-title"><a href="projet.php?id=<?php echo $project->getId(); ?>"><?php echo $project->getName(); ?></a></h6>
														</header>
														<div class="hover_effect">
															<h5 class="entry-title"><a href="projet.php?id=<?php echo $project->getId(); ?>"><?php echo $project->getName(); ?></a></h5>
															<div class="hover_effect_links">
																<a href="<?php echo $imgs[ 0 ]; ?>" rel="prettyPhoto" title="<?php echo $project->getName(); ?>" class="cmsms_imagelink"></a>
																<a href="projet.php?id=<?php echo $project->getId(); ?>" class="cmsms_link"></a>
															</div>
															<div class="post_category">
																<?php echo $project->getCategory(); ?>
															</div>
														</div>
													</div>
												</div>
											</article>		
											<?php 
											} else {
											?>
											<article class="portfolio format-slider" data-category="<?php echo $project->getCategory(); ?>">
												<div class="portfolio_inner">
													<div class="portfolio_inner_box">
														<div class="shortcode_slideshow" id="slideshow_<?php echo $project->getId(); ?>">
															<div class="shortcode_slideshow_body">
																<script type="text/javascript">
																	jQuery(document).ready(function () { 
																		jQuery('#slideshow_<?php echo $project->getId(); ?> .shortcode_slideshow_slides').cmsmsResponsiveContentSlider( { 
																			sliderWidth : '100%', 
																			sliderHeight : 'auto', 
																			animationSpeed : 500, 
																			animationEffect : 'slide', 
																			animationEasing : 'easeInOutExpo', 
																			pauseTime : 0, 
																			activeSlide : 1, 
																			touchControls : true, 
																			pauseOnHover : false, 
																			arrowNavigation : true, 
																			slidesNavigation : false 
																		} );
																	} );
																</script>
																<div class="shortcode_slideshow_container">
																	<ul class="shortcode_slideshow_slides responsiveContentSlider">
																		<?php foreach( $imgs as $img ) { ?>
																		<li>
																			<figure>
																				<img src="<?php echo $img; ?>" alt="" class="fullwidth" />
																			</figure>
																		</li>
																		<?php } ?>
																	</ul>
																</div>
															</div>
														</div>
														<header class="entry-header">
															<h6 class="entry-title"><a href="projet.php?id=<?php echo $project->getId(); ?>"><?php echo $project->getName(); ?></a></h6>
														</header>
													</div>
												</div>
											</article>
											<?php 
											}
										}
						    		?>
									
									
									
								</section>
								<div class="cl"></div>
							</div>
						</section>
<!-- __________________________________________________ Finish Content -->
					</div>
				</section>
<!-- __________________________________________________ Finish Middle -->
				
		<script src="js/jquery.script.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine-lang.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
		<script src="js/jquery.jtweetsanywhere.js" type="text/javascript"></script>
		<script src="js/jquery.flickrfeed.min.js" type="text/javascript"></script>
		<script src="js/jquery.jPlayer.min.js" type="text/javascript"></script>
		<script src="js/jquery.jPlayer.playlist.min.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.min.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.run.js" type="text/javascript"></script>

<?php include_once( dirname( __FILE__ ) . '/includes/footer.php' ); ?>

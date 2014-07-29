<?php include_once( dirname( __FILE__ ) . '/config.php' ); ?>
<?php include_once( dirname( __FILE__ ) . '/includes/header.php' ); ?>

<?php 

	if( !isset( $_GET[ 'id' ] ) || empty( $_GET[ 'id' ] ) ) {
		header( 'Location: index.php' );
	}
	
	$project = new Project();
	$project->findOneById( $_GET[ 'id' ] );
	
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
	
?>

<div class="content_block">
 <!-- top_title -->
 <div class="top_title">
  <div class="wraper">
   <h2>
       <?php echo $project->getName(); ?> 
   	   <span> <?php echo $project->getSmallDescription(); ?> </span>
   </h2>
   
  </div>
 </div>
 <!-- /top_title -->
 <div class="wraper">
  <!-- Portfolio Single Post Full Width -->
  <div class="single_full">
   <!-- <a href="#" class="bx-prev">prev</a><a href="#" class="bx-next">next</a> -->
   <ul>
    <li>
    <?php if( count( $imgs ) <= 1 ): ?>
     <div class="img bwWrapper"><img src="<?php echo $imgs[ 0 ]; ?>" width="950"  alt="" /></div>
    <?php else: ?>
    <div class="shortcode_slideshow img bwWrapper" id="slideshow_<?php echo $project->getId(); ?>">
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
						arrowNavigation : false, 
						slidesNavigation : true 
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
    <?php endif; ?> 
    <div class="desc">
      <div class="things_list">
       <h4>Tags</h4>
       <i>Nos compétences</i>
       <ul>
       	<?php 
       		$tagsStr = $project->getTags();
       		$tags = explode( ',', $tagsStr );
       		
       		foreach( $tags as $tag ) {
       	?>
        	<li> <?php echo $tag; ?> </li>
        <?php } ?>
       </ul>
       <!-- <p><a class="btn_m" href="#">Visit Website</a></p> -->
      </div>
      <h4><?php echo $project->getName(); ?></h4>
      <i><?php echo $project->getCategory(); ?></i>
      <p><?php echo $project->getDescription(); ?></p>
     </div>
    </li>
   </ul>
  </div>
  <!-- /Portfolio Single Post Full Width -->
 </div>
</div>

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
<?php include_once( dirname( __FILE__ ) . '/../config.php' ); ?>
<?php include_once( dirname( __FILE__) . '/../includes/adminHeader.php' ); ?>

<?php 
	if( isset( $_GET[ 'id' ] ) && !empty( $_GET[ 'id' ] ) ) {
		$project = new Project();
		$project->findOneById( $_GET[ 'id' ] );
		
		if( isset( $_GET[ 'delete' ] ) && !empty( $_GET[ 'delete' ] ) ) {
			$file = $_GET[ 'delete' ];
			$path = dirname( __FILE__ ) . '/../uploads/' . $project->getId() . '/' . $file;
			
			unlink( realpath( $path ) );
		}
	}
?>

<div class="row">
	<p>
		<strong>Nom</strong> : <?php echo $project->getName(); ?> <br />
		<?php echo $project->getDescription(); ?>
	</p>
	<p>
		<strong>Photos</strong> : <br />
		<ul>
		<?php  
			$path = dirname( __FILE__ ) . '/../uploads/' . $project->getId() . '/';
			$pattern="(\.jpg$)|(\.png$)|(\.jpeg$)"; //valid image extensions
			
			if( $handle = opendir( $path ) ) {
				
				while( ($file = readdir( $handle ) ) !== false ) {
					if( $file != '.' && $file != '..' ) {
						echo '<li class="adminPic">';
						echo '<img src="../uploads/' . $project->getId() . '/' . $file . '" />';
						echo '<br />';
						echo '<a href="adminVoir.php?id=' . $project->getId() . '&delete=' . $file . '">Supprimer</a>';
						echo '</li>';
					}
				}
				closedir( $handle );
			}
		?>
		</ul>
	</p>
</div>
<!-- End .row -->

<style type="text/css">
	ul { 
		list-style: none; 
		overflow: hidden;
	}
	
	.adminPic {
		float: left;
		overflow: hidden;
		margin-right: 25px;
		text-align: center;
	}
		
	.adminPic img {
		width: 250px;
	}		
</style>

<?php include_once( dirname( __FILE__ ) . '/../includes/adminFooter.php' ); ?>

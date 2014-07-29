<?php 
	include_once( dirname( __FILE__ ) . '/../config.php' );
	
	if( isset( $_GET[ 'id' ] ) ) {
		$project = new Project();
		$project->findOneById( $_GET[ 'id' ] );
		$project->delete();
		
		header( 'Location: admin.php?delete=true' );
	} else {
		header( 'Location: admin.php?delete=false' );
	}
?>

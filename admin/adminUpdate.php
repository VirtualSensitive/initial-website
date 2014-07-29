<?php include_once( dirname( __FILE__ ) . '/../config.php' ); ?>
<?php include_once( dirname( __FILE__ ) . '/../includes/adminHeader.php' ); ?>

<?php 
	
	$projectUpdated = false;

	if( isset( $_GET[ 'id' ] ) ) {
		$project = new Project();
		$project->findOneById( $_GET[ 'id' ] );

		if( isset( $_POST[ 'form' ] ) ) {
			$name = $_POST[ 'name' ];
			$description = $_POST[ 'description' ];
			$smallDescription = $_POST[ 'smallDescription' ];
			$tags = $_POST[ 'tags' ];
			$category = $_POST[ 'category' ];
		
			$project->setName( $name );
			$project->setDescription( $description );
			$project->setSmallDescription( $smallDescription );
			$project->setCategory( $category );
			$project->setTags( $tags );
			$project->save( false );
			
			/* Pictures */
			if( isset( $_FILES['pictures'] ) ) {
				$dir = dirname( __FILE__ ) . '/../uploads/' . $project->getId();
					
				if( is_dir( $dir ) == false ) {
					mkdir( $dir, 0777 );
				}
					
				foreach($_FILES['pictures']['tmp_name'] as $key => $tmp_name ){
					$file_name = $key.$_FILES['pictures']['name'][$key];
					$file_size = $_FILES['pictures']['size'][$key];
					$file_tmp = $_FILES['pictures']['tmp_name'][$key];
					$file_type= $_FILES['pictures']['type'][$key];
			
					move_uploaded_file( $file_tmp, $dir . '/' . $file_name );
				}
			}
		
			$projectUpdated = true;
		}	
	}
	

?>

<?php if( $projectUpdated == true ): ?>
<p class="alert alert-success">
	Le projet a bien été modifié.
</p>
<?php endif; ?>

<div class="row">
	<h1>Modifier un projet</h1>

	<form method="post" action="#" enctype="multipart/form-data">
		<label for="name">Nom : </label>
		<input type="text" name="name" value="<?php echo $project->getName(); ?>" />
		
		<label for="category">Catégorie(s) : [séparées par des espaces]</label>
		<input type="text" name="category" value="<?php echo $project->getCategory(); ?>" />
		
		<label for="smallDescription">Description courte :</label>
		<input type="text" name="smallDescription" value="<?php echo $project->getSmallDescription(); ?>" />
		
		<label for="description">Description</label>
		<textarea name="description"><?php echo $project->getDescription(); ?></textarea>
		
		<label for="tags">Tags : [séparés par des virgules]</label>
		<input type="text" name="tags" value="<?php echo $project->getTags(); ?>" />
		
		<label for="pictures">Ajouter des photos</label>
		<input class="multi" type="file" name="pictures[]" /> <br />
	
		<br />
	
		<input type="hidden" name="form" />
		<input type="submit" value="Modifier" />
	</form>
</div>
<!-- End .row -->

<?php include_once( dirname( __FILE__ ) . '/../includes/adminFooter.php' ); ?>

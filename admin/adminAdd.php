<?php include_once( dirname( __FILE__ ) . '/../config.php' ); ?>
<?php include_once( dirname( __FILE__ ) . '/../includes/adminHeader.php' ); ?>

<?php
	$projectAdded = false;

	if( isset( $_POST[ 'form' ] ) ) {
		$name = $_POST[ 'name' ];
		$description = $_POST[ 'description' ];
		$smallDescription = $_POST[ 'smallDescription' ];
		$tags = $_POST[ 'tags' ];
		$category = $_POST[ 'category' ];
	
		$project = new Project();
		$project->setName( $name );
		$project->setDescription( $description );
		$project->setSmallDescription( $smallDescription );
		$project->setCategory( $category );
		$project->setTags( $tags );
		$project->save( true );

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

		$projectAdded = true;
	}
?>

<?php if( $projectAdded == true ): ?>
<p class="alert alert-success">
	Le projet a bien été ajouté.
</p>
<?php endif; ?>

<div class="row">
	<h1>Ajouter un projet</h1>

	<form method="post" action="#" enctype="multipart/form-data">
		<label for="name">Nom : </label>
		<input type="text" name="name" />
		
		<label for="category">Catégorie(s) : [séparées par des espaces]</label>
		<input type="text" name="category" />
		
		<label for="smallDescription">Description courte :</label>
		<input type="text" name="smallDescription" />
		
		<label for="description">Description :</label>
		<textarea name="description"></textarea>
		
		<label for="tags">Tags : [séparés par des virgules]</label>
		<input type="text" name="tags" />
	
		<label for="pictures">Ajouter des photos</label>
		<input class="multi" type="file" name="pictures[]" /> <br />
		
		<br />
	
		<input type="hidden" name="form" />
		<input type="submit" value="Ajouter" />
	</form>
</div>
<!-- End .row -->

<?php include_once( dirname( __FILE__ ) . '/../includes/adminFooter.php' ); ?>
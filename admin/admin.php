<?php include_once( dirname( __FILE__ ) . '/../config.php' ); ?>
<?php include_once( dirname( __FILE__ ) . '/../includes/adminHeader.php' ); ?>

<?php if( isset( $_GET[ 'delete' ] ) && $_GET[ 'delete' ] == 'true' ): ?>
<p class="alert alert-success">
	Le projet a bien été supprimé.
</p>
<?php elseif( isset( $_GET[ 'delete' ] ) && $_GET[ 'delete' ] == 'false' ): ?>
<p class="alert alert-error">
	Une erreur a eu lieu lors de la suppression du projet, merci de ré-essayer.
</p>
<?php endif; ?>

    	<div class="row">
    		<h1>Liste des projets enregistrés</h1>
    		<?php 
    			$projectObj = new Project();
    			$projects = $projectObj->findAll();
    		?>
    		<table class="table table-bordered table-hover">
    			<thead>
    				<th>Id</th>
    				<th>Nom</th>
    				<th>Description</th>
    				<th>Actions</th>
    			</thead>
    			<tbody>
    				<?php foreach( $projects as $project ): ?>
    				<tr>
    					<td> <?php echo $project->getId(); ?> </td>
    					<td> <?php echo $project->getName(); ?> </td>
    					<td> <?php echo substr( $project->getDescription(), 0, 50 ); ?>... </td>
    					<td>
    						<a href="adminVoir.php?id=<?php echo $project->getId(); ?>">Voir</a> - 
    						<a href="adminUpdate.php?id=<?php echo $project->getId(); ?>">Modifier</a> - 
    						<a href="adminDelete.php?id=<?php echo $project->getId(); ?>">Supprimer</a>
    					</td>
    				</tr>
    				<?php endforeach; ?>
    			</tbody>
    		</table>
    	</div>
    	<!-- End .row -->
    	<div class="row">
    		<p>
    			<a href="adminAdd.php">Ajouter un projet</a>
    		</p>
    	</div>
	    	
<?php include_once( dirname( __FILE__ ) . '/../includes/adminFooter.php' ); ?>

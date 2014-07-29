<?php

	include_once( dirname( __FILE__ ) . '/../config.php' );
	
	class Project {
		
		protected $_db;
		protected $_table = 'project';
		
		protected $_id;
		protected $_name;
		protected $_description;
		protected $_smallDescription;
		protected $_tags;
		protected $_category;
		
		public function __construct() {
			$database = Database::getInstance();
			$this->_db = $database->getPDOObject();	
		}
		
		public function findAll() {
			$query = $this->_db->prepare( 'SELECT * FROM ' . $this->_table . ' ORDER BY id DESC' );
			$query->execute();
			
			$results = $query->fetchAll( PDO::FETCH_OBJ );
			$projects = array();
			
			foreach( $results as $result ) {
				$project = new Project();
				$project->setId( $result->id );
				$project->setName( $result->name );
				$project->setDescription( $result->description );
				$project->setSmallDescription( $result->smallDescription );
				$project->setTags( $result->tags );
				$project->setCategory( $result->category );
				
				$projects[] = $project;
			}
			
			return $projects;
		}
		
		public function getAllCategories() {
			$query = $this->_db->prepare( 'SELECT category FROM ' . $this->_table );
			$query->execute();
			
			$results = $query->fetchAll( PDO::FETCH_OBJ );
			$categories = array();
			
			foreach( $results as $result ) {
				$cats = explode( ' ', $result->category );
				foreach( $cats as $cat ) {
					if( !in_array( $cat, $categories ) ) {
						$categories[] = $cat;
					}
				}
			}
			
			return $categories;
		}
		
		public function findOneById( $id ) {
			$query = $this->_db->prepare( 'SELECT * FROM ' . $this->_table . ' WHERE id=:id' );
			$query->execute( array( 'id' => $id ) );
			$result = $query->fetch( PDO::FETCH_OBJ );
			
			$this->_id = $id;
			$this->_name = $result->name;
			$this->_description = $result->description;
			$this->_smallDescription = $result->smallDescription;
			$this->_tags = $result->tags;
			$this->_category = $result->category;
		}
		
		public function save( $isNew ) {
			$query = null;
			
			if( $isNew == true ) {
				$query = $this->_db->prepare( 'INSERT INTO ' . $this->_table . ' VALUES( \'\', :name, :description, :smallDescription, :tags, :category )' );
			} else {
				$query = $this->_db->prepare( 'UPDATE ' . $this->_table . ' 
											   SET name=:name, description=:description, smallDescription=:smallDescription, tags=:tags, category=:category  
											   WHERE id=:id' );
			}
			
			$args = array( 
					'name' => $this->_name, 
					'description' => $this->_description, 
					'smallDescription' => $this->_smallDescription,
					'tags' => $this->_tags,
					'category' => $this->_category,
				);
			if( $isNew == false ) {
				$args[ 'id' ] = $this->_id;
			}
			
			$query->execute( $args );
			
			if( $isNew == true ) {
				$this->_id = $this->_db->lastInsertId();
			}
		}
		
		public function delete() {
			$query = $this->_db->prepare( 'DELETE FROM ' . $this->_table . ' WHERE id=:id' );
			$query->execute( array( 'id' => $this->_id ) );
		}
		
		
		public function getId() {
			return $this->_id;
		}
		
		public function setId( $id ) {
			$this->_id = $id;
		}
		
		public function getName() {
			return $this->_name;
		}
		
		public function setName( $name ) {
			$this->_name = $name;
		}
		
		public function getDescription() {
			return $this->_description;
		}
		
		public function setDescription( $description ) {
			$this->_description = $description;
		}
		
		public function getSmallDescription() {
			return $this->_smallDescription;
		}
		
		public function setSmallDescription( $description ) {
			$this->_smallDescription = $description;
		}
		
		public function getTags() {
			return $this->_tags;
		}
		
		public function setTags( $tags ) {
			$this->_tags = $tags;
		}
		
		public function getCategory() {
			return $this->_category;
		}
		
		public function setCategory( $category ) {
			$this->_category = $category;
		}
		
	}


?>
<?php

	include_once( dirname( __FILE__ ) . '/../config.php' );

	/**
	 * Classe d'accès à la base de données
	 * Design pattern Singleton (une unique instanciation est possible)
	 * Utilise PDO
	 * 
	 */
	
	class Database {
		
		protected $_PDOInstance = null; // Objet PDO
		protected static $_instance = null; // Objet Database
		
		/*
		 * Informations de connexion à la base
		 */
		

// 		const SQL_HOST = 'localhost';
// 		const SQL_USER = 'root';
// 		const SQL_PASSWORD = '';
// 		const SQL_DATABASE = 'virtualsensitive';
		
// 		const SQL_HOST = 'mysql5-17.pro';
// 		const SQL_USER = 'jeremydupro';
// 		const SQL_PASSWORD = '2vq7zz';
// 		const SQL_DATABASE = 'jeremydupro'; 
		
		const SQL_HOST = 'db463963773.db.1and1.com';
		const SQL_USER = 'dbo463963773';
		const SQL_PASSWORD = '2mz2d14e';
		const SQL_DATABASE = 'db463963773';
		
		/**
		 * Construit l'objet PDO
		 */
		protected function __construct() {
			$this->_PDOInstance = new PDO( 'mysql:dbname=' . self::SQL_DATABASE . ';host=' . self::SQL_HOST,
											self::SQL_USER, self::SQL_PASSWORD );
		}
		
		/**
		 * Retourne l'instance unique de cette classe
		 * 
		 * @return Database
		 */
		public static function getInstance() {
			// On crée l'objet s'il ne l'est pas déjà
			if( self::$_instance == null ) {
				self::$_instance = new Database();
			}
			
			return self::$_instance;
		}
		
		/**
		 * Retourne l'objet PDO qui sera utilisé pour les requêtes
		 * 
		 * @return PDO
		 */
		public function getPDOObject() {
			return $this->_PDOInstance;
		}
	}

?>

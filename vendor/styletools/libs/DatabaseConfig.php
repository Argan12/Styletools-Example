<?php
/*!
 * Styletools 1.5
 * Copyright 2019 Argan Piquet
 * Author : Argan Piquet
 */

namespace Styletools\Libs;

class DatabaseConfig {
    private static $instance;
    private $connexion;  

    /**
     * Get the class instance
     *
     * @return the DatabaseConnect singleton instance
     */
    public static function getInstance() {
        if (self::$instance === null) 
		{
            self::$instance = new DatabaseConfig();
        }
		
        return self::$instance;
    }

    /**
     * Private constructor to avoid any external instanciation.
     * Will be called only once by the getInstance method.
     */
    public function __construct() {
		$xml = 'src/config/databaseConfig.xml';
		$config = simplexml_load_file($xml);
		
		$this->connexion = new \PDO("mysql:host={$config->hostname};dbname={$config->dbname};charset=utf8", $config->username, $config->password);
    }

    /**
     * Private __clone method to prevent cloning
     *
     * @return void
     */
    private function __clone() {
		
	}
    
    public function getConnexion() {
		return $this->connexion;
    }
}
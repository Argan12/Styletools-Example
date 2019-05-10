<?php

namespace Styletools\Libs;

require_once('vendor/autoload.php');

use Styletools\Libs\DatabaseConfig;

class CrudBuilder extends DatabaseConfig {
	public $sqlQuery;
	public $bindValueQuery;
	
	public function databaseConnexion() {
		$instance = DatabaseConfig::getInstance();
		
		return $instance->getConnexion();
	}
	
	public function insert($tableName, $values) {
		$getDatabase = $this->databaseConnexion();
		
		$this->sqlQuery = 'INSERT INTO '.$tableName.' (';
		$this->bindValueQuery = '';
		
		foreach ($values as $rows => $alias)
		{
			if ($alias === end($values))
			{
				$this->sqlQuery .= $rows;
			} else {
				$this->sqlQuery .= $rows.', ';
			}
		}
		
		$this->sqlQuery .= ') VALUES (';
		
		foreach ($values as $rows => $alias)
		{
			if ($alias === end($values))
			{
				$this->sqlQuery .= ':'.$rows;
			} else {
				$this->sqlQuery .= ':'.$rows.', ';
			}
		}
		
		$this->sqlQuery .= ')';
		
		$insert = $getDatabase->prepare($this->sqlQuery);             
		
		foreach ($values as $rows => $alias)
		{
			$this->bindValueQuery .= $insert->bindValue(':'.$rows, $alias, \PDO::PARAM_STR);
		}
		
		$insert->execute();
		
		return $insert;
	}
	
	public function selectAll($tableName) {
		$getDatabase = $this->databaseConnexion();
		
		$this->sqlQuery = 'SELECT * FROM '.$tableName;
		$selectAll = $getDatabase->query($this->sqlQuery);
		
		return $selectAll;
	}
	
	public function selectWhere($tableName, $row, $operator, $value, $valueType) {
		$getDatabase = $this->databaseConnexion();
		
		$this->sqlQuery = 'SELECT * FROM '.$tableName.' WHERE '.$row.' '.$operator.' ';
		
		if ($valueType == 'int')
		{
			$this->sqlQuery .= $value;
		} else if ($valueType == 'char') {
			$this->sqlQuery .= '\''.$value.'\'';
		}
		
		$selectWhere = $getDatabase->prepare($this->sqlQuery);
		
		return $selectWhere;
	}
	
	public function update($tableName, $values, $where, $whereValue) {
		$getDatabase = $this->databaseConnexion();
		
		$this->sqlQuery = 'UPDATE '.$tableName.' SET ';
		$this->bindValueQuery = '';
		
		foreach ($values as $rows => $alias)
		{
			if ($alias === end($values))
			{
				$this->sqlQuery .= $rows.' = :'.$rows;
			} else {
				$this->sqlQuery .= $rows.' = :'.$rows.', ';
			}
		}
		
		$this->sqlQuery .= ' WHERE '.$where.' = '.$whereValue;
		
		$update = $getDatabase->prepare($this->sqlQuery);
		
		foreach ($values as $rows => $alias)
		{
			$this->bindValueQuery .= $update->bindValue(':'.$rows, $alias);
		}
		
		$update->execute();
		
		return $update;
	}
	
	public function delete($tableName, $row, $operator, $value, $valueType) {
		$getDatabase = $this->databaseConnexion();
		
		$this->sqlQuery = 'DELETE FROM '.$tableName.' WHERE '.$row.' '.$operator.' :'.$row;
		 
		$delete = $getDatabase->prepare($this->sqlQuery);
		
		if ($valueType == 'int')
		{
			$delete->bindValue(":$row", $value, \PDO::PARAM_INT);
		} else {
			$delete->bindValue(":$row", $value, \PDO::PARAM_STR);
		}
		
		$delete->execute();
		
		return $delete;
	}
	
	public function databaseDisconnect() {
		return $this->databaseConnexion = null;
	}
}
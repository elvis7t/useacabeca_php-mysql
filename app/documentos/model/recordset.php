<?php

require 'Connection.php';
class Recordset
{

	/**
	 * table
	 * @var $table
	 */

	private $result;
	private $lines;
	private $table;
	private $sql;
	private $regs;
	private  $link;

	function __construct()
	{
		$this->link = Connection::Conect();
		return $this->link;
	}

	/**
	 * Method responsible for runing the sql query
	 * @param mixed $sql
	 * @return void	 
	 */
	function RunSql($sql): void
	{
		mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	}

	/**
	 * Method responsible for generating the datas
	 * @param mixed $table
	 * @param mixed $whr
	 * @return void	 
	 */
	public function Datagenerate()
	{
		return $this->regs = mysqli_fetch_assoc($this->result);
		desconecta($this->link);
	}

	/**
	 * Method responsible for deleting the data
	 * @param mixed $table	
	 * @param mixed $whr
	 * @return void
	 */
	function Delete($table, $whr): void
	{		
		$sql = "DELETE FROM " . $table;
		$sql .= " WHERE " . $whr;
		$this->sql = $sql;

		$this->RunSql($this->sql);
		desconecta($this->link);
	}

	/**
	 * Method responsible for selectioning the data
	 * @param mixed $table
	 * @return void
	 */
	public function Select($table): void
	{
		$sql = "SELECT * FROM ";
		$sql .= $table;

		$this->sql = $sql;
		$this->result = mysqli_query($this->link, $this->sql);
		$this->lines = mysqli_num_rows($this->result);
	}

	/**
	 * Method responsible for selectioning the table's filds
	 * @param mixed $table
	 * @return void
	 */
	public function fld($field): mixed
	{
		return $this->regs[$field];
	}
}

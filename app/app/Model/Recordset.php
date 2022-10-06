<?php
namespace App\model;
require_once("conect.php");

class Recordset {

	var $link;
	var $linhas;
	var $result;
	var $sql;
	var $regs;

	function __construct(){
		$this->link = conecta();
		return $this->link;
	}

	function Executa_Sql($sql){
		mysqli_query($this->link, $sql) or die(mysqli_error($this->link));
	}
	function GeraDados(){
		return $this->regs = mysqli_fetch_assoc($this->result);
		desconecta($this->link);
	}
	/*---------------------------------------------------------------------------------------*/
	function Insere($campos, $tabela){
		/*
		uso: INSERT INTO $tabela($campos array) VALUES ($dados array)*/
		$sql = "INSERT INTO ".$tabela."(";
		//foreach nos campos da tabela, enviado via array
		foreach($campos as $campo => $dado){
			$sql.= $campo.", ";
		}
		$sql = substr($sql,0,-2);
		$sql.=") VALUES(";
		//foreach nos dados, enviados via array
		foreach($campos as $campo => $dado){
			if(is_string($dado)) // verifica se é string; otimiza o tipo de dados.
				$sql.= "'".$dado."', ";
			else
				$sql.= $dado.", ";
		}
		$sql = substr($sql,0,-2);

		//finaliza sql e manda executar
		$sql.= ")";

		$this->sql = $sql;

		return $this->Executa_Sql($this->sql);
		desconecta($this->link);
	}
	/*-------------------------------------------------------------------------------------------*/
	function Altera($campos, $tabela, $whr){
		/*uso: UPDATE $tabela SET $dados = alteração WHERE $whr*/
		$sql = "UPDATE ".$tabela." SET ";
		foreach($campos as $campo => $dado){
			if(is_string($dado)) // verifica se é string; otimiza o tipo de dados.
			$sql.= $campo.' = "'.$dado.'", ';
			else
			$sql.= $campo." = ".$dado.", ";
		}
		$sql = substr($sql,0,-2);
		$sql.=" WHERE ".$whr;
		$this->sql = $sql;
		$this->Executa_Sql($this->sql);
		desconecta($this->link);
	}
	/*---------------------------------------------------------------------------------------------*/
	function Exclui($tabela, $whr){
		/*uso: DELETE FROM $tabela WHERE $whr*/
		$sql = "DELETE FROM ".$tabela;
		$sql.=" WHERE ".$whr;
		$this->sql = $sql;

		$this->Executa_Sql($this->sql);
		desconecta($this->link);
	}
	/*---------------------------------------------------------------------------------------------*/
	// function Seleciona($campos="*", $tabela, $where=1, $group="", $order="", $limit="" ){
	// 	if($where <> 1){$whr = $where;}

	// 	$sql = "SELECT ";
	// 	$sql.= $campos;
	// 	$sql.=" FROM ".$tabela;
	// 	$sql.=" WHERE ". $whr;

	// 	if($group)
	// 		$sql.= " GROUP BY ".$group;
	// 	if($order)
	// 		$sql.= " ORDER BY ".$order;
	// 	if($limit)
	// 		$sql.= " LIMIT ".$limit;

	// 	$this->sql = $sql;
	// 	$this->result = mysqli_query($this->link, $this->sql) or die(mysqli_error($this->link));
	// 	$this->linhas = mysqli_num_rows($this->result);
	// /*------------------------------------------------------------------------------------------------*/
	// }
	Function FreeSQL($sql){
		$this->sql = $sql;
		$this->result = mysqli_query($this->link, $this->sql) or die(mysqli_error($this->link));
		if(is_bool($this->result)){$this->linhas = 0;}
		else {$this->linhas = mysqli_num_rows($this->result);}
	}
	/*------------------------------------------------------------------------------------------------*/
	// function pegar($campo="*", $tabela, $where){
	// 	$this->Seleciona($campo, $tabela, $where);
	// 	$this->GeraDados();
	// 	return $this->fld($campo);
	// }
	/*------------------------------------------------------------------------------------------------*/

	function fld($campo){
		return $this->regs[$campo];
	}
	/*-------------------------------------------------------------------------------------------------*/
	function autocod($campo, $tabela){
		$this->FreeSql("SELECT ".$campo." FROM ".$tabela." ORDER BY ".$campo." DESC");
		$this->GeraDados();
		$cod = $this->fld($campo)+1;
		return $cod;
	}
}

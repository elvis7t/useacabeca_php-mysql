<?php

namespace App\model\Entity;

use \App\model\Recordset;
// use \WilliamCosta\DatabaseManager\Database;

class Stores
{

  /**
   * ID Email List
   * @var integer
   */
  public $id;
  /**
   * Primeiro nome do usuario 
   * @var string
   */
  public $firstname;
  /**
   * Segundo nome do usuario 
   * @var string
   */
  public $lastname;
  /**
   * e-mail do cliente
   * @var string
   */
  public $email;

  /**
   * Método responsável por cadastrar a instancia atual no banco de dados
   * @return boolean
   */
  public function cadastrar()
  {
    $rs = new recordset();
    //INSERE O DEPOIMENTOS NO DADOS
    $this->id = $rs->autocod("elist_id", "elvis_store");
    $dados['elist_id']         = $this->id;
    $dados['elist_firstname']  = $this->firstname;
    $dados['elist_lastname']   = $this->lastname;
    $dados['elist_email']   = $this->email;
    $rs->Insere($dados, "elvis_store");

    // echo "<pre>";
    // print_r($this);
    // echo "</pre>";
    // exit;

    return true;
  }
  /**
   * Método responsável por retornar depoimentos
   * @param string $where
   * @param string $order
   * @param string $limit
   * @param string $fields 
   * @return PDOStatement
   */

  public function sendEmais()
  {
    $rs = new Recordset();
    $this->id = $rs->autocod("elist_id", "elvis_store");
    $dados['elist_id'] = $this->id;
    $dados['elist_firtname'] = $this->elist_firtname;
    $dados['elist_lastname'] = $this->elist_lastname;
    $dados['elist_email'] = $this->elist_email;
    $rs->Insere($dados, "elvis_store");

    return true;
  }
}

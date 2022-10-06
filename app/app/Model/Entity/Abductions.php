<?php

namespace App\model\Entity;

use \App\model\Recordset;
// use \WilliamCosta\DatabaseManager\Database;

class Abductions
{

  /**
   * ID de Abduction
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
   * Mensagem do depoimento
   * @var integer
   */
  public $whenithappened;
  /**
   * Mensagem do depoimento
   * @var integer
   */
  public $howlong;
  /**
   * Mensagem do depoimento
   * @var integer
   */
  public $howmany;
  /**
   * Mensagem do depoimento
   * @var integer
   */
  public $aliendescription;
  /**
   * Mensagem do depoimento
   * @var integer
   */
  public $whattheydid;
  /**
   * Mensagem do depoimento
   * @var integer
   */
  public $fangspotted;
  /**
   * Data do depoimento
   * @var string
   */
  public $email;
  /**
   * Data do depoimento
   * @var string
   */
  public $other;
  /**
   * Método responsável por cadastrar a instancia atual no banco de dados
   * @return boolean
   */
  public function cadastrar()
  {
    //DEFINE A DATA
    //  $this->data = date("Y-m-d H:i:s");
    $rs = new recordset();
    //INSERE O DEPOIMENTOS NO DADOS
    $this->id = $rs->autocod("aa_id", "aliens_abduction");
    $dados['aa_id']         = $this->id;
    $dados['aa_firstname']  = $this->firstname;
    $dados['aa_lastname']   = $this->lastname;
    $dados['aa_whenithappened']   = $this->whenithappened;
    $dados['aa_howlong']   = $this->howlong;
    $dados['aa_howmany']   = $this->howmany;
    $dados['aa_aliendescription']  = $this->aliendescription;
    $dados['aa_whattheydid']   = $this->whattheydid;
    $dados['aa_fangspotted']   = $this->fangspotted;
    $dados['aa_email']   = $this->email;
    $dados['aa_other']   = $this->other;
    $rs->Insere($dados, "aliens_abduction");

    // echo "<pre>";
    // print_r($this);
    // echo "</pre>";
    // exit;

    return true;
  }
}

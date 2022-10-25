<?php

namespace App\model\Entity;

use App\model\Recordset;
use \App\model\functions;

class Mismatch {
    /**
     * ID
     * @var interge
     */
    public $id;

    /**
     * Password
     * @var string
     */
    public $password;

    /**
     * Username
     * @var string
     */
    public $username;

    /**
     * Lastname
     * @var string
     */
    public $lastname;

    /**
     * firstname
     * @var string
     */
    public $firstname;

    /**
     * gender
     * @var string
     */
    public $gender;

    /**
     * birdate
     * @var string
     */
    public $birdate;

    /**
     * city
     * @var string
     */
    public $city;

    /**
     * city
     * @var string
     */
    public $state;

    /**
     * city
     * @var string
     */
    public $picture;



    /**
     * Método responsável por cadastrar
     * @param string 
     * @return boolean
     */
      public function cadastrar(){
        $rs = new Recordset();
        $rs->seleciona("mismatch_user","user_name","user_name='{$this->username}'");
			if($rs->linhas<>0){
				$resul['status'] = "Erro";
				$resul['status'] = "Usuario j&aacute; cadastrado";
				$resul['mensagem'] = $rs->sql;  
                return false;                
        }else{
        $this->id = $rs->autocod("user_id","mismatch_user");
        $dados['user_id'] = $this->id;
        $dados['user_name'] = $this->username;
        $dados['user_firstname'] = $this->username;
        $dados['user_picture'] = "john _dewey.png";
        $dados['user_password'] = trim(md5($this->password));        
        $rs->Insere($dados, "mismatch_user");

        return true;
        }
    }

     /**
     * Método responsável por editar
     * @param string  $username
     * @param string  $firstname
     * @param string  $lastname
     * @param string  $gender
     * @param string  $city
     * @param string  $state
     */
    public function Editar(){
        $rs = new Recordset();                  
        $dados['user_name'] = $this->username;   
        $dados['user_firstname'] = $this->firstname;   
        $dados['user_lastname'] = $this->lastname;   
        $dados['user_gender'] = $this->gender;   
        $dados['user_birdate'] = $this->birdate." 00:00:00";   
        $dados['user_city'] = $this->city;   
        $dados['user_state'] = $this->state;   
        $dados['user_picture'] = $this->picture;   
        $whr = "user_id=".$dados['user_id'] = $this->id; 
        $rs->Altera($dados, "mismatch_user",$whr);

        return true;
    }

   
}
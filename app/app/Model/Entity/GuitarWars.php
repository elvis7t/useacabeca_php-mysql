<?php

namespace App\model\Entity;

use App\model\Recordset;

class GuitarWars
{
    /**
     * ID 
     * @var integer
     */
    public $id;
    /**
     * Nome do usuario 
     * @var string
     */
    public $name;
    /**
     * Score de usuário
     * @var string
     */
    public $score;
    /**
     * Data
     * @var string
     */
    public $date;

    public function cadastrar(){
        // Instancia recordset
        $rs = new Recordset();
        //Define a data atual
        $this->date = date("Y-m-d H:i:s");
        $this->id = $rs->autocod("gw_id", "guitarwars");
        $dados['gw_id'] = $this->id;
        $dados['gw_name'] = $this->name;
        $dados['gw_score'] = $this->score;
        $dados['gw_date'] = $this->date;
        $dados['gw_screenshot'] = "";
        $dados['gw_aproved'] = 'n';
        $rs->Insere($dados, "guitarwars");

        return true;
    }
}

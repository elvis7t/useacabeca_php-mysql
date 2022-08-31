<?php
require("conect.php");
class recordset{
    var $linhas;
    var $link;
    var $regs;
    var $result;
    var $sql;

    function __construct(){
        $this->link =conecta();
        return $this->link;
    }

    function Executa_sql($sql){
        mysqli_query($this->link, $sql)or die(mysqli_error($this->link));
    }

    function GeraDados(){
        return $this->regs = mysqli_fetch_assoc($this->result);
        desconecta($this->link);
    }
}
?>
<?php

include_once __DIR__ . "/Prodotto.php";

class Cuccia extends Prodotto{
    public $materiale;
    public $ambiente;

    function __construct($_nome_prodotto, $_marca, $_prezzo, $_materiale, $_ambiente){
        parent :: __construct($_nome_prodotto, $_marca, $_prezzo);
        $this->materiale = $_materiale;
        $this->ambiente = $_ambiente;
    }

    public function printInfo(){
       return "$this->nome_prodotto della marca $this->_marca, prezzo $this->_prezzo €. $this->_materiale / $this->_ambiente";     
    }
}
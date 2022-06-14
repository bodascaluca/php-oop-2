<?php

include_once __DIR__ . "/Prodotto.php";

class Utente {
    public $nome;
    public $email;
    public $carta;
    public $mese_scadenza;
    public $anno_scadenza;

    function __construct($_nome, $_email, $_carta, $_mese_scadenza, $_anno_scadenza ){
        $this->nome = $_nome;
        $this->email = $_email;
        $this->carta = $_carta;
        $this->mese_scadenza = $_mese_scadenza;
        $this->anno_scadenza = $_anno_scadenza;
    }


 
}

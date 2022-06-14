<?php

include_once __DIR__ . "/Prodotto.php";

class Utente {
    public $nome;
    public $email;
    public $carta;
    public $mese_scadenza;
    public $anno_scadenza;
    public $carello = [];

    function __construct($_nome, $_email, $_carta, $_mese_scadenza, $_anno_scadenza ){
        $this->nome = $_nome;
        $this->email = $_email;
        $this->carta = $_carta;
        $this->mese_scadenza = $_mese_scadenza;
        $this->anno_scadenza = $_anno_scadenza;
    }

    function addProductCart($_product){
        if($_product->disponibile){
            $this->carello[] = $_product;
            return true ;
        } else {
            return false;
        }
    }

    function getTotalPrice(){
        $total_price = 0;
        foreach($this->carello as $item){
            $total_price += $item->prezzo;
        }
        return $total_price;
    }

    function yearValidation(){
        $current_mese= 11;
        $current_year = 2022;
        if($this->anno_scadenza >= $current_year && $this->mese_scadenza <= $current_mese){
            return "La tua carta è valida, puoi procedere al pagamento";
        } else {
            return "La tua carta non è valida inserisci una nuova carta di pagamento" ;
        }
    }
}

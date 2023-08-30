<?php

class Livro{
    public $tituloLivro;
    public $autorLivro;
    public $numeroPagina;
    public $preco; 
    public $anoPublicacao;
    protected $isbn;


    public function IsbnPublic(){
        return $this->isbn;
    }

    public function __construct($tituloLivro,$autorLivro,$preco,$anoPublicacao,$isbn,$numeroPagina)
    {
        $this->tituloLivro = $tituloLivro;
        $this->autorLivro = $autorLivro;
        $this->numeroPagina = $numeroPagina;
        $this->preco = $preco;
        $this->anoPublicacao = $anoPublicacao;
        $this->isbn = $isbn;
    }

}

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $tituloLivro = $_POST["tituloLivro"];
        $autorLivro = $_POST["autorLivro"];
        $numeroPagina = $_POST["numeroPagina"];
        $preco = $_POST["preco"];
        $anoPublicacao = $_POST["anoPublicacao"];
        $isbn = $_POST["isbn"];

        $novoLivro = new Livro($tituloLivro,$autorLivro,$preco,$anoPublicacao,$isbn,$numeroPagina);
    }

?>
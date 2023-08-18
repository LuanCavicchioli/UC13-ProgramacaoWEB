<?php

    class Aluno{
    
        public $nome;
        public $senha;
        private $email;
        private $cpf;
        public $telefone;

        public function novoAluno(){
            $novoAluno = new Aluno();
            $novoAluno-> nome = 'Abençoado';
            $novoAluno-> senha = '123456';
            $novoAluno-> email = 'abençoado@gmail.com';
            $novoAluno-> telefone ='14999999999';
            

        }
}
//Foi realizado uma herança da classe aluno, criando uma class nova o ''Aluno2''
    class Aluno2 extends Aluno{
        public function novoAluno()
        {
            $this->nome ='Abençoado 2';
            $this->email ='abençoado2@gmail.com';
            $this->telefone ='14999999990';
            $this->senha ='123456';
        }
    }


    class Livro{
        private $ISBN;
        public $Titulo;
        public $AnoDePublicacao;
        public $Autor;
        public $Preco;	
        public $NumeroDePaginas;
        public $dataDevolucao;

        public function novoLivro(){
            $this->ISBN='12345678909';
            $this->Titulo='Vasco';
            $this->dataDevolucao="18.08.2023";
        }

    }
    class Emprestimo{
        public $aluno;
        public $tituloLivro;
        public $dataDevolucao;
        public $dataEmprestimo;
        public $ISBN;
        
    public function __construct(Livro $titulo,$dataDevolucao,$ISBN,Aluno $aluno,$nome)
    {
        $this->aluno = $aluno->nome;
        $this->aluno = $aluno->email;
        $this->tituloLivro= $titulo->Titulo;
        $this->dataDevolucao=$dataDevolucao->dataDevolucao;
        $this->ISBN=$ISBN->isbn;
        
    }


    }
    class Usuario{
        private $nome; 
        private $senha;
        private $email;

    }
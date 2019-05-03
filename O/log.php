<?php

  //criação de log de uma aplicação
class Log{

    private $escrever;

    public function __construct(Escrever $escrever){
        $this->escrever = $escrever;
    }

    public function escreve($mensagem){
      $this->escrever->escreve($mensagem);
    }

}

interface Escrever{
    public function escreve($mensagem);
}

class txt implements Escrever{
    //escreve no txt a mensagem de log
    public function escreve($mensagem){
      //lógica
    }
}

class Csv implements Escrever{
    public function escreve($mensagem){
      //lógica
    }

    //caso precise criar um .doc basta criar uma classe doc e fazer a logica na função, ex:
class Doc implements Escrever{
    public function escreve($mensagem){
      //lógica
    }
}


 ?>

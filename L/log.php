<?php

class Log{

  public function escrever($mensagem){
    //lógica
  }
}

class DatabaseLog extends Log{
  public function __construct(DataBase $database){
    $this->database = $database;
  }

  public function escrever($mensagem){
    //lógica
  }
}

class FileLog extends Log{

    public function escrever($mensagem){
      //lógica
    }
}

//Nesse exemplo nós temos a classe *Log*, *DatabaseLog* e a *FileLog* o princípio da
//substituição de Liskov diz que podemos usar tanto a classe *FileLog* quanto a *DatabaseLogger* na
//nossa aplicação deve manter o mesmo comportamento, isso vale para qualquer classe que extende da classe *Log*.

//Como mostra no nesse pequeno exemplo, podemos usar todas as classes que vamos atingir o mesmo resultado.

$log = new FileLog($fileManager);
$log->escreve('meu log');

$log = new DatabaseLog($database);
$log->escreve('meu log');

?>

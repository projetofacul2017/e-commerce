<?php
class cliente
{
      private $tableName;

      public function getTableName()
      {
             return "cliente";
      }

      private $cod_cliente;
      private $nome;
      private $login;
	    private $senha;
	    private $telefone;
	    private $endereco;     


      public function getCodCliente()
      {
             return $this -> cod_cliente;
      }

      public function setCodCliente($newVal)
      {
             $this -> cod_cliente = $newVal;
      }


      public function getNome()
      {
             return $this -> nome;
      }

      public function setNome($newVal)
      {
             $this -> nome = $newVal;
      }
      
      public function getLogin()
      {
      	return $this -> login;
      }
      
      public function setLogin($newVal)
      {
      	$this -> login = $newVal;
      }

      public function getSenha()
      {
			 return $this -> senha;
      }
      
      public function setSenha($newVal)
      {
      		 $this -> senha = $newVal;
      }

      public function getTelefone()
      {
             return $this -> telefone;
      }

      public function setTelefone($newVal)
      {
             $this -> telefone = $newVal;
      }
	  
	   public function getEndereco()
      {
             return $this -> endereco;
      }

      public function setEndereco($newVal)
      {
             $this -> endereco = $newVal;
      }

       
}
?>

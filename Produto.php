<?php
class produto
{
      private $tableName;

      public function getTableName()
      {
             return "produto";
      }

      private $cod_produto;
      private $nome_produto;
      private $categoria;
	    private $preco;	        


      public function getCodProduto()
      {
             return $this -> cod_produto;
      }

      public function getCodProduto($newVal)
      {
             $this -> cod_produto = $newVal;
      }


      public function getNomeProduto()
      {
             return $this -> nome_produto;
      }

      public function setNomeProduto($newVal)
      {
             $this -> nome_produto = $newVal;
      }
      
      public function getCategoria()
      {
      	return $this -> categoria;
      }
      
      public function setCategoria($newVal)
      {
      	$this -> categoria = $newVal;
      }

      public function getPreco()
      {
			 return $this -> preco;
      }
      
      public function setPreco($newVal)
      {
      		 $this -> preco = $newVal;
      }

}
?>

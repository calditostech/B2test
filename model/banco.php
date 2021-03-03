<?php

require_once("../init.php");
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setProduto($nome,$preco,$fornecedor,$endereco,$data){
        $stmt = $this->mysqli->prepare("INSERT INTO entrega (`nome`, `preco`, `fornecedor`, `endereco`, `data`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("sssss",$nome,$preco,$fornecedor,$endereco,$data);
         if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }

    public function getProduto(){
        $result = $this->mysqli->query("SELECT * FROM entrega");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[] = $row;
        }
        return $array;

    }

    public function deleteProduto($id){
        if($this->mysqli->query("DELETE FROM `entrega` WHERE `nome` = '".$id."';")== TRUE){
            return true;
        }else{
            return false;
        }

    }
    public function pesquisaProduto($id){
        $result = $this->mysqli->query("SELECT * FROM entrega WHERE nome='$id'");
        return $result->fetch_array(MYSQLI_ASSOC);

    }
    public function updateProduto($nome,$preco,$fornecedor,$endereco,$flag,$data,$id){
        $stmt = $this->mysqli->prepare("UPDATE `entrega` SET `nome` = ?, `preco`=?, `fornecedor`=?, `endereco`=?, `flag`=?,`data` = ? WHERE `nome` = ?");
        $stmt->bind_param("sssssss",$nome,$preco,$fornecedor,$endereco,$flag,$data,$id);
        if($stmt->execute()==TRUE){
            return true;
        }else{
            return false;
        }
    }
}
?>

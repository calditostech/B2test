<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $nome;
    private $preco;
    private $fornecedor;
    private $endereco;
    private $flag;
    private $data;

    //Metodos Set
    public function setNome($string){
        $this->nome = $string;
    }
    public function setPreco($string){
        $this->preco = $string;
    }
    public function setFornecedor($string){
        $this->fornecedor = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setFlag($string){
        $this->flag = $string;
    }
    public function setData($string){
        $this->data = $string;
    }
    //Metodos Get
    public function getNome(){
        return $this->nome;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getFornecedor(){
        return $this->fornecedor;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getFlag(){
        return $this->flag;
    }
    public function getData(){
        return $this->data;
    }


    public function incluir(){
        return $this->setProduto($this->getNome(),$this->getPreco(),$this->getFornecedor(),$this->getEndereco(),$this->getData());
    }
}
?>

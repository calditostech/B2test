<?php
require_once("../model/banco.php");

class editarController {

    private $editar;
    private $nome;
    private $preco;
    private $fornecedor;
    private $endereco;
    private $data;
    private $flag;

    public function __construct($id){
        $this->editar = new Banco();
        $this->criarFormulario($id);
    }
    private function criarFormulario($id){
        $row = $this->editar->pesquisaLivro($id);
        $this->nome         =$row['nome'];
        $this->preco       =$row['preco'];
        $this->fornecedor   =$row['fornecedor'];
        $this->endereco        =$row['endereco'];
        $this->data         =$row['data'];
        $this->flag         =$row['flag'];

    }
    public function editarFormulario($nome,$preco,$fornecedor,$endereco,$data,$flag,$id){
        if($this->editar->updateLivro($nome,$preco,$fornecedor,$endereco,$data,$flag,$id) == TRUE){
            echo "<script>alert('Registro incluído com sucesso!');document.location='../view/index.php'</script>";
        }else{
            echo "<script>alert('Erro ao gravar registro!');history.back()</script>";
        }
    }
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
    public function getData(){
        return $this->data;
    }
    public function getFlag(){
        return $this->flag;
    }


}
$id = filter_input(INPUT_GET, 'id');
$editar = new editarController($id);
if(isset($_POST['submit'])){
    $editar->editarFormulario($_POST['nome'],$_POST['preco'],$_POST['fornecedor'],$_POST['endereco'],$_POST['data'],$_POST['flag'],$_POST['id']);
}
?>

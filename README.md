# CRUD-MVC-PHP
Sistemas de produtos
### Objetivo: 

>Desenvolver um sistema CRUD simples de cadastro de produtos.

### Detalhes:

>Os Produtos devem contar com as seguintes informações:

1. Nome
2. Preço (em reais, contando centavos)
3. Fornecedor
4. Endereço
5. Flag para produto ativo/inativo (não afetando na listagem, somente um valor para referência)
6. Data de inclusão/edição

### Regras: 

>As regras abaixo devem ser seguidas ao cadastrar/editar um produto:

1. Não devem haver produtos com a mesmo referencia 
2. A endereço e a páginas e o preço, não podem ser zerados nem negativos



### Detalhes sobre o programa:

1.  init.php são os arquivos de configurações do sistema de produtos
2.  diretório "view" é onde fica todas as telas do sistema
3.  diretório "controller" é onde fica fica as funcionalidades do sistema que interragem com o banco de dados
4.  diretório "model" é onde fica os arquivos de conexão com o banco de dados

No diretório "view" existem 3 páginas principais: editar.php, cadastro.php e index.php. a página head e menu são os escopos do HTML e Menu do sistemas respectivamente.

No diretório "controller" estão os arquivos PHP que executam as funcionalidades do sistema.

No diretório "model" estão os arquivos de conexão com o Banco de Dados

O arquivo b2.sql é o scrip em sql que cria o banco e a tabela.

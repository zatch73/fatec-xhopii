<?php
    require_once "funcoesBD.php";
    class Funcionario{
        private $nome;
        private $sobrenome;
        private $cpf;
        private $dataNasc;
        private $telefone;
        private $cargo;
        private $salario;
        private $email;
        private $senha;
        private $diretorio;
        public function __construct(){
            @$this->nome = $_POST['inputNome'];
            @$this->sobrenome = $_POST['inputSobrenome'];
            @$this->cpf = $_POST['inputCPF'];
            @$this->dataNasc = $_POST['inputDataNasc'];
            @$this->salario = $_POST['inputSalario'];
            @$this->cargo = $_POST['inputCargo'];
            @$this->telefone = $_POST['inputTelefone'];
            @$this->email = $_POST['inputEmail'];
            @$this->senha = $_POST['inputSenha'];
        }

        public function view(){
            echo "<h1>FUNCIONÁRIO</h1>";
            echo "NOME: ".$this->nome."<br>";
            echo "SOBRE: ".$this->sobrenome."<br>";
            echo "CPF: ".$this->cpf."<br>";
            echo "DATA NASC: ".$this->dataNasc."<br>";
            echo "CARGO: ".$this->cargo."<br>";
            echo "SALARIO: ".$this->salario."<br>";
            echo "TELEFONE: ".$this->telefone."<br>";
            echo "EMAIL: ".$this->email."<br>";
            echo "SENHA: ".$this->senha."<br>";
        }
        public function cadastrarFuncionario(){
            $nomeFoto = date('Y-m-d-H-i-s')."-".$_FILES['inputFoto']['name'];
            $this->diretorio = '../img/funcionarios/'."{$nomeFoto}";
            $conexao = conectarBD();
            move_uploaded_file($_FILES['inputFoto']['tmp_name'], $this->diretorio);
            $inserir = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, cargo, salario, telefone, email, senha, foto) 
                        VALUES ('$this->cpf',
                        '$this->nome',
                        '$this->sobrenome',
                        '$this->dataNasc',
                        '$this->cargo',
                        '$this->salario',
                        '$this->telefone',
                        '$this->email',
                        '$this->senha',
                        '$this->diretorio')";
            mysqli_query($conexao,$inserir);
        }
        public function listarFuncionario(){
            $conexao = conectarBD();
            $consulta = "SELECT * FROM funcionario";
            $listaFuncionario = mysqli_query($conexao,$consulta);
                while($funcionario = mysqli_fetch_assoc($listaFuncionario)){
                    $email = substr($funcionario['email'], 0, 16) . "...";

                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>" . $funcionario["nome"] . " " . $funcionario["sobrenome"] . "</h2>";
                    echo "<p>CPF: " . $funcionario["cpf"] . "</p>";
                    echo "<p>Data Nascimento: " . $funcionario["dataNascimento"] . "</p>";
                    echo "<p>Telefone: " . $funcionario["telefone"] . "</p>";
                    echo "<p id='cli-email'>E-mail: " . $email . "</p>";
                    echo "<p>Cargo: " . $funcionario["cargo"] . "</p>";
                    echo "<p>Salário: " . $funcionario["salario"] . "</p>";
                    echo "<img src='".$funcionario['foto']."'>";
                    echo "</section>";
                }
        }
        
    }

    class Cliente{
        private $nome;
        private $sobrenome;
        private $cpf;
        private $dataNasc;
        private $telefone;
        private $email;
        private $senha;
        private $diretorio;
        public function __construct(){
            @$this->nome = $_POST['inputNome'];
            @$this->sobrenome = $_POST['inputSobrenome'];
            @$this->cpf = $_POST['inputCPF'];
            @$this->dataNasc = $_POST['inputDataNasc'];
            @$this->telefone = $_POST['inputTelefone'];
            @$this->email = $_POST['inputEmail'];
            @$this->senha = $_POST['inputSenha'];
        }
        
        public function view(){
            echo "<h1>CLIENTE</h1>";
            echo "NOME: ".$this->nome."<br>";
            echo "SOBRE: ".$this->sobrenome."<br>";
            echo "CPF: ".$this->cpf."<br>";
            echo "DATA NASC: ".$this->dataNasc."<br>";
            echo "TELEFONE: ".$this->telefone."<br>";
            echo "EMAIL: ".$this->email."<br>";
            echo "SENHA: ".$this->senha."<br>";
        }
        public function cadastrarCliente(){
            $nomeFoto = date('Y-m-d-H-i-s')."-".$_FILES['inputFoto']['name'];
            $this->diretorio = '../img/clientes/'."{$nomeFoto}";
            $conexao = conectarBD();
            move_uploaded_file($_FILES['inputFoto']['tmp_name'], $this->diretorio);
            $inserir = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha, foto) 
                        VALUES ('$this->cpf',
                        '$this->nome',
                        '$this->sobrenome',
                        '$this->dataNasc',
                        '$this->telefone',
                        '$this->email',
                        '$this->senha',
                        '$this->diretorio')";
            mysqli_query($conexao,$inserir);
        }

        public function listarClientes(){
            $conexao = conectarBD();
            $consulta = "SELECT * FROM cliente";
            $listaCliente = mysqli_query($conexao,$consulta);
                while($cliente = mysqli_fetch_assoc($listaCliente)){
                    $email = substr($cliente['email'], 0, 16) . "...";

                    echo "<section class=\"conteudo-bloco\">";
                    echo "<h2>" . $cliente["nome"] . " " . $cliente["sobrenome"] . "</h2>";
                    echo "<p>CPF: " . $cliente["cpf"] . "</p>";
                    echo "<p>Data Nascimento: " . $cliente["dataNascimento"] . "</p>";
                    echo "<p>Telefone: " . $cliente["telefone"] . "</p>";
                    echo "<p id='cli-email'>E-mail: " . $email . "</p>";
                    echo "<img src='".$cliente['foto']."'>";
                    echo "</section>";
                }
        }
    }

    class Produto{
        public $nome;
        public $fabricante;
        public $descricao;
        public $valor;
        public $quantidade;
        public $diretorio;

        public function __construct(){
            @$this->nome = $_POST["inputNome"];
            @$this->fabricante = $_POST["inputFabricante"];
            @$this->descricao = $_POST["inputDescricao"];
            @$this->valor = $_POST["inputValor"];
            @$this->quantidade = $_POST["inputQuantidade"];
        }

        public function cadastrarProduto(){
            $nomeFoto = date('Y-m-d-H-i-s')."-".$_FILES['inputFoto']['name'];
            $this->diretorio = '../img/produtos/'."{$nomeFoto}";
            $conexao = conectarBD();
            move_uploaded_file($_FILES['inputFoto']['tmp_name'], $this->diretorio);
            $inserir = "INSERT INTO produto (nome, fabricante, descricao, valor, quantidade, foto) 
                        VALUES ('$this->nome',
                        '$this->fabricante',
                        '$this->descricao',
                        '$this->valor',
                        '$this->quantidade',
                        '$this->diretorio')";
            mysqli_query($conexao,$inserir);
        }

        public function listarProdutos(){
            $conexao = conectarBD();
            $consulta = "SELECT * FROM produto";
            $listarProduto = mysqli_query($conexao,$consulta);
                while($produto = mysqli_fetch_assoc($listarProduto)){
                    $descricao = substr($produto['descricao'], 0, 80) . "...";

                    echo "<section class=\"conteudo-bloco\">";
                    echo "<a href='produto.php?id=".$produto["id"]."'>";
                        echo "<section class='produto-img'>";
                        echo "<img src='".$produto['foto']."'>";
                        echo "</section>";
                    echo "<h2>" . $produto["nome"] ."</h2>";

                    echo "<section class='produto-alinah'>";
                        echo "<section>"; echo "<p><strong>Fabricante: </strong> </p>"; echo "</section>"; echo "<section> <p class='pula'> "; echo $produto["fabricante"] . "</p>";echo "</section>";
                    echo "</section>";

                    echo "<section class='produto-alinah'>";
                        echo "<section>"; echo "<p><strong>Descrição: </strong> </p>"; echo "</section>"; echo "<section> <p class='pula'> "; echo $descricao . "</p>";echo "</section>";
                    echo "</section>";
                    echo "<section class='produto-biaxo'>";
                        echo "<section>";
                            echo "<p id='preco-produto'>R$ " . $produto["valor"] . "</p>";
                        echo "</section>";
                        echo "<section>";
                            echo "<p>" . $produto["quantidade"] . " disponíveis</p>";
                        echo "</section>";
                    echo "</section>";
                    echo "</a>";
                    echo "</section>";
                }
        }

        public function listarProdutos2(){
            $conexao = conectarBD();
            $consulta = "SELECT * FROM produto";
            $listarProduto = mysqli_query($conexao,$consulta);
                while($produto = mysqli_fetch_assoc($listarProduto)){

                    $descricao = substr($produto['descricao'], 0, 80) . "...";

                    echo "<section class=\"conteudo-bloco\">";
                    echo "<a href='produto.php?id=".$produto['id']."'>";
                        echo "<section class='produto-img'>";
                        echo "<img src='".$produto['foto']."'>";
                        echo "</section>";
                    echo "<h2>" . $produto["nome"] ."</h2>";
                    echo "<section class='produto-biaxo'>";
                        echo "<section>";
                            echo "<p id='preco-produto'>R$ " . $produto["valor"] . "</p>";
                        echo "</section>";
                        echo "<section>";
                            echo "<p>" . $produto["quantidade"] . " disponíveis</p>";
                        echo "</section>";
                    echo "</section>";
                    echo "</a>";
                    echo "</section>";
                }
        }

        public function listarProduto(){
            $conexao = conectarBD();
            $id = $_GET["id"];
            $consulta = "SELECT * FROM produto WHERE id = '$id'";
            $listarProduto = mysqli_query($conexao,$consulta);
                while($produto = mysqli_fetch_assoc($listarProduto)){
                    $this->nome = $produto["nome"];
                    $this->fabricante = $produto["fabricante"];
                    $this->descricao = $produto["descricao"];
                    $this->valor = $produto["valor"];
                    $this->quantidade = $produto["quantidade"];
                    $this->diretorio = $produto['foto'];
                }
        }
    }
    function verificarVazio(){
        $valores = array_values($_POST);
        for ($i = 0; $i < count($valores); $i++) {
            if(!empty($valores[$i])){
                    if($i == count($valores) - 1){
                        return true;
                    }else{
                        continue;
                    }
                }else{
                    return false;
                }
            }
    }
    
    function cadastro(){
            switch ($_GET['cadastro']){
                case "cliente":
                    if(!verificarVazio()){
                        header('Location: ../view/cadastroCliente.php?error=CAMPO_VAZIO');
                    }else {
                        $cliente = new Cliente();
                        $cliente->view();
                        $cliente->cadastrarCliente();
                        header('Location: ../view/cadastroCliente.php?error=SUCESSO');
                    }
                    break;
                case "funcionario":
                    if(!verificarVazio()){
                        header('Location: ../view/cadastroFuncionario.php?error=CAMPO_VAZIO');
                    }else {
                        $funcionario = new Funcionario();
                        $funcionario->view();
                        $funcionario->cadastrarFuncionario();
                        header('Location: ../view/cadastroFuncionario.php?error=SUCESSO');
                    }
                    break;
                case "produto":
                    if(!verificarVazio()){
                        header('Location:../view/cadastroProduto.php?error=CAMPO_VAZIO');
                    }else {
                        $produto = new Produto();
                        $produto->cadastrarProduto();
                        header('Location:../view/cadastroProduto.php?error=SUCESSO');
                    }
                    break;
            }
    }
    @cadastro();
    
    
?>
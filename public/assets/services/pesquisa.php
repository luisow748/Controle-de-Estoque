<?php
//class Conexao {
//    private $data = array();
//    //variavel da classe Base
//    protected $pdo = null;
//
//    public function __set($name, $value){
//        $this->data[$name] = $value;
//    }
//
//    public function __get($name){
//        if (array_key_exists($name, $this->data)) {
//            return $this->data[$name];
//        }
//
//        $trace = debug_backtrace();
//        trigger_error(
//            'Undefined property via __get(): ' . $name .
//            ' in ' . $trace[0]['file'] .
//            ' on line ' . $trace[0]['line'],
//            E_USER_NOTICE);
//        return null;
//    }
//    //m�todo que retorna a vari�vel $pdo
//    public function getPdo() {
//        return $this->pdo;
//    }
//
//    //m�todo construtor da classe
//    function __construct($pdo = null) {
//        $this->pdo = $pdo;
//        if ($this->pdo == null)
//            $this->conectar();
//    }
//
//    //m�todo que conecta com o banco de dados
//    public function conectar() {
//        try {
//            $this->pdo = new PDO("mysql:host=localhost;dbname=ctrlEstoque",
//                "root",
//                "",
//                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
//        } catch (PDOException $e) {
//            print "Error!: " . $e->getMessage() . "<br/>";
//            die();
//        }
//    }
//
//    //m�todo que desconecta
//    public function desconectar() {
//        $this->pdo = null;
//    }
//
//    public function select($sql){
//        $stmt = $this->pdo->prepare($sql);
//        $stmt->execute();
//        return $stmt->fetchAll(PDO::FETCH_ASSOC);
//    }
//}
//
////recebemos nosso par�metro vindo do form
//$parametro = isset($_POST['pesquisaTeste']) ? $_POST['pesquisaTeste'] : null;
//
//
//
//$msg = "";
////come�amos a concatenar nossa tabela
//$msg .="<table class='table table-hover'>";
//$msg .="	<thead>";
//$msg .="		<tr>";
//$msg .="			<th>#</th>";
//$msg .="			<th>Nome:</th>";
//$msg .="			<th>E-mail:</th>";
//$msg .="		</tr>";
//$msg .="	</thead>";
//$msg .="	<tbody>";
//
////requerimos a classe de conex�o
//
//try {
//    $pdo = new Conexao();
//    $resultado = $pdo->select("SELECT * FROM `categories` WHERE `section_id` = $parametro");
//    $pdo->desconectar();
//
//}catch (PDOException $e){
//    echo $e->getMessage();
//}
//
////resgata os dados na tabela
//if(count($resultado)){
//    foreach ($resultado as $res) {
//
//        $msg .="				<tr>";
//        $msg .="					<td>".$res['id_category']."</td>";
//        $msg .="					<td>".$res['name']."</td>";
//        $msg .="					<td>".$res['description']."</td>";
//        $msg .="				</tr>";
//    }
//}else{
//    $msg = "";
//    $msg .="Nenhum resultado foi encontrado...";
//}
//$msg .="	</tbody>";
//$msg .="</table>";
////retorna a msg concatenada
//echo $msg;
//
//
//?>

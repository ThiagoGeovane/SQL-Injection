<?php
class Conexao {    
    var $pdo;
    function __construct() {
        $this->pdo = new PDO("sqlsrv:Server=127.0.0.1,1433;Database=COM231teste", "sa", "root");
    }

    public function select($nome, $senha) {        
        $stmt = $this->pdo->prepare("SELECT * FROM loginsql where nome= '$nome' and senha = '$senha'");
        $run = $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
?>
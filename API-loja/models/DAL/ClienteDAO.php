<?php
    require_once 'Conexao.php';

    class ClienteDAO {
        public function getClientes() {
            $conexao = (new Conexao())->getConexao();

            $sql = "SELECT * FROM autor;";

            $stmt = $conexao->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
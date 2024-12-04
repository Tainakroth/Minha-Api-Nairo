<?php

    require_once 'conexao.php';

    class PedidoDAO{
        public function cadastrarPedido(PedidoModel $Pedido){
            $conexao = (new conexao()) -> getConexao();

            $sql = "INSERT INTO pedido VALUES(null,:descricao);";
            $stmt = $conexao -> prepare($sql);

            $stmt ->bindParam(':descricao',$Pedido->descricao);
            return $stmt -> execute();

        }


        public function buscarPedidoPorId(){

            $conexao = (new conexao())->getConexao();
            $sql = "SELECT * FROM pedido WHERE idpedido = :idpedido;";

        
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(':idpedido', 2);
            $stmt->bindParam(':Cliente', $Cliente);
            $stmt->bindParam(':descricao', $descricao);
        
            $retorno = $stmt->execute();
        
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


        public function buscarPedidos(){

            $conexao = (new conexao())->getConexao();
        
            $sql = "SELECT * FROM pedido;";

            $stmt = $conexao->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
        }

        public function atualizarPedido($Pedido) {
            $conexao = (new conexao())->getConexao();

            $sql = "UPDATE pedido SET  descricao = :descricao WHERE idpedido = :idpedido";

            $stmt = $conexao->prepare($sql);

            $stmt->bindValue(':descricao', $Pedido->descricao);
            $stmt->bindValue(':idpedido', $Pedido->id_materia);
    
            return $stmt->execute();
        }
    }

?>
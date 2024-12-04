<?php
    require_once '../Controllers/PedidoController.php';

    $PedidoController = new PedidoController();

    $rota =$_POST['rota'];

    switch($rota){
        case "Cadastrar":
                $idcliente = $_POST['idcliente'];
                $descricao = $_POST['descricao'];
    
                $PedidoController->cadastrarPedido($idpedido, $descricao);
    
                break;
            case "salvar":
                $idPedido = $_POST['idpedido'];
                $idPedido = $_POST['idpedido'];
                $descricao = $_POST['descricao'];
              
    
                $PedidoController->atualzarPedido($idpedido, $idCliente, $descricao);
    
                break;
    }





?>
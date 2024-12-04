<?php
    require_once '../models/PedidoModel.php';

    class PedidoController{
        public function CadastrarPedido(string $descricao){
            $PedidoModel = new PedidoModel();

            $Pedido = new PedidoModel(null,$descricao);

            $retorno = $PedidoModel->CadastrarPedido($pedido);

            if($retorno){
                header('Location:../views/')
            }

            else{
                header('Location:../views/')
            }

            exit();
        }

        public function excluirPedido(int $idpedido){
            $PedidoModel = new PedidoModel();

            $PedidoModel -> excluirPedido($idpedido);

            header('Location:../views')

            exit();

        }

        public function AtualizarPedido(int $idpedido,string $descricao){
            $PedidoModel = new PedidoModel();

            $Pedido = new PedidoModel($idPedido,$descricao);

            $retorno = $PedidoModel->AtualizarPedido($pedido);

            if($retorno){
                header('Location:../views/')
            }

            else{
                header('Location:../views/')
            }

            exit();
        }

    }









?>
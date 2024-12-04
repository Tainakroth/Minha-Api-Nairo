<?php
    require_once 'DAL/PedidoDAO.php';

    class PedidoModel{
        public ? int $idpedido;
        public ? string $descricao;
    
    public function __construct(?int $idpedido = null,?string $descricao =null){
        $this ->idpedido = $idpedido;
        $this ->descricao = $descricao;
    }

    public function cadastrarPedido(PedidoModel $pedido){
        $PedidoDAO = new PedidoDAO();

        return $PedidoDAO -> cadastrarPedido($pedido)
    }

    public function buscarPedidos(){
        $PedidoDAO = new PedidoDAO();

        $Pedidos = $PedidoDAO ->buscarPedidos();

        foreach($Pedidos as $chave => $Pedido) {
            $Pedidos[$chave] = new PedidoModel(
                $Pedido = ['idpedido'],

                $Pedido = ['descricao'],
            );
        }

        return $Pedidos;
    }

    public function buscarPedidoPorId(int $idpedido){
        $PedidoDAO = new PedidoDAO();
        $ClienteDAO = new ClienteDAO();

        $Pedido = $PedidoDAO -> buscarPedidoPorId($idpedido);

        $Pedido =  new PedidoModel(
            $Pedido['idpedido'],

            $Pedido['descricao',]
        );
        return $Pedido;
    }

    public function atualizarPedido(PedidoModel $pedido) {
        $PedidoDAO = new PedidoDAO();

        return $PedidoDAO->atualizarPedido($Pedido);
    }

}

?>
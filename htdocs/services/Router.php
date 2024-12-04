<?php
    class Router {
        private array $routes;

        public function __construct(){
            $this->routes = [
                'GET' => [
                    '/Produtos' => [
                        'controller' => 'ProdutoController',
                        'function' => 'createProdutos'
                    ],

                    '/Clientes' => [
                        'controller' => 'ClienteController',
                        'function' =>'createClientes'
                    ],

                'POST' => [
                    '/Criar-Produto' => 'ProdutoController',
                    'function' => 'createProduto'
                    ],

                    '/Criar-Cliente' => 'ClienteController',
                    'function' => 'createCliente'
                ],

                'PUT' => [
                    '/Atualizar-Produtos' => 'ProdutoController',
                    'function' => 'createProduto'
                ],

                'PUT' => [
                    '/Atualizar-Clientes' => 'ClienteCOntroller',
                    'function' => 'createCliente'
                ],

            ];
        
        }
    

        public function handleRequest(string $method, string $route): string {
            $routeExists = !empty($this->routes[$method][$route]);

            if (!$routeExists) {
                return json_encode([
                    'error' => 'Essa rota não existe!',
                    'result' => null
                ]);
            }

            $routeInfo = $this->routes[$method][$route];

            $controller = $routeInfo['controller'];
            $function = $routeInfo['function'];

            require_once __DIR__ . '/../controllers/' . $controller . '.php';

            return (new $controller)->$function();
    }   
  
}
?>
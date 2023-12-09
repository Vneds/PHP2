<?php 
    namespace app\admin\core;
    use Exception;
    class Route {
        protected array $routes;
        public function register(string $requestMethod, string $route, callable|array $action):self
        {   
            $this->routes[$requestMethod][$route] = $action;
            return $this;
        }

        public function get(string $route, callable|array $action){
            return $this->register('get', $route, $action);
        }

        public function post(string $route, callable|array $action){
            return $this->register('post', $route, $action);
        }

        public function resolve(string $requestUrl, $method)
        {   
            // $route = explode("?", $requestUrl)[1];/
            $route = $_GET['page'];
            $action = $this->routes[$method][$route] ?? null; 

            if(!$action) {
                throw new Exception("123");
            }

            if(is_callable($action)){
                return call_user_func($action);
            }

            if(is_array($action)){
                [$class, $method] = $action;
                $string = explode("\\", $class)[3];
                require_once ROOT . '/controllers/'. $string . '.php';
                if(class_exists($class)){
                    $class = new $class();
                    if(method_exists($class, $method)){
                        return call_user_func_array([$class, $method], []);
                    }
                }
            }
        
        }
    }
?>
<?php 
    namespace app\core;
    use Exception;
    class Route {
        protected array $routes;
        public function register(string $method, string $route, callable|array $action):self    
        {   
            $this->routes[$method][$route] = $action;
            return $this;
        }

        public function get (string $route, callable|array $action): self
        {
            return $this->register('get', $route, $action);
        }
        public function post(string $route, callable|array $action): self
        {
            return $this->register('post', $route, $action);
        }


        public function resolve(string $requestUrl, string $method)
        {   
            $route = explode("?", $requestUrl)[1];
            $route = $_GET['page'];
            $action = $this->routes[$method][$route] ?? null; 
            if(!$action) {
                throw new Exception("");
            }

            if(is_callable($action)){
                return call_user_func($action);
            }

            if(is_array($action)){
                [$class, $method] = $action;
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
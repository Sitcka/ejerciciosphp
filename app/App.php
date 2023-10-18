<?php

class App 
{
    public function __construct()
    {
        echo "Empezando ...";
    }

    function index(){
        
    }

    function login(){
        echo "<br>Login";
    }

    function fibonacci(){
        $n = 100;
        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++){
            $fib[$i] = $fib[$i-1] + $fib[$i-2];
        }
        echo "<br>" .  $fib;
        include "vistas/index.php";
    }

    public function run()
    {
      if (isset($_GET['method'])) {
        $method = $_GET['method'];
      } else {
        $method = 'fibonacci';
      }
      $this->$method();
    }
}

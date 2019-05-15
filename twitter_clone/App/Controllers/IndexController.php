<?php

    namespace App\Controllers;
    //Recursos do Miniframework
    use MF\Controller\Action;
    use MF\Model\Container;


    class IndexController extends Action {

        public function index(){

            $this->render('index');
        }

        public function inscreverse(){
            $this->render('inscreverse');
        }
    }

?>
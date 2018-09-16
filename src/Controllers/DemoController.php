<?php
    namespace App\Controllers;

    use PsrHttpMessageServerRequestInterface as Request;
    use PsrHttpMessageResponseInterface as Response;
    use App\Models\User;

    class DemoController{

        private $view;
        public function __construct($c){
            $this->view = $c->view;
        }
        public function users($request, $response, $args)
        {
            $users = User::all();
            $this->view->render($response, 'home.twig', [ 'users' => $users->toArray() ]);
        }
    }
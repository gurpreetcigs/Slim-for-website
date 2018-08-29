<?php
    namespace Controllers;

    use PsrHttpMessageServerRequestInterface as Request;
    use PsrHttpMessageResponseInterface as Response;

    class DemoController{

        public function __construct($container)
        {
            // make the container available in the class
            $this->container = $container;
        }

        public function users(Request $request, Response $response, $args)
        {
            // $users = Users::all();
            // $this->container->view->render($response, 'list-users.twig', $users);
        }
    }
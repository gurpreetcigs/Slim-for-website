<?php
    namespace Controllers;

    use PsrHttpMessageServerRequestInterface as Request;
    use PsrHttpMessageResponseInterface as Response;
    use Models\User;

    class DemoController{

        public function users(Request $request, Response $response, $args)
        {
            $users = User::all();
            print_r($users);
            // $this->container->view->render($response, 'list-users.twig', $users);
        }
    }
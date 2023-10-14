<?php

namespace ErisuAya\Controller;

use ErisuAya\Model\View;

class HomeController
{

    function index(): void
    {
        $model = [
            "title" => "Omeans Team",
            "content" => "Ini Halaman Index"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }

    function about(): void
    {
        echo "Author : Aris Hadisopiyan";
    }

    function login(): void
    {
        $request = [
            "username" => $_POST['username'],
            "password" => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            "message" => "Login Sukses"
        ];
        // kirimkan response ke view
    }

}
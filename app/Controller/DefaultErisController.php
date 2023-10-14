<?php

namespace ErisuAya\Controller;

use ErisuAya\Model\View;

class DefaultErisController
{

    function index(): void
    {
        $model = [
            "title" => "Omeans Team",
            "content" => "Ini Halaman Index"
        ];

        View::render('Default/index', $model);
    }

    function hello(): void
    {
        echo "DefaultErisController.hello()";
    }

    function world(): void
    {
        echo "DefaultErisController.world()";
    }

    function about(): void
    {
        echo "Author : Aris Hadisopiyan";
        View::render('404/404', $model);
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
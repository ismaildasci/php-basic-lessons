<?php

use Core\Session;

function dd($value)
{
    echo "<pre>";

    var_dump($value);

    echo "</pre>";

    die();
}

function urlIs($value)
{


    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{

    http_response_code($code);

    require base_path("views/{$code}.php");
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {


        abort($status);
    }
}


function base_path($path)
{

    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}

function redirect($path)
{

    header("Location: {$path}");

    exit();
}

function login($user)
{
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);
}

function logout()
{
    Session::destroy();
}

function old($key, $default = '')
{
    return Core\Session::get('old')[$key] ?? $default;
}

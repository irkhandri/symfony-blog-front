<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blogs' => [[['_route' => 'blogs', '_controller' => 'App\\Controller\\BlogController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/blogs/create' => [[['_route' => 'create_blog', '_controller' => 'App\\Controller\\BlogController::create'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/interest-create' => [[['_route' => 'create-interest', '_controller' => 'App\\Controller\\InterestController::index'], null, null, null, false, false, null]],
        '/outbox-messages' => [[['_route' => 'app_message', '_controller' => 'App\\Controller\\MessageController::outbox'], null, null, null, false, false, null]],
        '/inbox-messages' => [[['_route' => 'inbox-messages', '_controller' => 'App\\Controller\\MessageController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\ProfileController::register'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\ProfileController::logout'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\ProfileController::login'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profiles' => [[['_route' => 'profiles', '_controller' => 'App\\Controller\\ProfileController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/account' => [[['_route' => 'account', '_controller' => 'App\\Controller\\ProfileController::account'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blogs/(?'
                    .'|([^/]++)(*:60)'
                    .'|edit/([^/]++)(*:80)'
                    .'|delete/([^/]++)(*:102)'
                .')'
                .'|/interest\\-(?'
                    .'|edit/([^/]++)(*:138)'
                    .'|delete/([^/]++)(*:161)'
                .')'
                .'|/create\\-message/([^/]++)(*:195)'
                .'|/message/([^/]++)(*:220)'
                .'|/profiles/(?'
                    .'|([^/]++)(*:249)'
                    .'|edit/([^/]++)(*:270)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'blog', '_controller' => 'App\\Controller\\BlogController::blog'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        80 => [[['_route' => 'edit-blog', '_controller' => 'App\\Controller\\BlogController::edit'], ['id'], null, null, false, true, null]],
        102 => [[['_route' => 'delete_blog', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['GET' => 0, 'DELETE' => 1], null, false, true, null]],
        138 => [[['_route' => 'edit-interest', '_controller' => 'App\\Controller\\InterestController::edit'], ['id'], null, null, false, true, null]],
        161 => [[['_route' => 'del-interest', '_controller' => 'App\\Controller\\InterestController::del'], ['id'], null, null, false, true, null]],
        195 => [[['_route' => 'create-message', '_controller' => 'App\\Controller\\MessageController::create'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        220 => [[['_route' => 'messages', '_controller' => 'App\\Controller\\MessageController::message'], ['id'], null, null, false, true, null]],
        249 => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::profile'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [
            [['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

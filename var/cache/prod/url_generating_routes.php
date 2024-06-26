<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'blogs' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blogs']], [], [], []],
    'blog-create' => [[], ['_controller' => 'App\\Controller\\BlogController::create'], [], [['text', '/blogs/create']], [], [], []],
    'blog' => [['id'], ['_controller' => 'App\\Controller\\BlogController::blog'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs']], [], [], []],
    'blog-edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs/edit']], [], [], []],
    'blog-delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs/delete']], [], [], []],
    'interest-create' => [[], ['_controller' => 'App\\Controller\\InterestController::index'], [], [['text', '/interest-create']], [], [], []],
    'interest-edit' => [['id'], ['_controller' => 'App\\Controller\\InterestController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/interest-edit']], [], [], []],
    'interest-delete' => [['id'], ['_controller' => 'App\\Controller\\InterestController::del'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/interest-delete']], [], [], []],
    'create-message' => [['id'], ['_controller' => 'App\\Controller\\MessageController::create'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/create-message']], [], [], []],
    'outbox-messages' => [[], ['_controller' => 'App\\Controller\\MessageController::outbox'], [], [['text', '/outbox-messages']], [], [], []],
    'inbox-messages' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/inbox-messages']], [], [], []],
    'messages' => [['id'], ['_controller' => 'App\\Controller\\MessageController::message'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\ProfileController::register'], [], [['text', '/register']], [], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\ProfileController::logout'], [], [['text', '/logout']], [], [], []],
    'reset-password' => [[], ['_controller' => 'App\\Controller\\ProfileController::reset'], [], [['text', '/reset-password']], [], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\ProfileController::login'], [], [['text', '/login']], [], [], []],
    'profiles' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profiles']], [], [], []],
    'profile' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::profile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profiles']], [], [], []],
    'edit-profile' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profiles/edit']], [], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\ProfileController::account'], [], [['text', '/account']], [], [], []],
    'App\Controller\BlogController::index' => [[], ['_controller' => 'App\\Controller\\BlogController::index'], [], [['text', '/blogs']], [], [], []],
    'App\Controller\BlogController::create' => [[], ['_controller' => 'App\\Controller\\BlogController::create'], [], [['text', '/blogs/create']], [], [], []],
    'App\Controller\BlogController::blog' => [['id'], ['_controller' => 'App\\Controller\\BlogController::blog'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs']], [], [], []],
    'App\Controller\BlogController::edit' => [['id'], ['_controller' => 'App\\Controller\\BlogController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs/edit']], [], [], []],
    'App\Controller\BlogController::delete' => [['id'], ['_controller' => 'App\\Controller\\BlogController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/blogs/delete']], [], [], []],
    'App\Controller\InterestController::index' => [[], ['_controller' => 'App\\Controller\\InterestController::index'], [], [['text', '/interest-create']], [], [], []],
    'App\Controller\InterestController::edit' => [['id'], ['_controller' => 'App\\Controller\\InterestController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/interest-edit']], [], [], []],
    'App\Controller\InterestController::del' => [['id'], ['_controller' => 'App\\Controller\\InterestController::del'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/interest-delete']], [], [], []],
    'App\Controller\MessageController::create' => [['id'], ['_controller' => 'App\\Controller\\MessageController::create'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/create-message']], [], [], []],
    'App\Controller\MessageController::outbox' => [[], ['_controller' => 'App\\Controller\\MessageController::outbox'], [], [['text', '/outbox-messages']], [], [], []],
    'App\Controller\MessageController::index' => [[], ['_controller' => 'App\\Controller\\MessageController::index'], [], [['text', '/inbox-messages']], [], [], []],
    'App\Controller\MessageController::message' => [['id'], ['_controller' => 'App\\Controller\\MessageController::message'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/message']], [], [], []],
    'App\Controller\ProfileController::register' => [[], ['_controller' => 'App\\Controller\\ProfileController::register'], [], [['text', '/register']], [], [], []],
    'App\Controller\ProfileController::logout' => [[], ['_controller' => 'App\\Controller\\ProfileController::logout'], [], [['text', '/logout']], [], [], []],
    'App\Controller\ProfileController::reset' => [[], ['_controller' => 'App\\Controller\\ProfileController::reset'], [], [['text', '/reset-password']], [], [], []],
    'App\Controller\ProfileController::login' => [[], ['_controller' => 'App\\Controller\\ProfileController::login'], [], [['text', '/login']], [], [], []],
    'App\Controller\ProfileController::index' => [[], ['_controller' => 'App\\Controller\\ProfileController::index'], [], [['text', '/profiles']], [], [], []],
    'App\Controller\ProfileController::profile' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::profile'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profiles']], [], [], []],
    'App\Controller\ProfileController::edit' => [['id'], ['_controller' => 'App\\Controller\\ProfileController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/profiles/edit']], [], [], []],
    'App\Controller\ProfileController::account' => [[], ['_controller' => 'App\\Controller\\ProfileController::account'], [], [['text', '/account']], [], [], []],
];

<?php

use App\Services\Router;

Router::page('/', 'home');
Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/profile', 'profile');

Router::post('/auth/register', \App\Controllers\Auth::class, 'register', true, true);
Router::post('/auth/login', \App\Controllers\Auth::class, 'login', true);
Router::post('/auth/logout', \App\Controllers\Auth::class, 'logout');
Router::enable();

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'HomeController');

$router->get('/courses', 'CourseController@index');
$router->get('/courses/{id}', 'CourseController@show');
$router->post('/courses', 'CourseController@store');
$router->put('/courses/{id}', 'CourseController@update');
$router->patch('/courses/{id}', 'CourseController@update');
$router->delete('/courses/{id}', 'CourseController@destroy');
$router->options('/courses/options', 'CourseController@options');

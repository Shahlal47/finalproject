<?php

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');



Route::model('faqs', 'Faq');
Route::model('categories', 'Category');

Route::resource('categories', 'CategoriesController');
Route::resource('categories.faqs', 'FaqsController');





Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');





Route::get('/faq', 'FaqController@index');



// Use slugs rather than IDs in URLs
Route::bind('tasks', function($value, $route) {
    return App\Task::whereSlug($value)->first();
});
Route::bind('projects', function($value, $route) {
    return App\Project::whereSlug($value)->first();
});

Route::bind('categories', function($value, $route) {
    return App\Category::whereId($value)->first();
});
Route::bind('faqs', function($value, $route) {
    return App\Faq::whereId($value)->first();
});


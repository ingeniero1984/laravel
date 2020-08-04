<?php

Route::view('/', 'home')->name('home');

Route::view('/sobre-mi', 'about')->name('about');

Route::view('/tecnologia', 'tecnology')->name('tecnology');

Route::resource('portafolio', 'ProjectController')
		->parameters(['portafolio' => 'project'])
		->names('projects');

Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', 'MessageController@store')->name('message.store');

Auth::routes(['register' => false]);

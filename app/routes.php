<?php

Route::get('/', function()
{
	return View::make('hello');
});

//API Routes
Route::group(array('prefix' => 'api/v1'), function()
{
		Route::resource('skills', 'SkillController');
});
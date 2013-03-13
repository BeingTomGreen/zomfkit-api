<?php

Route::get('/', function()
{
	return View::make('hello');
});


//API Routes
Route::group(array('prefix' => 'api/v1'), function()
{
	//XML Routes
	Route::group(array('prefix' => 'xml'), function()
	{
		Route::resource('skills', 'ApiXmlSkillController');

	});

	//Json Routes
	Route::group(array('prefix' => 'json'), function()
	{
		Route::resource('skills', 'ApiJsonSkillController');

	});
});
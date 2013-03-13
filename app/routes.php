<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('prefix' => 'api/v1'), function()
{
	//Skill Items Json
	Route::get('json/skills', 'ApiJsonSkillController@index');
	Route::get('json/skills/{skill}', 'ApiJsonSkillController@show');

	//Skill Items XML
	Route::get('xml/skills', 'ApiXmlSkillController@index');
	Route::get('xml/skills/{skill}', 'ApiXmlSkillController@show');
});

Route::resource('skill', 'SkillController');
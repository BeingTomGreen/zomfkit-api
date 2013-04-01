<?php

//API Routes
Route::group(array('prefix' => 'api/v1'), function()
{
		Route::resource('skills', 'ApiJsonSkillController');
});
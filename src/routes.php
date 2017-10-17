<?php

Route::group(['prefix' => config('adminamazing.path').'/adminrole', 'middleware' => ['web', 'CheckAccess']], function() {
	Route::get('/', 'selfreliance\adminrole\AdminRoleController@index')->name('AdminRolesHome');
	Route::get('/edit/{name}', 'selfreliance\adminrole\AdminRoleController@edit')->name('AdminRolesShowEdit');
	Route::post('/create', 'selfreliance\adminrole\AdminRoleController@create')->name('AdminRolesCreate');
	Route::post('/edit/{name}', 'selfreliance\adminrole\AdminRoleController@edit')->name('AdminRolesEdit');
	Route::delete('/delete', 'selfreliance\adminrole\AdminRoleController@destroy')->name('AdminRolesDelete');
});
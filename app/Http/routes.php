<?php

Route::post('user/validate/', 'UserController@validate');
Route::post('user/auth/', 'UserController@auth');
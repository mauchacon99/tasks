<?php

$path = 'TaskController'; 

Route::get('/',$path.'@index' )->name('task.index');

Route::post('/',$path.'@InsertStore' )->name('task.store');

Route::delete('/{Task}', $path.'@destroystore')->name('task.destroy');

Route::get('/estatus/{Task}', $path.'@updateStatus')->name('task.status');

Route::get('/editar/{Task}', $path.'@update')->name('task.update');

Route::put('/editar/{Task}', $path.'@updateStore')->name('task.updateStore');
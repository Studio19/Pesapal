<?php

Route::get('pesapal-callback',['as'=>'pesapal-callback', 'uses'=>'Studio19\Pesapal\PesapalAPIController@handleCallback']);
Route::get('pesapal-ipn', ['as'=>'pesapal-ipn', 'uses'=>'Studio19\Pesapal\PesapalAPIController@handleIPN']);
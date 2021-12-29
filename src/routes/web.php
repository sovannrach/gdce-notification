<?php

use Sovannrach\Profile\Http\Controllers\ProfileController;

Route::get('profile',[ProfileController::class,'index']);
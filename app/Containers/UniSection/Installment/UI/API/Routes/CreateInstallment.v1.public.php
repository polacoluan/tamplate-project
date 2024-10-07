<?php

use App\Containers\UniSection\Installment\UI\API\Controllers\CreateInstallmentController;
use Illuminate\Support\Facades\Route;

Route::post('installment', CreateInstallmentController::class)->middleware(["auth:api"]);


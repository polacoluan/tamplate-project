<?php

/**
 * @apiGroup           Payment
 * @apiName            UpdatePayment
 *
 * @api                {PATCH} /v1/payment/:id Update Payment
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\UniSection\Payment\UI\API\Controllers\UpdatePaymentController;
use Illuminate\Support\Facades\Route;

Route::patch('payment/{id}', UpdatePaymentController::class)->middleware(["auth:api"]);


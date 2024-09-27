<?php

/**
 * @apiGroup           PaymentMethod
 * @apiName            UpdatePaymentMethod
 *
 * @api                {PATCH} /v1/payment-methods/:id Update Payment Way
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

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\UpdatePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::patch('payment-methods/{id}', UpdatePaymentMethodController::class);


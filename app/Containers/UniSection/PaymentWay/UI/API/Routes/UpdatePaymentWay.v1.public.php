<?php

/**
 * @apiGroup           PaymentWay
 * @apiName            UpdatePaymentWay
 *
 * @api                {PATCH} /v1/payment-ways/:id Update Payment Way
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

use App\Containers\UniSection\PaymentWay\UI\API\Controllers\UpdatePaymentWayController;
use Illuminate\Support\Facades\Route;

Route::patch('payment-ways/{id}', UpdatePaymentWayController::class);


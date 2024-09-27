<?php

/**
 * @apiGroup           PaymentMethod
 * @apiName            CreatePaymentMethod
 *
 * @api                {POST} /v1/payment-methods Create Payment Way
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

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\CreatePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::post('payment-methods', CreatePaymentMethodController::class);


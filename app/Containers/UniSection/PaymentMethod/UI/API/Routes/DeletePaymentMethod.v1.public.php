<?php

/**
 * @apiGroup           PaymentMethod
 * @apiName            DeletePaymentMethod
 *
 * @api                {DELETE} /v1/payment-methods/:id Delete Payment Way
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

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\DeletePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::delete('payment-methods/{id}', DeletePaymentMethodController::class);


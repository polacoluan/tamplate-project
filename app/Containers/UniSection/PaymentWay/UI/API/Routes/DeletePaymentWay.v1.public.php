<?php

/**
 * @apiGroup           PaymentWay
 * @apiName            DeletePaymentWay
 *
 * @api                {DELETE} /v1/payment-ways/:id Delete Payment Way
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

use App\Containers\UniSection\PaymentWay\UI\API\Controllers\DeletePaymentWayController;
use Illuminate\Support\Facades\Route;

Route::delete('payment-ways/{id}', DeletePaymentWayController::class);


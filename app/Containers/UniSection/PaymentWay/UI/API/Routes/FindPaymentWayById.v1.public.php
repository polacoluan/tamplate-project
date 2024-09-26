<?php

/**
 * @apiGroup           PaymentWay
 * @apiName            FindPaymentWayById
 *
 * @api                {GET} /v1/payment-ways/:id Find Payment Way By Id
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

use App\Containers\UniSection\PaymentWay\UI\API\Controllers\FindPaymentWayByIdController;
use Illuminate\Support\Facades\Route;

Route::get('payment-ways/{id}', FindPaymentWayByIdController::class);


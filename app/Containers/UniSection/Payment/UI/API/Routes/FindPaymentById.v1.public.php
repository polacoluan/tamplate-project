<?php

/**
 * @apiGroup           Payment
 * @apiName            FindPaymentById
 *
 * @api                {GET} /v1/payment/:id Find Payment By Id
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

use App\Containers\UniSection\Payment\UI\API\Controllers\FindPaymentByIdController;
use Illuminate\Support\Facades\Route;

Route::get('payment/{id}', FindPaymentByIdController::class)->middleware(["auth:api"]);


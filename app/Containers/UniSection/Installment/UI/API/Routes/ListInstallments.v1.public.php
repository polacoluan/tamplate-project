<?php

/**
 * @apiGroup           Installment
 * @apiName            ListInstallments
 *
 * @api                {GET} /v1/installment List Installments
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

use App\Containers\UniSection\Installment\UI\API\Controllers\ListInstallmentsController;
use Illuminate\Support\Facades\Route;

Route::get('installment', ListInstallmentsController::class)->middleware(["auth:api"]);


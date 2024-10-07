<?php

/**
 * @apiGroup           Installment
 * @apiName            DeleteInstallment
 *
 * @api                {DELETE} /v1/installment/:id Delete Installment
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

use App\Containers\UniSection\Installment\UI\API\Controllers\DeleteInstallmentController;
use Illuminate\Support\Facades\Route;

Route::delete('installment/{id}', DeleteInstallmentController::class)->middleware(["auth:api"]);


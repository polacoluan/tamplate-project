<?php

/**
 * @apiGroup           Parcela
 * @apiName            Excluir Parcela
 *
 * @api                {DELETE} /v1/installment/:id Excluir Parcela
 * @apiDescription     Exclui uma parcela
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id da parcela, id único
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\UniSection\Installment\UI\API\Controllers\DeleteInstallmentController;
use Illuminate\Support\Facades\Route;

Route::delete('installment/{id}', DeleteInstallmentController::class)->middleware(["auth:api"]);


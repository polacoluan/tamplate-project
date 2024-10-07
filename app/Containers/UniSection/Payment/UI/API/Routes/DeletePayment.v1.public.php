<?php

/**
 * @apiGroup           Pagamento
 * @apiName            Excluir Pagamento
 *
 * @api                {DELETE} /v1/payment/:id Excluir Pagamento
 * @apiDescription     Exclui um pagamento e suas parcelas
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Pagamento, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\UniSection\Payment\UI\API\Controllers\DeletePaymentController;
use Illuminate\Support\Facades\Route;

Route::delete('payment/{id}', DeletePaymentController::class)->middleware(["auth:api"]);


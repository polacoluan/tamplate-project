<?php

/**
 * @apiGroup           Método de Pagamento
 * @apiName            Excluir Método de Pagamento
 *
 * @api                {DELETE} /v1/payment-methods/:id Excluir Método de Pagamento
 * @apiDescription     Exclui um método de pagamento
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do método de pagamento, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\DeletePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::delete('payment-methods/{id}', DeletePaymentMethodController::class)->middleware(["auth:api"]);


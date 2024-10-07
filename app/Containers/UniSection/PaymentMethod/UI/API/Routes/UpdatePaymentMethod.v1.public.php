<?php

/**
 * @apiGroup           Método de Pagamento
 * @apiName            Atualizar Método de Pagamento
 *
 * @api                {PATCH} /v1/payment-methods/:id Atualizar Método de Pagamento
 * @apiDescription     Autaliza um método de pagamento a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiBody {String} method         Nome do método, obrigatório.
 * @apiBody {String} installments          Quantidade de parcelas do método, obrigatório.
 * 
 * @apiParam           {Integer} id id do método de pagamento, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
* {
 *     "data": {
 *         "id": "39n0Z12OZGKERJgW",
 *         "method": "credito",
 *         "installments": 3,
 *         "created_at": "2024-10-07T18:32:50.000000Z",
 *         "updated_at": "2024-10-07T18:32:50.000000Z"
 *     },
 *     "meta": {
 *         "include": [],
 *         "custom": []
 *     }
 * }
 */

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\UpdatePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::patch('payment-methods/{id}', UpdatePaymentMethodController::class)->middleware(["auth:api"]);


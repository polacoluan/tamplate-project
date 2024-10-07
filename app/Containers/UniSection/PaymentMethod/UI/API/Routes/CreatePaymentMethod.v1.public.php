<?php

/**
 * @apiGroup           Método de Pagamento
 * @apiName            Criar Método de Pagamento
 *
 * @api                {POST} /v1/payment-methods Criar Método de Pagamento
 * @apiDescription     Cria um método de pagamento
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiBody {String} method         Nome do método, obrigatório.
 * @apiBody {String} installments          Quantidade de parcelas do método, obrigatório.
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

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\CreatePaymentMethodController;
use Illuminate\Support\Facades\Route;

Route::post('payment-methods', CreatePaymentMethodController::class)->middleware(["auth:api"]);


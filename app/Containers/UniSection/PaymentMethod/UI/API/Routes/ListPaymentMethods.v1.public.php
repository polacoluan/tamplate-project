<?php

/**
 * @apiGroup           Método de Pagamento
 * @apiName            Listar Métodos de Pagamento
 *
 * @api                {GET} /v1/payment-methods Listar Métodos de Pagamento
 * @apiDescription     Lista os métodos de pagamento
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     "data": [
 *         {
 *             "id": "NxOpZowo9GmjKqdR",
 *             "method": "credito",
 *             "installments": 3,
 *             "created_at": null,
 *             "updated_at": null
 *         },
 *         {
 *             "id": "XbPW7awNkzl83LD6",
 *             "method": "pix",
 *             "installments": 1,
 *             "created_at": null,
 *             "updated_at": null
 *         },
 *         {
 *             "id": "aYOxlpzRMwrX3gD7",
 *             "method": "credito a vista",
 *             "installments": 1,
 *             "created_at": null,
 *             "updated_at": null
 *         },
 *         {
 *             "id": "39n0Z12OZGKERJgW",
 *             "method": "credito teste",
 *             "installments": 3,
 *             "created_at": "2024-10-07T18:32:50.000000Z",
 *             "updated_at": "2024-10-07T18:38:50.000000Z"
 *         }
 *     ],
 *     "meta": {
 *         "include": [],
 *         "custom": [],
 *         "pagination": {
 *             "total": 4,
 *             "count": 4,
 *             "per_page": 10,
 *             "current_page": 1,
 *             "total_pages": 1,
 *             "links": {}
 *         }
 *     }
 * }
 */

use App\Containers\UniSection\PaymentMethod\UI\API\Controllers\ListPaymentMethodsController;
use Illuminate\Support\Facades\Route;

Route::get('payment-methods', ListPaymentMethodsController::class)->middleware(["auth:api"]);


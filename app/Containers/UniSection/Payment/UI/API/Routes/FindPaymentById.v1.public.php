<?php

/**
 * @apiGroup           Pagamento
 * @apiName            Buscar Pagamento por id
 *
 * @api                {GET} /v1/payment/:id Buscar Pagamento por id
 * @apiDescription     Busca um pagamento a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Pagamento, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
*    "data": {
*       "id": "p6ELeYGQXzZ1PjWR",
*       "student_id": "39n0Z12OZGKERJgW",
*       "amount": "1000.00",
*       "payment_method_id": "XbPW7awNkzl83LD6",
*       "created_at": "2024-10-07T18:02:45.000000Z",
*       "updated_at": "2024-10-07T18:02:45.000000Z",
*       "installments": {
*           "data": [
*               {
*                   "id": "p6ELeYGQXzZ1PjWR",
*                   "payment_id": "p6ELeYGQXzZ1PjWR",
*                   "installment": 1,
*                   "amount": "1000.00",
*                   "payment_date": null,
*                   "student_name": "Example Update",
*                   "created_at": "2024-10-07T18:02:45.000000Z",
*                   "updated_at": "2024-10-07T18:02:45.000000Z"
*                }
*            ]
*        },
*        "student": {
*           "data": {
*               "id": "39n0Z12OZGKERJgW",
*               "name": "Example Update",
*               "email": "example-update@gmail.com",
*               "cellphone": "(41) 98080-6060",
*               "birth_date": "2000-04-25",
*               "cpf": "407.206.305-03",
*               "created_at": "2024-10-07T17:32:14.000000Z",
*               "updated_at": "2024-10-07T17:50:05.000000Z"
*           }
*        },
*        "paymentMethod": {
*           "data": {
*               "id": "XbPW7awNkzl83LD6",
*               "method": "pix",
*               "installments": 1,
*               "created_at": null,
*               "updated_at": null
*            }
*        }
*    }
 * }
 */

use App\Containers\UniSection\Payment\UI\API\Controllers\FindPaymentByIdController;
use Illuminate\Support\Facades\Route;

Route::get('payment/{id}', FindPaymentByIdController::class)->middleware(["auth:api"]);


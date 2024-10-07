<?php

/**
 * @apiGroup           Pagamento
 * @apiName            Atualizar Pagamento
 *
 * @api                {PATCH} /v1/payment/:id Atualizar Pagamento
 * @apiDescription     Atualiza um pagamento a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Pagamento, id único.
 *
 * @apiBody {Decimal} amount                Valor do pagamento, obrigatório.
 * @apiBody {Integer} student_id            id do estudante associado ao pagamento, obrigatório.
 * @apiBody {Integer} payment_method_id     id do método de pagamento associado ao pagamento, obrigatório.
 * 
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 201 Created
 * {
 *    "data": {
 *        "id": "vndAeb2LOG3gp45l",
 *        "student_id": "39n0Z12OZGKERJgW",
 *        "amount": "1",
 *        "payment_method_id": "XbPW7awNkzl83LD6",
 *        "created_at": "2024-10-07T18:10:21.000000Z",
 *        "updated_at": "2024-10-07T18:10:21.000000Z",
 *        "installments": {
 *            "data": [
 *                {
 *                    "id": "vndAeb2LOG3gp45l",
 *                    "payment_id": "vndAeb2LOG3gp45l",
 *                    "installment": 1,
 *                    "amount": "1.00",
 *                    "payment_date": null,
 *                    "student_name": "Example Update",
 *                    "created_at": "2024-10-07T18:10:21.000000Z",
 *                    "updated_at": "2024-10-07T18:10:21.000000Z"
 *                }
 *            ]
 *        },
 *        "student": {
 *            "data": {
 *                "id": "39n0Z12OZGKERJgW",
 *                "name": "Example Update",
 *                "email": "example-update@gmail.com",
 *                "cellphone": "(41) 98080-6060",
 *                "birth_date": "2000-04-25",
 *                "cpf": "407.206.305-03",
 *                "created_at": "2024-10-07T17:32:14.000000Z",
 *                "updated_at": "2024-10-07T17:50:05.000000Z"
 *            }
 *        },
 *        "paymentMethod": {
 *            "data": {
 *                "id": "XbPW7awNkzl83LD6",
 *                "method": "pix",
 *                "installments": 1,
 *                "created_at": null,
 *                "updated_at": null
 *            }
 *        }
 *    },
 *    "meta": {
 *        "include": [],
 *        "custom": []
 *    }
 * }
 */

use App\Containers\UniSection\Payment\UI\API\Controllers\UpdatePaymentController;
use Illuminate\Support\Facades\Route;

Route::patch('payment/{id}', UpdatePaymentController::class)->middleware(["auth:api"]);


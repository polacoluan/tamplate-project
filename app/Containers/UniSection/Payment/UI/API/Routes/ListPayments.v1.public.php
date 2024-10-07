<?php

/**
 * @apiGroup           Pagamento
 * @apiName            Listar Pagamentos
 *
 * @api                {GET} /v1/payment Listar Pagamentos
 * @apiDescription     Lista todos os pagamentos
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
* {
*    "data": [
*        {
*            "id": "p6ELeYGQXzZ1PjWR",
*            "student_id": "39n0Z12OZGKERJgW",
*            "amount": "1000.00",
*            "payment_method_id": "XbPW7awNkzl83LD6",
*            "created_at": "2024-10-07T18:02:45.000000Z",
*            "updated_at": "2024-10-07T18:02:45.000000Z",
*            "installments": {
*                "data": [
*                    {
*                        "id": "p6ELeYGQXzZ1PjWR",
*                        "payment_id": "p6ELeYGQXzZ1PjWR",
*                        "installment": 1,
*                        "amount": "1000.00",
*                        "payment_date": null,
*                        "student_name": "Example Update",
*                        "created_at": "2024-10-07T18:02:45.000000Z",
*                        "updated_at": "2024-10-07T18:02:45.000000Z"
*                    }
*                ]
*            },
*            "student": {
*                "data": {
*                    "id": "39n0Z12OZGKERJgW",
*                    "name": "Example Update",
*                    "email": "example-update@gmail.com",
*                    "cellphone": "(41) 98080-6060",
*                    "birth_date": "2000-04-25",
*                    "cpf": "407.206.305-03",
*                    "created_at": "2024-10-07T17:32:14.000000Z",
*                    "updated_at": "2024-10-07T17:50:05.000000Z"
*                }
*            },
*            "paymentMethod": {
*                "data": {
*                    "id": "XbPW7awNkzl83LD6",
*                    "method": "pix",
*                    "installments": 1,
*                    "created_at": null,
*                    "updated_at": null
*                }
*            }
*        },
*        {
*            "id": "vndAeb2LOG3gp45l",
*            "student_id": "39n0Z12OZGKERJgW",
*            "amount": "1.00",
*            "payment_method_id": "XbPW7awNkzl83LD6",
*            "created_at": "2024-10-07T18:10:21.000000Z",
*            "updated_at": "2024-10-07T18:10:21.000000Z",
*            "installments": {
*                "data": [
*                    {
*                        "id": "vndAeb2LOG3gp45l",
*                        "payment_id": "vndAeb2LOG3gp45l",
*                        "installment": 1,
*                        "amount": "1.00",
*                        "payment_date": null,
*                        "student_name": "Example Update",
*                        "created_at": "2024-10-07T18:10:21.000000Z",
*                        "updated_at": "2024-10-07T18:10:21.000000Z"
*                    }
*                ]
*            },
*            "student": {
*                "data": {
*                    "id": "39n0Z12OZGKERJgW",
*                    "name": "Example Update",
*                    "email": "example-update@gmail.com",
*                    "cellphone": "(41) 98080-6060",
*                    "birth_date": "2000-04-25",
*                    "cpf": "407.206.305-03",
*                    "created_at": "2024-10-07T17:32:14.000000Z",
*                    "updated_at": "2024-10-07T17:50:05.000000Z"
*                }
*            },
*            "paymentMethod": {
*                "data": {
*                    "id": "XbPW7awNkzl83LD6",
*                    "method": "pix",
*                    "installments": 1,
*                    "created_at": null,
*                    "updated_at": null
*                }
*            }
*        },
*        {
*            "id": "KMQYEXGDZwgRPeZ8",
*            "student_id": "39n0Z12OZGKERJgW",
*            "amount": "2500.00",
*            "payment_method_id": "XbPW7awNkzl83LD6",
*            "created_at": "2024-10-07T18:09:57.000000Z",
*            "updated_at": "2024-10-07T18:12:38.000000Z",
*            "installments": {
*                "data": [
*                    {
*                        "id": "KMQYEXGDZwgRPeZ8",
*                        "payment_id": "KMQYEXGDZwgRPeZ8",
*                        "installment": 1,
*                        "amount": "1.00",
*                        "payment_date": null,
*                        "student_name": "Example Update",
*                        "created_at": "2024-10-07T18:09:57.000000Z",
*                        "updated_at": "2024-10-07T18:09:57.000000Z"
*                    }
*                ]
*            },
*            "student": {
*                "data": {
*                    "id": "39n0Z12OZGKERJgW",
*                    "name": "Example Update",
*                    "email": "example-update@gmail.com",
*                    "cellphone": "(41) 98080-6060",
*                    "birth_date": "2000-04-25",
*                    "cpf": "407.206.305-03",
*                    "created_at": "2024-10-07T17:32:14.000000Z",
*                    "updated_at": "2024-10-07T17:50:05.000000Z"
*                }
*           },
*            "paymentMethod": {
*                "data": {
*                   "id": "XbPW7awNkzl83LD6",
*                    "method": "pix",
*                    "installments": 1,
*                   "created_at": null,
*                    "updated_at": null
*                }
*            }
*        }
*    ],
*    "meta": {
*        "include": [],
*        "custom": [],
*        "pagination": {
*            "total": 3,
*            "count": 3,
*            "per_page": 10,
*            "current_page": 1,
*            "total_pages": 1,
*            "links": {}
*        }
*    }
* }
*/

use App\Containers\UniSection\Payment\UI\API\Controllers\ListPaymentsController;
use Illuminate\Support\Facades\Route;

Route::get('payment', ListPaymentsController::class)->middleware(["auth:api"]);


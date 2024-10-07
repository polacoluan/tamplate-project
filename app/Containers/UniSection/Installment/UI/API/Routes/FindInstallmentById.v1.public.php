<?php

/**
 * @apiGroup           Parcela
 * @apiName            Buscar parcela a partir do id
 *
 * @api                {GET} /v1/installment/:id Buscar parcela a partir do id
 * @apiDescription     Busca uma parcela a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id da parcela, id único
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     "data": {
 *         "id": "p6ELeYGQXzZ1PjWR",
 *         "payment_id": "p6ELeYGQXzZ1PjWR",
 *         "installment": 1,
 *         "amount": "1050.59",
 *         "payment_date": "2024-02-20 08:00:00",
 *         "student_name": "Example Update",
 *         "created_at": "2024-10-07T18:02:45.000000Z",
 *         "updated_at": "2024-10-07T18:51:32.000000Z"
 *     },
 *     "meta": {
 *        "include": [],
 *         "custom": []
 *     }
 * }
 */

use App\Containers\UniSection\Installment\UI\API\Controllers\FindInstallmentByIdController;
use Illuminate\Support\Facades\Route;

Route::get('installment/{id}', FindInstallmentByIdController::class)->middleware(["auth:api"]);


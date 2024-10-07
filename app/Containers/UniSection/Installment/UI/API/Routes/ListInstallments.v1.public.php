<?php

/**
 * @apiGroup           Parcela
 * @apiName            Listar Parcelas
 *
 * @api                {GET} /v1/installment Listar Parcelas
 * @apiDescription     Lista todas as parcelas
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
 *             "id": "vndAeb2LOG3gp45l",
 *             "payment_id": "vndAeb2LOG3gp45l",
 *             "installment": 1,
 *             "amount": "1.00",
 *             "payment_date": null,
 *             "student_name": "Example Update",
 *             "created_at": "2024-10-07T18:10:21.000000Z",
 *             "updated_at": "2024-10-07T18:10:21.000000Z"
 *         },
 *         {
 *             "id": "p6ELeYGQXzZ1PjWR",
 *             "payment_id": "p6ELeYGQXzZ1PjWR",
 *             "installment": 1,
 *             "amount": "1050.59",
 *             "payment_date": "2024-02-20 08:00:00",
 *             "student_name": "Example Update",
 *             "created_at": "2024-10-07T18:02:45.000000Z",
 *             "updated_at": "2024-10-07T18:51:32.000000Z"
 *         }
 *     ],
 *     "meta": {
 *         "include": [],
 *         "custom": [],
 *         "pagination": {
 *             "total": 2,
 *             "count": 2,
 *             "per_page": 10,
 *             "current_page": 1,
 *             "total_pages": 1,
 *             "links": {}
 *         }
 *     }
 * }
 */

use App\Containers\UniSection\Installment\UI\API\Controllers\ListInstallmentsController;
use Illuminate\Support\Facades\Route;

Route::get('installment', ListInstallmentsController::class)->middleware(["auth:api"]);


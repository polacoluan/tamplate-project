<?php

/**
 * @apiGroup           Parcela
 * @apiName            Atulizar Parcela
 *
 * @api                {PATCH} /v1/installment/:id Atulizar Parcela
 * @apiDescription     Atualiza a parcela a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiBody {Integer} installment         Número da parcela, obrigatório.
 * @apiBody {Decimal} amount              Valor da parcela, obrigatório.
 * @apiBody {Data}    payment_date        Data de Pagamento, obrigatório.
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
 *         "payment_date": "2024-02-20T08:00",
 *         "student_name": "Example Update",
 *         "created_at": "2024-10-07T18:02:45.000000Z",
 *         "updated_at": "2024-10-07T18:51:32.000000Z"
 *     },
 *     "meta": {
 *         "include": [],
 *         "custom": []
 *     }
 * }
 */

use App\Containers\UniSection\Installment\UI\API\Controllers\UpdateInstallmentController;
use Illuminate\Support\Facades\Route;

Route::patch('installment/{id}', UpdateInstallmentController::class)->middleware(["auth:api"]);


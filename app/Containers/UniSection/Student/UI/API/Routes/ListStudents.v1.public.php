<?php

/**
 * @apiGroup           Estudante
 * @apiName            Listar Estudantes
 *
 * @api                {GET} /v1/student Listar Estudantes
 * @apiDescription     Lista todos os estudantes
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *    "data": [
 *        {
 *            "id": "XbPW7awNkzl83LD6",
 *            "name": "Joao",
 *            "email": "joao@email.com",
 *            "cellphone": "(41) 00000-0000",
 *            "birth_date": "2025-01-01",
 *            "cpf": "000.000.000-00",
 *            "created_at": "2024-10-07T14:02:50.000000Z",
 *            "updated_at": "2024-10-07T14:02:50.000000Z"
 *        },
 *        {
 *            "id": "39n0Z12OZGKERJgW",
 *            "name": "Example",
 *            "email": "example@gmail.com",
 *            "cellphone": "(41) 99090-7070",
 *            "birth_date": "1999-03-24",
 *            "cpf": "304.202.304-02",
 *            "created_at": "2024-10-07T17:32:14.000000Z",
 *            "updated_at": "2024-10-07T17:32:14.000000Z"
 *        },
 *        {
 *            "id": "aVbqKPzWy2pj0JZg",
 *            "name": "Example",
 *            "email": "example@gmail.com",
 *            "cellphone": "(41) 99090-7070",
 *            "birth_date": "1999-03-24",
 *            "cpf": "304.202.304-02",
 *            "created_at": "2024-10-07T17:42:42.000000Z",
 *            "updated_at": "2024-10-07T17:42:42.000000Z"
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

use App\Containers\UniSection\Middlewares\CheckUniSectionMiddleware;
use App\Containers\UniSection\Student\UI\API\Controllers\ListStudentsController;
use Illuminate\Support\Facades\Route;

Route::get('student', ListStudentsController::class)->middleware(["auth:api"]);


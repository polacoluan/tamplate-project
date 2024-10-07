<?php

/**
 * @apiGroup           Estudante
 * @apiName            Buscar Estudante por id 
 *
 * @api                {GET} /v1/student/:id Buscar Estudante por id 
 * @apiDescription     Busca um estudante por seu id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Estudante, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *    "data": {
 *        "id": "aVbqKPzWy2pj0JZg",
 *        "name": "Example",
 *        "email": "example@gmail.com",
 *        "cellphone": "(41) 99090-7070",
 *        "birth_date": "1999-03-24",
 *        "cpf": "304.202.304-02",
 *        "created_at": "2024-10-07T17:42:42.000000Z",
 *        "updated_at": "2024-10-07T17:42:42.000000Z"
 *    },
 *    "meta": {
 *        "include": [],
 *        "custom": []
 *   }
 * }
 */

use App\Containers\UniSection\Student\UI\API\Controllers\FindStudentByIdController;
use Illuminate\Support\Facades\Route;

Route::get('student/{id}', FindStudentByIdController::class)->middleware(["auth:api"]);


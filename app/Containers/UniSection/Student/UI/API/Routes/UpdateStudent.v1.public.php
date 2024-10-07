<?php

/**
 * @apiGroup           Estudante
 * @apiName            Atualizar Estudante
 *
 * @api                {PATCH} /v1/student/:id Atualizar Estudante
 * @apiDescription     Atualiza um estudante a partir do id
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Estudante, id único.
 *
 * @apiBody {String} name              Nome do estudante, obrigatório.
 * @apiBody {String} email             Email do estudante, obrigatório.
 * @apiBody {String} cellphone         Número de celular do estudante, obrigatório.
 * @apiBody {Date} birth_date          Aniversário do estudante, obrigatório.
 * @apiBody {String} cpf               CPF do estudante, obrigatório
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     "data": {
 *         "id": "39n0Z12OZGKERJgW",
 *         "name": "Example Update",
 *         "email": "example-update@gmail.com",
 *         "cellphone": "(41) 98080-6060",
 *         "birth_date": "2000-04-25T00:00:00.000Z",
 *         "cpf": "407.206.305-03",
 *         "created_at": "2024-10-07T17:32:14.000000Z",
 *         "updated_at": "2024-10-07T17:50:05.000000Z"
 *     },
 *     "meta": {
 *         "include": [],
 *         "custom": []
 *     }
 * }
 */

use App\Containers\UniSection\Student\UI\API\Controllers\UpdateStudentController;
use Illuminate\Support\Facades\Route;

Route::patch('student/{id}', UpdateStudentController::class)->middleware(["auth:api"]);


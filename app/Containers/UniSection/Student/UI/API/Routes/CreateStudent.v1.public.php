<?php

/**
 * @apiGroup           Estudante
 * @apiName            Criar Estudante
 *
 * @api                {POST} /v1/student Criar Estudante
 * @apiDescription     Cria um novo estudante
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiBody {String} name           Nome do estudante, obrigatório.
 * @apiBody {String} email          Email do estudante, obrigatório.
 * @apiBody {String} cellphone      Número de celular do estudante, obrigatório.
 * @apiBody {Date} birth_date       Aniversário do estudante, obrigatório.
 * @apiBody {String} cpf            CPF do estudante, obrigatório
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 201 OK
 *    {
 *       "data": {
 *          "id": "39n0Z12OZGKERJgW",
 *          "name": "Example",
 *          "email": "example@gmail.com",
 *          "cellphone": "(41) 99090-7070",
 *          "birth_date": "1999-03-24",
 *          "cpf": "304.202.304-02",
 *          "created_at": "2024-10-07T17:32:14.000000Z",
 *          "updated_at": "2024-10-07T17:32:14.000000Z"
 *      },
 *      "meta": {
 *          "include": [],
 *          "custom": []
 *      }
 *     }
 */

use App\Containers\UniSection\Student\UI\API\Controllers\CreateStudentController;
use Illuminate\Support\Facades\Route;

Route::post('student', CreateStudentController::class)->middleware(["auth:api"]);


<?php

/**
 * @apiGroup           Estudante
 * @apiName            Excluir Estudante
 *
 * @api                {DELETE} /v1/student/:id Excluir Estudante
 * @apiDescription     Exclui um estudante, seus pagamentos e suas parcelas
 *
 * @apiVersion         1.0.0
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {Integer} id id do Estudante, id único.
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 204 No Content
 */

use App\Containers\UniSection\Student\UI\API\Controllers\DeleteStudentController;
use Illuminate\Support\Facades\Route;

Route::delete('student/{id}', DeleteStudentController::class)->middleware(["auth:api"]);


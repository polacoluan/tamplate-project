<?php

/**
 * @apiGroup           Student
 * @apiName            ListStudents
 *
 * @api                {GET} /v1/student List Students
 * @apiDescription     Endpoint description here...
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated ['permissions' => '', 'roles' => '']
 *
 * @apiHeader          {String} accept=application/json
 * @apiHeader          {String} authorization=Bearer
 *
 * @apiParam           {String} parameters here...
 *
 * @apiSuccessExample  {json} Success-Response:
 * HTTP/1.1 200 OK
 * {
 *     // Insert the response of the request here...
 * }
 */

use App\Containers\UniSection\Middlewares\CheckUniSectionMiddleware;
use App\Containers\UniSection\Student\UI\API\Controllers\ListStudentsController;
use Illuminate\Support\Facades\Route;

Route::get('student', ListStudentsController::class)->middleware(["auth:api"]);


<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiEmployeeStoreRequest;
use App\Models\Employee;
// use Illuminate\Http\Request;

class EmployeeControler extends Controller
{
    /**
     * Создание сотрудника
     */
    function createNewEmployee(ApiEmployeeStoreRequest $request)
    {
        $data = $request->validated();
        Employee::create($data);
    }
}

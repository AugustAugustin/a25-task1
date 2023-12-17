<?php

namespace App\Http\Controllers\Api;

use App\Actions\Query\RecordOfEmployeeQuery;
use App\Http\Controllers\Controller;
use App\Http\Requests\ApiRecordOfEmployeeStoreRequest;
use App\Models\RecordOfEmployee;
use Illuminate\Http\Request;

class RecordOfEmployeeControler extends Controller
{

    /**
     * Добавление новой записи времени работ сотрудника
     * 
     * @param ApiRecordOfEmployeeStoreRequest $request
     * 
     * @return void
     */
    public function addNewOrder(ApiRecordOfEmployeeStoreRequest $request)
    {
        $data = $request->validated();
        RecordOfEmployee::create($data);
    }

    
    /**
     * получение суммы невыплаченных денег сотрудника
     * 
     * @param string $id
     * 
     * @return [type]
     */
    public function getSumNotPaid(string $id)
    {
        return RecordOfEmployeeQuery::getSumQuery($id, 0);
    }

    public function fullPayment()
    {
        RecordOfEmployeeQuery::fullNonPaymentQuery();
    }
}

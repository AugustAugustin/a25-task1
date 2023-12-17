<?php

namespace App\Actions\Query;

use App\Jobs\OrderPeymantJob;
use App\Models\RecordOfEmployee;

/**
 * Класс для запросов в таблицу record_of_employee
 */
final class RecordOfEmployeeQuery
{
    private const WITHOUT = 0;
    private const WiTH = 1;
    private const ALL = 2;


    /**
     * получение Суммы денег сотрудника
     * 
     * @param string $id
     * @param int $state 2: Все отработанные деньги, 1: Оплаченные, 0: Неоплаченные
     * 
     * @return float
     */
    public static function getSumQuery(string $id, int $state = 2): float
    {
        $sum = RecordOfEmployee::where('employee_id', $id)
            ->where('paid', false)
            ->sum('hours');
        return $sum;
    }


    /**
     * Получение всех невыплаченных работ
     * 
     * @return RecordOfEmployee
     */
    public static function fullNonPaymentQuery()
    {
        $recordsToUpdate = RecordOfEmployee::where('paid', false)->get();
        foreach ($recordsToUpdate as $record) {
            $record->paid = true;
            $record->save();
            dispatch(new OrderPeymantJob($record));
        }
    }
}

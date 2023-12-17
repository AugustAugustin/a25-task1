<?php

namespace App\Jobs;

use App\Models\MoneyTransaction;
use App\Models\RecordOfEmployee;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OrderPeymantJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    const PAYMANT = 10;

    protected $record;

    /**
     * Create a new job instance.
     */
    public function __construct(RecordOfEmployee $record)
    {
        $this->record = $record;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {   
        $record = $this->record;
        $employeeId = $record->employee_id;
        $hours = $record->hours;
        $sumPaymant = $hours*self::PAYMANT;
        MoneyTransaction::updateOrCreate(['employee_id' => $employeeId], ['cash' => $sumPaymant]);
    }
}

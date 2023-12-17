<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyTransaction extends Model
{
    use HasFactory;

    const CREATED_AT = null;

    protected $fillable = [
        'employee_id',
        'cash',
    ];

    public function Employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

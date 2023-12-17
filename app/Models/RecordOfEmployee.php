<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordOfEmployee extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = [
        'employee_id',
        'hours',
        'paid',
    ];

    public function Employee()
    {
        return $this->hasMany(Employee::class);
    }
}

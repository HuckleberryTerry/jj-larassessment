<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employees extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeesFactory> */
    use HasFactory;
    public function employee() : BelongsTo{
        return $this->belongsTo(Employees::class);
    }
    public function company() : BelongsTo{
        return $this->belongsTo(Companies::class);
    }
}

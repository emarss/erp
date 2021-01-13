<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 *
 * @property string date
 * @property integer employee_id
 * @property double amount
 * @property string payment_method
 * @property string currency
 * @property string narration
 * @property integer authorised_by
 * @property integer added_by
 * @property integer department_id
 */
class Requisation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date',
        'employee_id',
        'amount',
        'payment_method',
        'currency',
        'narration',
        'authorised_by',
        'added_by',
        'department_id',
    ];


    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }

    public function authoriser(){
        return $this->belongsTo(Employee::class, 'authorised_by');
    }

    public function employee(){
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function unitOfMeasure(){
        return $this->belongsTo(UnitOfMeasure::class);
    }
}

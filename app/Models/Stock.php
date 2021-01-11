<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property string $description
 * @property int $unit_of_measure_id
 * @property int $control_quantity
 * @property int $physical_quantity
 * @property int $unit_buying_price
 * @property int $unit_selling_price
 * @property string $remarks
 * @property int $department_id
 * @property int $added_by
 *
 */
class Stock extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'description',
        'unit_of_measure_id',
        'control_quantity',
        'physical_quantity',
        'unit_buying_price',
        'unit_selling_price',
        'remarks',
        'department_id',
        'added_by',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }

    public function unitOfMeasure(){
        return $this->belongsTo(UnitOfMeasure::class);
    }
}

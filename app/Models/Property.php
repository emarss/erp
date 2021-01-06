<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string name
 * @property string description
 * @property string location
 * @property string remarks
 * @property string date_acquired
 * @property string unit_of_measure_id
 * @property string quantity
 * @property double value
 * @property int added_by
 *
 */
class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'name',
        'description',
        'location',
        'remarks',
        'date_acquired',
        'unit_of_measure_id',
        'quantity',
        'value',
        'added_by',
    ];

    public function departments(){
        return $this->belongsToMany(Department::class);
    }
    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }

    public function unitOfMeasure(){
        return $this->belongsTo(UnitOfMeasure::class);
    }
}

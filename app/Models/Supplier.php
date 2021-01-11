<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $name
 * @property string $remarks
 * @property string $email
 * @property string $phone_number
 * @property string $address
 * @property string $city
 * @property string $country
 * @property int $added_by
 * @property int $department_id
 *
 */
class Supplier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'remarks',
        'email',
        'phone_number',
        'address',
        'city',
        'country',
        'added_by',
        'department_id',
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

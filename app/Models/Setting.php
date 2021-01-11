<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @property integer $department_id
 * @property integer $default_currency
 */
class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_id',
        'default_currency',
    ];


    public function department(){
        return $this->belongsTo(Department::class);
    }


    public function currency(){
        return $this->belongsTo(Currency::class, 'default_currency');
    }
}

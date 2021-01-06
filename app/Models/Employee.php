<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property string first_name
 * @property string middle_name
 * @property string last_name
 * @property string position
 * @property string status
 * @property string email
 * @property string national_id
 * @property string phone
 * @property string next_of_kin
 * @property string address
 * @property string sex
 * @property string employment_history
 * @property string engagement_date
 * @property string termination_date
 * @property string national_id_image
 * @property integer added_by
 * @property string contract
 */
class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'position',
        'status',
        'email',
        'national_id',
        'phone',
        'next_of_kin',
        'address',
        'sex',
        'employment_history',
        'engagement_date',
        'termination_date',
        'national_id_image',
        'added_by',
        'contract',
    ];

    public function getFullName(){
        return $this->first_name . " ".
            $this->middle_name . " ".
            $this->last_name;
    }

    public function departments(){
        return $this->belongsToMany(Department::class);
    }
    public function nationalIdImage()
    {
        if(strlen($this->national_id_image) == 0){
            return "/images/placeholder.png";
        }
        return "/" .$this->national_id_image;
    }

    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }
}

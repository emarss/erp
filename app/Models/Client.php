<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $email
 * @property string $national_id
 * @property string $phone
 * @property string $next_of_kin
 * @property string $address
 * @property string $sex
 * @property string $national_id_image
 * @property integer $department_id
 * @property integer $added_by
 * @property string $comments
 */
class Client extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'national_id',
        'phone',
        'next_of_kin',
        'address',
        'sex',
        'national_id_image',
        'department_id',
        'added_by',
        'comments',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }

    public function getFullName(){
        return $this->first_name . " ".
            $this->middle_name . " ".
            $this->last_name;
    }

    public function nationalIdImage()
    {
        if(strlen($this->national_id_image) == 0){
            return "/images/placeholder.png";
        }
        return "/" .$this->national_id_image;
    }
}

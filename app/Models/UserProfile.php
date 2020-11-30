<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 *
 * @property string affiliation
 * @property string national_id
 * @property string phone
 * @property string next_of_kin
 * @property string address
 * @property string sex
 * @property string national_id_image
 * @property integer user_id
 */
class UserProfile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'affiliation',
        'national_id',
        'phone',
        'next_of_kin',
        'address',
        'sex',
        'national_id_image',
        'user_id',
    ];
}

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
        'added_by',
        'comments',
    ];
}

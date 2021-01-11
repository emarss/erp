<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 *
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property integer $added_by
 */
class Department extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'slug',
        'added_by',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function logo(){
        return "/images/logos/emarss.png";
    }


    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'organisation_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'added_by');
    }

}

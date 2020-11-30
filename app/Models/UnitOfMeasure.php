<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 * @property string title
 * @property string description
 * @property integer added_by
 */
class UnitOfMeasure extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'added_by',
    ];
}

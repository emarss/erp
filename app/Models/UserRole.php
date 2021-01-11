<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 * @property string $title
 * @property string $description
 * @property string $added_by
 */
class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'added_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }
}

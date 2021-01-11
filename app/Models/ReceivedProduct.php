<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $date
 * @property int $quantity
 * @property int $product_id
 * @property int $supplier_id
 * @property string $comments
 * @property int $department_id
 * @property int $added_by
 */
class ReceivedProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date',
        'quantity',
        'product_id',
        'supplier_id',
        'comments',
        'department_id',
        'added_by',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }

    public function product(){
        return $this->belongsTo(Stock::class);
    }

    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $date
 * @property int $quantity
 * @property int $stock_id
 * @property double $unit_selling_price
 * @property int $supplier_id
 * @property string $remarks
 * @property int $department_id
 * @property int $added_by
 */
class ReceivedProduct extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'date',
        'quantity',
        'stock_id',
        'unit_selling_price',
        'supplier_id',
        'remarks',
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
        return $this->belongsTo(Stock::class, 'stock_id');
    }

    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }
}

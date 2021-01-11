<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 * @property int $stock_id
 * @property double $quantity
 * @property double $total_selling_price
 * @property double $actual_selling_price
 * @property double $discount
 * @property double $profit
 * @property double $department_id
 * @property int $added_by
 *
 */
class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'stock_id',
        'quantity',
        'total_selling_price',
        'actual_selling_price',
        'discount',
        'profit',
        'department_id',
        'added_by',
    ];


    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function adder(){
        return $this->belongsTo(User::class, 'added_by')->withTrashed();
    }

    public function product(){
        return $this->belongsTo(Stock::class, 'stock_id');
    }
}

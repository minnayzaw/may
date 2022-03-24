<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cart
 *
 * @property int $id
 * @property int $customer_id
 * @property int $product_id
 * @property int $stock_id
 * @property int $quantity
 * @property int $total
 * @property datetime $created_date-time
 *
 * @package App\Models
 */
class TempCart extends Model
{
	protected $table = 'temp_carts';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'product_id' => 'int',
		'stock_id' => 'int',
		'quantity' => 'int',
		'total' => 'int',
		'created_date_time' => 'date_time'
	];

	protected $fillable = [
		'customer_id',
		'product_id',
		'stock_id',
		'quantity',
		'total',
		'created_date_time'
	];
}

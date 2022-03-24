<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $cart_id
 * @property int $payment_id
 * @property bool $status
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'cart_id' => 'int',
		'payment_id' => 'int',
		'status' => 'bool'
	];

	protected $fillable = [
		'customer_id',
		'cart_id',
		'payment_id',
		'status'
	];
}

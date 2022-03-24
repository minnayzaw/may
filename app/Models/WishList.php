<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WishList
 * 
 * @property int $id
 * @property int $customer_id
 * @property int $stock_id
 *
 * @package App\Models
 */
class WishList extends Model
{
	protected $table = 'wish_list';
	public $timestamps = false;

	protected $casts = [
		'customer_id' => 'int',
		'stock_id' => 'int'
	];

	protected $fillable = [
		'customer_id',
		'stock_id'
	];
}

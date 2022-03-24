<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Eloquent;

/**
 * Class Stock
 *
 * @property int $id
 * @property int $product_id
 * @property int $quantity
 * @property int $stock_out
 * @property int $stock_in
 *
 * @package App\Models
 */
class Stock extends Eloquent{
	protected $table = 'stocks';
	public $timestamps = false;

	protected $casts = [
		'product_id' => 'int',
		'quantity' => 'int',
		'stock_out' => 'int',
		'stock_in' => 'int'
	];

	protected $fillable = [
		'product_id',
		'quantity',
		'stock_out',
		'stock_in'
	];

	public function product() {
  	return $this->belongsTo('App\Models\Product');
  }
}

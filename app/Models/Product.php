<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Carbon\Carbon;
use Eloquent;

/**
 * Class Product
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $description
 * @property string $price
 * @property string $image
 * @property string $product_code
 * @property Carbon $exp_date
 *
 * @package App\Models
 */
class Product extends Eloquent{
	protected $table = 'products';
	public $timestamps = false;

	protected $casts = [
		'category_id' => 'int'
	];

	protected $dates = [
		'exp_date'
	];

	protected $fillable = [
		'category_id',
		'title',
		'description',
		'price',
		'image',
		'product_code',
		'exp_date'
	];
	public function category() {
    return $this->belongsTo('App\Models\Category');
  }

  public function stock() {
    return $this->hasMany('App\Models\Stock');
  }
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;
use Eloquent;

/**
 * Class Category
 *
 * @property int $id
 * @property string $name
 *
 * @package App\Models
 */
class Category extends Eloquent {
	protected $table = 'categories';
	public $timestamps = false;

	protected $fillable = [
		'name'
	];

	public function products() {
  	return $this->hasMany('App\Models\Product');
  }
}

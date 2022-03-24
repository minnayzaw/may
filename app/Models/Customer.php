<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 * 
 * @property int $id
 * @property int $address_id
 * @property int $cart_id
 * @property int $wish_list_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $mobile
 *
 * @package App\Models
 */
class Customer extends Model
{
	protected $table = 'customers';
	public $timestamps = false;

	protected $casts = [
		'address_id' => 'int',
		'cart_id' => 'int',
		'wish_list_id' => 'int'
	];

	protected $fillable = [
		'address_id',
		'cart_id',
		'wish_list_id',
		'first_name',
		'last_name',
		'email',
		'mobile'
	];
}

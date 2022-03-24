<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Address
 * 
 * @property int $id
 * @property string $address_no
 * @property string $address_street
 * @property string $address_city
 * @property string $address_state
 * @property int $address_zip
 * @property string $address_country
 *
 * @package App\Models
 */
class Address extends Model
{
	protected $table = 'address';
	public $timestamps = false;

	protected $casts = [
		'address_zip' => 'int'
	];

	protected $fillable = [
		'address_no',
		'address_street',
		'address_city',
		'address_state',
		'address_zip',
		'address_country'
	];
}

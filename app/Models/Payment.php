<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Payment
 * 
 * @property int $id
 * @property string $method
 * @property int $amount
 * @property string $status
 * @property Carbon $date
 *
 * @package App\Models
 */
class Payment extends Model
{
	protected $table = 'payments';
	public $timestamps = false;

	protected $casts = [
		'amount' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'method',
		'amount',
		'status',
		'date'
	];
}

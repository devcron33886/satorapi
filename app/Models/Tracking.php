<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tracking extends Model {
	use HasFactory;

	protected $table = 'm_tracking';

	protected $fillable = [
		'device_id',
		'serialnumber',
		'latitude',
		'longitude',
		'speed',

	];

	public function device(): BelongsTo {
		return $this->belongsTo(Device::class, 'serialnumber');
	}
}

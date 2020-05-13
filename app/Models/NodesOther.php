<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NodesOther
 * 
 * @property int $node_id
 * @property string $name
 * @property string $country_codes
 * @property string $countries
 * @property string $status
 * @property string $sourceID
 * @property string $valid_until
 * @property string $note
 *
 * @package App\Models
 */
class NodesOther extends Model
{
	protected $table = 'nodes_other';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'node_id',
		'name',
		'country_codes',
		'countries',
		'status',
		'sourceID',
		'valid_until',
		'note'
	];
}

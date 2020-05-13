<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NodesAddress
 * 
 * @property int $node_id
 * @property string $name
 * @property string $address
 * @property string $country_codes
 * @property string $countries
 * @property string $sourceID
 * @property string $valid_until
 * @property string $note
 *
 * @package App\Models
 */
class NodesAddress extends Model
{
	protected $table = 'nodes_address';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'node_id',
		'name',
		'address',
		'country_codes',
		'countries',
		'sourceID',
		'valid_until',
		'note'
	];
}

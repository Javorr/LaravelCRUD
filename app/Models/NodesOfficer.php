<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NodesOfficer
 *
 * @property int $node_id
 * @property string $name
 * @property string $country_codes
 * @property string $countries
 * @property string $sourceID
 * @property string $valid_until
 * @property string $note
 *
 * @package App\Models
 */
class NodesOfficer extends Model
{
	protected $table = 'nodes_officer';
	protected $primaryKey = 'node_id';
	public $timestamps = false;
	//public $incrementing = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'node_id',
		'name',
		'country_codes',
		'countries',
		'sourceID',
		'valid_until',
		'note'
	];

}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NodesEntity
 * 
 * @property int $node_id
 * @property string $name
 * @property string $jurisdiction
 * @property string $jurisdiction_description
 * @property string $country_codes
 * @property string $countries
 * @property string $incorporation_date
 * @property string $inactivation_date
 * @property string $struck_off_date
 * @property string $closed_date
 * @property string $ibcRUC
 * @property string $status
 * @property string $company_type
 * @property string $service_provider
 * @property string $sourceID
 * @property string $valid_until
 * @property string $note
 *
 * @package App\Models
 */
class NodesEntity extends Model
{
	protected $table = 'nodes_entity';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'node_id',
		'name',
		'jurisdiction',
		'jurisdiction_description',
		'country_codes',
		'countries',
		'incorporation_date',
		'inactivation_date',
		'struck_off_date',
		'closed_date',
		'ibcRUC',
		'status',
		'company_type',
		'service_provider',
		'sourceID',
		'valid_until',
		'note'
	];
}

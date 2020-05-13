<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class BahamasLeak
 * 
 * @property string $labels(n)
 * @property string $valid_until
 * @property string $country_codes
 * @property string $countries
 * @property int $node_id
 * @property string $sourceID
 * @property string $address
 * @property string $name
 * @property string $jurisdiction_description
 * @property string $service_provider
 * @property string $jurisdiction
 * @property string $closed_date
 * @property string $incorporation_date
 * @property string $ibcRUC
 * @property string $type
 * @property string $status
 * @property string $company_type
 * @property string $note
 *
 * @package App\Models
 */
class BahamasLeak extends Model
{
	protected $table = 'bahamas_leaks';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'labels(n)',
		'valid_until',
		'country_codes',
		'countries',
		'node_id',
		'sourceID',
		'address',
		'name',
		'jurisdiction_description',
		'service_provider',
		'jurisdiction',
		'closed_date',
		'incorporation_date',
		'ibcRUC',
		'type',
		'status',
		'company_type',
		'note'
	];
}

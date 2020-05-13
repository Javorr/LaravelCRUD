<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NodesIntermediary
 * 
 * @property int $node_id
 * @property string $name
 * @property string $countr_codesy
 * @property string $countries
 * @property string $sourceID
 * @property string $valid_until
 * @property string $note
 *
 * @package App\Models
 */
class NodesIntermediary extends Model
{
	protected $table = 'nodes_intermediary';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'node_id' => 'int'
	];

	protected $fillable = [
		'node_id',
		'name',
		'countr_codesy',
		'countries',
		'sourceID',
		'valid_until',
		'note'
	];
}

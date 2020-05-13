<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NodesOfficer extends Model
{
    protected $primaryKey = 'node_id';
    public $timestamps = false;
    protected $table = 'nodes_officer';
    protected $fillable = ['node_id', 'name', 'country_codes', 'countries', 'sourceID', 'valid_until', 'note'];
}

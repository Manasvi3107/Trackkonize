<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
	protected $table = 'project';
	protected $primaryKey = 'projectID';

	public function project_related_client()
	{
		return $this->hasOne(client::class, 'clientID', 'clientID');
	}
}
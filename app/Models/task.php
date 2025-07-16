<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class task extends Model
{
	protected $table = 'tasks';
	protected $primaryKey = 'taskID';

	public function task_related_project()
	{
		return $this->hasOne(project::class, 'projectID', 'projectID');
	}

	public function task_related_user()
	{
		return $this->hasOne(User::class, 'id', 'task_assign_user_id');
	}
}
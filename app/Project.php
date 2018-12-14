<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

	/**
	 * Project has many Tasks.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function tasks()
	{
		// hasMany(RelatedModel, foreignKeyOnRelatedModel = project_id, localKey = id)
		return $this->hasMany(Task::class);
	}

}



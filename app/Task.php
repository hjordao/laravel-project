<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $guarded = [];
	/* 
	 * Task belongs to .
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function project()
	{
		// belongsTo(RelatedModel, foreignKey = _id, keyOnRelatedModel = id)
		return $this->belongsTo(Project::class);
	}

	public function complete($completed = true)
	{
		$this->update(compact('completed'));
	}

	public function incomplete()
	{
		$this->complete(false);
	}
}

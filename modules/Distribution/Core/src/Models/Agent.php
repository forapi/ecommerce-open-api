<?php

namespace GuoJiangClub\Distribution\Core\Models;

use GuoJiangClub\Component\User\Models\User;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
	const STATUS_AUDIT   = 0;   //待审核
	const STATUS_AUDITED = 1;    //已通过
	const STATUS_FAILED  = 2;  //审核未通过
	const STATUS_RETREAT = 3; //已清退

	protected $table   = 'el_agent';
	protected $guarded = ['id'];

	public function user()
	{
		return $this->belongsTo(User::class)->withDefault();
	}

	public function manySubAgents()
	{
		return $this->belongsToMany(Agent::class, 'el_agent_relation', 'parent_agent_id', 'agent_id');
	}
}
<?php

namespace GuoJiangClub\Distribution\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AgentUserRelation extends Model
{
	protected $table   = 'el_agent_user_relation';
	protected $guarded = ['id'];

	public function user()
	{
		return $this->hasOne('GuoJiangClub\Component\User\Models\User', 'id', 'user_id');
	}

	public function user_bind()
	{
		return $this->hasOne('GuoJiangClub\Component\User\Models\UserBind', 'user_id', 'user_id');
	}
}
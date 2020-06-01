<?php

namespace GuoJiangClub\Distribution\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AgentCommission extends Model
{

	protected $table   = 'el_agent_commission';
	protected $guarded = ['id'];

	public function agentOrder()
	{
		return $this->hasOne('GuoJiangClub\Distribution\Core\Models\AgentOrder', 'id', 'agent_order_id');
	}
}

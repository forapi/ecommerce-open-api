<?php

namespace GuoJiangClub\Distribution\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AgentOrderItem extends Model
{
	const STATUS_STATE     = 1;  //已结算
	const STATUS_UNSETTLED = 0;  //未结算
	const STATUS_INVALID   = 2;    //已失效

	protected $table   = 'el_agent_order_item';
	protected $guarded = ['id'];

	public function agentOrder()
	{
		return $this->hasOne('GuoJiangClub\Distribution\Core\Models\AgentOrder', 'id', 'agent_order_id');
	}

	public function orderItem()
	{
		return $this->hasOne('GuoJiangClub\Component\Order\Models\OrderItem', 'id', 'order_item_id');
	}
}
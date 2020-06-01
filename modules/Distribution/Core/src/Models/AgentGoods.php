<?php

namespace GuoJiangClub\Distribution\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AgentGoods extends Model
{
	protected $table   = 'el_agent_goods';
	protected $guarded = ['id'];

	public function goods()
	{
		return $this->hasOne('GuoJiangClub\Component\Product\Models\Goods', 'id', 'goods_id');
	}

	public function getRoleRate($agent_role)
	{
		switch ($agent_role) {
			case 2:
				return $this->rate_organ;
				break;
			case 3:
				return $this->rate_shop;
				break;
			default:
				return $this->rate;
		}
	}

}

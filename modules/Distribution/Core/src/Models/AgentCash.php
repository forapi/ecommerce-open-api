<?php

namespace GuoJiangClub\Distribution\Core\Models;

use Illuminate\Database\Eloquent\Model;

class AgentCash extends Model
{
	const STATUS_AUDIT    = 0;   //待审核
	const STATUS_WAIT_PAY = 1;   //待打款提现
	const STATUS_PAY      = 2;   //已打款提现
	const STATUS_FAILED   = 3;  //审核未通过

	protected $table   = 'el_agent_cash';
	protected $guarded = ['id'];
}
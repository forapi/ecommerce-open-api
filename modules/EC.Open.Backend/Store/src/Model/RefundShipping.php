<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/12/13
 * Time: 10:41
 */

namespace GuoJiangClub\EC\Open\Backend\Store\Model;

use Illuminate\Database\Eloquent\Model;

class RefundShipping extends Model
{

    protected $guarded = ['id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable(config('ibrand.app.database.prefix', 'ibrand_') . 'refund_shipping');
    }

}
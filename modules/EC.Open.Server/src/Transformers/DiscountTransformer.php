<?php

/*
 * This file is part of ibrand/EC-Open-Server.
 *
 * (c) 果酱社区 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\EC\Open\Server\Transformers;

use GuoJiangClub\Component\Discount\Models\Coupon;

class DiscountTransformer extends BaseTransformer
{
    protected $type;

    public function __construct($type = 'default')
    {
        $this->type = $type;
    }

    public function transformData($model)
    {
        $model->has_get = false;
        $model->coupon_id = 0;
        if (('list' == $this->type or 'detail' == $this->type)
            and $user = auth('api')->user()
            and 1 == $model->coupon_based
        ) {
            $coupons = Coupon::where('discount_id', $model->id)->where('user_id', $user->id)->get();
            if (count($coupons) >= $model->per_usage_limit) {
                $model->has_get = true;
                $model->coupon_id = $coupons->first()->id;
            }

            /*if ('detail' == $this->type) {  //优惠券详情页获取二维码，方便导购扫码核销
                if ($couponID = request('coupon_id')) {  //如果是从会员中心优惠券列表页进入，会有coupon_id
                    $qr_code_string = $user->id.','.$couponID.','.'iBrandCoupon';
                    $qr_code_img = 'data:image/png;base64,'.base64_encode(\QrCode::format('png')->size(200)->margin(1)->generate($qr_code_string));
                } else {  //从领取中心进入
                    $coupon = $coupons->sortBy('created_at')->filter(function ($item, $key) {
                        return !$item->used_at;
                    })->first();

                    $qr_code_img = '';
                    if ($coupon) {
                        $qr_code_string = $user->id.','.$coupon->id.','.'iBrandCoupon';
                        $qr_code_img = 'data:image/png;base64,'.base64_encode(\QrCode::format('png')->size(200)->margin(1)->generate($qr_code_string));
                    }
                }
                $model->qr_code_img = $qr_code_img;
            }*/
        }

        return $model->toArray();
    }
}

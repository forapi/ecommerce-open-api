<?php

/*
 * This file is part of ibrand/EC-Open-Core.
 *
 * (c) 果酱社区 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\EC\Open\Core\Processor;

use Carbon\Carbon;
use GuoJiangClub\Component\Order\Models\Order;

class OrderProcessor
{
    /**
     * cancel order.
     *
     * @param Order  $order
     * @param string $cancelReason
     *
     * @return bool
     */
    public function cancel(Order $order, $cancelReason = '用户取消')
    {
        if (Order::STATUS_NEW == $order->status) {
            $order->status = Order::STATUS_CANCEL;
            $order->completion_time = Carbon::now();
            $order->cancel_reason = $cancelReason;
            $order->save();
            event('order.canceled', $order->id);

            return true;
        }

        return false;
    }

    public function submit($order)
    {
        if (Order::STATUS_TEMP == $order->status) {
            $order->status = Order::STATUS_NEW;
            $order->submit_time = Carbon::now();
            $order->save();
            event('order.submitted', [$order]);
        }
    }
}

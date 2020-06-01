<?php

/*
 * This file is part of ibrand/payment.
 *
 * (c) 果酱社区 <https://guojiang.club>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GuoJiangClub\Component\Payment\Providers;

use GuoJiangClub\Component\Payment\Services\PaymentService;
use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (!class_exists('CreatePaymentTables')) {
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__.'/../../migrations/create_payment_tables.php.sub' => database_path()."/migrations/{$timestamp}_create_payment_tables.php",
            ], 'migrations');
        }
    }

    public function register()
    {
        $this->app->bind('ibrand.pay.notify.default', PaymentService::class);
    }
}

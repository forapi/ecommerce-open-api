<?php

namespace GuoJiangClub\Component\Refund;

use GuoJiangClub\Component\Refund\Repositories\Eloquent\RefundRepositoryEloquent;
use GuoJiangClub\Component\Refund\Repositories\RefundRepository;
use Illuminate\Support\ServiceProvider;

class RefundServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (!class_exists('CreateRefundTables')) {
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__.'/../migrations/create_refund_tables.php.stub' => database_path()."/migrations/{$timestamp}_create_refund_tables.php",
            ], 'migrations');
        }

    }

    public function register()
    {
        $this->app->bind(RefundRepository::class, RefundRepositoryEloquent::class);

        $this->app->make('iBrand\Scheduling\ScheduleList')->add(Schedule::class);
    }
}

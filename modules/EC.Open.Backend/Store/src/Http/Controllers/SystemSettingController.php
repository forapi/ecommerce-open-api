<?php
/**
 * Created by PhpStorm.
 * User: eddy
 * Date: 2016/11/5
 * Time: 23:34
 */
namespace GuoJiangClub\EC\Open\Backend\Store\Http\Controllers;

use Illuminate\Http\Request;
use iBrand\Backend\Http\Controllers\Controller;
use Spatie\ResponseCache\ResponseCacheFacade as ResponseCache;
use Encore\Admin\Facades\Admin as LaravelAdmin;
use Encore\Admin\Layout\Content;
use Storage;


class SystemSettingController extends Controller
{

    public function refundReason()
    {
        return LaravelAdmin::content(function (Content $content) {

            $content->header('售后设置');

            $content->breadcrumb(
                ['text' => '商城设置', 'url' => 'store/setting/shopSetting', 'no-pjax' => 1],
                ['text' => '售后设置', 'url' => '', 'no-pjax' => 1, 'left-menu-active' => '售后设置']

            );

            $content->body(view('store-backend::setting.refund_reason'));
        });
    }


    /**
     * 保存退换货理由
     * @param Request $request
     */
    public function saveRefundSettings(Request $request)
    {
        $data = $request->except('_token');

        if (!isset($data['order_refund_reason'])) {
            return $this->ajaxJson(false, [], 400, '退换货理由不能为空');
        }

        $reason = $data['order_refund_reason'];

        foreach ($reason as $item) {
            if (!$item['key'] OR !$item['value']) {
                return $this->ajaxJson(false, [], 400, 'key值或者理由不能为空');
            }
        }

        $array = array_map('array_shift', $reason);
        if (count($array) != count(array_unique($array))) {
            return $this->ajaxJson(false, [], 400, '存在重复的key值');
        }

        settings()->setSetting($data);

        return $this->ajaxJson();
    }

}
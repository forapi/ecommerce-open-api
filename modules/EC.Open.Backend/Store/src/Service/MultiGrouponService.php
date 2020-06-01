<?php

namespace GuoJiangClub\EC\Open\Backend\Store\Service;

use Intervention\Image\Facades\Image;
use Storage;

class MultiGrouponService
{   

    /**
     * 创建海报图片
     * @param $freeTitle
     * @param $freeID
     */
    public function createShareBgImg($multiGroupon)
    {
        Storage::makeDirectory('public/multi-groupon/' . $multiGroupon->id);
        $img = Image::make(public_path('assets/backend/images/multi_groupon.png')); //海报标题透明背景图

        $goods_name = $multiGroupon->goods->name;
        $title_len = strlen($goods_name);
        if ($title_len > 20) {  //如果标题过长，断行
            $title = $this->mbStrSplit($goods_name, 20);
            $p_h = 1310;
            foreach ($title as $item) {
                $img->text($item, 80, $p_h, function ($font) {
                    $font->file(public_path('assets/backend/distribution/msyh.ttf'));
                    $font->size(42);
                    $font->color('#000000');
                });
                $p_h += 70;
            }

        } else {
            $img->text($goods_name, 80, 1310, function ($font) {
                $font->file(public_path('assets/backend/distribution/msyh.ttf'));
                $font->size(42);
                $font->color('#000000');
            });
        }

        //添加商品图片
        $goodsImg = Image::make($multiGroupon->goods->img);
        $goodsImg->resize(920, null, function ($constraint) {
            $constraint->aspectRatio();
        });
        $goodsImg->save(storage_path('app/public/multi-groupon/' . $multiGroupon->id . '/' . $multiGroupon->goods_id . '_920.jpg'));
        $goodsImg = storage_path('app/public/multi-groupon/' . $multiGroupon->id . '/' . $multiGroupon->goods_id . '_920.jpg');
        $img->insert($goodsImg, 'top-left', 80, 160);

        //插入价格
        $price = '￥' . number_format($multiGroupon->price, 2);
        $img->text($price, 80, 1660, function ($font) {
            $font->file(public_path('assets/backend/distribution/msyh.ttf'));
            $font->size(70);
            $font->color('#E73237');
        });

        $market_price = '￥' . number_format($multiGroupon->goods->market_price, 2);
        $img->text('原价  '.$market_price, 80, 1570, function ($font) {
            $font->file(public_path('assets/backend/distribution/msyh.ttf'));
            $font->size(42);
            $font->color('#9B9B9B');
        });

        //插入参团数量
        $numImg = Image::make(public_path('assets/backend/images/multi_groupon_number.png'));
        $numImg->text($multiGroupon->number.'人拼团', 20, 55, function ($font) {
            $font->file(public_path('assets/backend/distribution/msyh.ttf'));
            $font->size(42);
            $font->color('#ffffff');
        });
        $numImg->save(storage_path('app/public/multi-groupon/' . $multiGroupon->id . '/num_bg.png'));
        $img->insert(storage_path('app/public/multi-groupon/' . $multiGroupon->id . '/num_bg.png'), 'top-left', 80, 160);

        $imgName = 't_t_.png';
        $imgPath = storage_path('app/public/multi-groupon/' . $multiGroupon->id . '/' . $imgName);
        $img->save($imgPath);

        return $imgPath;
    }

    /**
     * 将字符串按照长度分割
     * @param $string
     * @param int $len
     * @return array
     */
    protected function mbStrSplit($string, $len = 1)
    {
        $start = 0;
        $strlen = mb_strlen($string);
        $array = [];
        while ($strlen) {
            $array[] = mb_substr($string, $start, $len, "utf8");
            $string = mb_substr($string, $len, $strlen, "utf8");
            $strlen = mb_strlen($string);
        }
        return $array;
    }


}
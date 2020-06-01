<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="format-detection" content="email=no"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, shrink-to-fit=no">
    <title>帮帮砍</title>
</head>
<body>

<div id="mierShaer">
    <div class="goods">
        <img src="{{$reduceItems->reduce->goods->img}}" alt="">
    </div>
    <div class="bg-box">
        <img  class="bg-img" src="{{env('APP_URL').'/img/reduce_bg.png'}}" alt="">
        <div class="group">
            <div class="code-box">
                <div class="item text">
                    <div class="left_message">
                        <div class="goods_name">{{$reduceItems->reduce->goods->name}}</div>
                        <div class="price">
                            <div class="older_price">原价￥ <span>{{$reduceItems->reduce->goods->sell_price}}</span></div>
                            <div class="new_price">砍后价 ￥<span>{{$reduceItems->reduce->price}}</span></div>
                        </div>
                    </div>
                </div>
                <div class="item img">
                    <img src="{{$mini_qrcode}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<style>
    @font-face {
        font-family: 'MILANTING--GBK1-Light';
        font-weight: normal;
        font-style: normal;
    }

    body,
    html {
        padding: 0;
        margin: 0;
        width: 100%;
        height: 100%;
    }
    #mierShaer {
        width: 100%;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        background: #ffffff;
        /*height: 682px;*/
    }
    #mierShaer .bg-box {
        position: relative;
        margin-top: -35px;
    }
    #mierShaer .bg-box .bg-img {
        height: 320px;
        width: 375px
    }
    #mierShaer .goods {
        position: relative;
    }
    #mierShaer .goods img {
        display: block;
        width: 100%;
    }
    #mierShaer .goods .text {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        font-size: 16px;
        padding: 5px 15px;
        background: rgba(255, 255, 255, 0.7);
    }
    #mierShaer .button-box {
        background: #ffffff;
        padding: 10px;
        text-align: center;
    }
    #mierShaer .button-box .img-box {
        font-size: 12px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -webkit-justify-content: center;
        -ms-flex-pack: center;
        justify-content: center;
    }
    #mierShaer .button-box .img-box .img {
        -webkit-border-radius: 100%;
        border-radius: 100%;
        width: 25px;
        height: 25px;
        overflow: hidden;
        background: #FBF6DC;
        margin-right: 5px;
    }
    #mierShaer .button-box .img-box .img img {
        width: 100%;
        height: 100%;
    }
    #mierShaer .button-box .code {
        font-size: 12px;
        color: #9B9B9B;
    }
    #mierShaer .button-box .code img {
        width: 100px;
        height: 100px;
        margin: 10px 0;
    }
    #mierShaer .group {
        position: absolute;
        top: 33px;
        left: 20px;
        right: 20px;
        /*text-align: center;*/
        background: #ffffff;
    }
    #mierShaer .group .code-box .item {
        display: inline-block;
        position: absolute;
        top: 45px;
        right: 0px;
    }
    #mierShaer .group .code-box .item.img img {
        width: 100px;
        height: 100px;
    }
    #mierShaer .group .code-box .item.text {
        font-size: 15px;
        font-weight: bold;
        color: #333333;
        margin-left: 10px;
    }
    #mierShaer .group .code-box .item.text .left_message{
        margin-top: 145px;
        margin-right:175px;
    }
    #mierShaer .group .code-box .item.text .left_message .goods_name{
        width: 138px;
        font-size:13px;
        line-height:18px;
    }
    /* #mierShaer .group .code-box .item.text .left_message .price{

    } */
    #mierShaer .group .code-box .item.text .left_message .price .older_price{
        width:120px;
        height:14px;
        font-size:10px;
        text-decoration: line-through;
        color: #666666
    }
    #mierShaer .group .code-box .item.text .left_message .price .new_price{
        color: #FB5054;
        width:120px;
        height:19px;
        font-size:13px;
    }
    #mierShaer .group .code-box .item.text .user {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        margin-bottom: 10px;
    }
    #mierShaer .group .code-box .item.text img {
        width: 45px;
        height: 45px;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        margin-right: 5px;
    }
    #mierShaer .group .code-box .item.text .newText {
        color: #986923;
    }
    #mierShaer .code-box {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -webkit-align-items: center;
        -ms-flex-align: center;
        align-items: center;
        background: #ffffff;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    #mierShaer .code-box .item .goods-name {
        font-size: 15px;
        color: #2E2D2D;
    }
    #mierShaer .code-box .item .price-box {
        margin-top: 30px;
    }
    #mierShaer .code-box .item .price-box .old-price {
        font-size: 10px;
        color: #9B9B9B;
        text-decoration: line-through;
    }
    #mierShaer .code-box .item .price-box .new-price {
        font-size: 25px;
        color: #E73237;
    }
    #mierShaer .code-box .item.right {
        text-align: center;
        font-size: 10px;
        color: #2E2D2D;
    }
    #mierShaer .code-box .item.right img {
        width: 110px;
        height: 110px;
    }

</style>


</html>
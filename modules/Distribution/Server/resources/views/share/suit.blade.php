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
    <title>首页</title>
    <style rel="stylesheet">
        @font-face {
            font-family: 'MILANTING--GBK1-Light';
            font-weight: normal;
            font-style: normal;
        }

         body {
             font-family:"MILANTING--GBK1-Light" !important;
         }

        body, html {
            padding: 0;
            margin: 0;
            width: 100%;
            height: 100%;
            font-size: 16px;
        }



        #groupShare {
            width: 100%;
            background-color: #F3F5F7;
            /*height: 682px;*/

        }
        #groupShare .goods {
            position: relative;
        }
        #groupShare .goods img {
            display: block;
            width: 100%;
        }
        #groupShare .goods .text {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            font-size: 16px;
            padding: 5px 15px;
            background: rgba(255, 255, 255, 0.7);
        }
        #groupShare .button-box {
            background: #ffffff;
            padding: 10px;
            text-align: center;
        }
        #groupShare .button-box .img-box {
            font-size: 12px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }
        #groupShare .button-box .img-box .img {
            border-radius: 100%;
            width: 25px;
            height: 25px;
            overflow: hidden;
            background: #FBF6DC;
            margin-right: 5px;
        }
        #groupShare .button-box .img-box .img img {
            width: 100%;
            height: 100%;
        }
        #groupShare .button-box .code {
            font-size: 12px;
            color: #9B9B9B;
        }
        #groupShare .button-box .code img {
            width: 100px;
            height: 100px;
            margin: 10px 0;
        }
        #groupShare .group {
            text-align: center;
            padding: 10px 0;
            background: #ffffff;
        }
        #groupShare .group .code-box {
            display: block;
        }
        #groupShare .group .code-box .item {
            display: inline-block;
            width: 100%;
        }
        #groupShare .group .code-box .item.img img {
            width: 50px;
            height: 50px;
        }
        #groupShare .group .code-box .item.text {
            margin-left: 10px;
        }
        #groupShare .group .code-box .item.text .user {
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
        #groupShare .group .code-box .item.text img {
            width: 25px;
            height: 25px;
            border-radius: 100%;
            margin-right: 5px;
        }
        #groupShare .code-box {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 20px 10px;
            background: #ffffff;
        }
        #groupShare .code-box .item {
            width: 100%;
        }
        #groupShare .code-box .item .goods-name {
            font-size: 15px;
            color: #2E2D2D;
        }
        #groupShare .code-box .item .price-box {
            margin-top: 30px;
        }
        #groupShare .code-box .item .price-box .old-price {
            font-size: 10px;
            color: #9B9B9B;
            text-decoration: line-through;
        }
        #groupShare .code-box .item .price-box .new-price {
            font-size: 25px;
            color: #E73237;
        }
        #groupShare .code-box .item.right {
            text-align: center;
            font-size: 10px;
            color: #2E2D2D;
        }
        #groupShare .code-box .item.right img {
            width: 110px;
            height: 110px;
        }




    </style>
</head>
<body>
<div id="groupShare">
    <div class="goods">
        <img src="{{ $suit->img }}" alt="">
    </div>

    <!--套餐-->
    <div class="group">
        <div>
            {{ $suit->title }}
        </div>
        <div class="code-box">
            <div class="item img">
                <img src="{{ $qr_code }}" alt="">
            </div>
            <div class="item text">
                <div class="user">
                    <img src="{{ $avatar }}" alt="">
                    <div>
                        {{ $user->nick_name }}向您推荐
                    </div>
                </div>
                <div>
                    长按识别二维码购买
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>
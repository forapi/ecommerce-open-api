{{--@extends('backend-distribution::layouts.default')--}}
{{--@section ('title','查看分销订单详情')--}}

{{--@section ('breadcrumbs')--}}
    {{--<h2>查看分销订单详情</h2>--}}
    {{--<ol class="breadcrumb">--}}
        {{--<li><a href="{!!route('admin.store.index')!!}"><i class="fa fa-dashboard"></i> 首页</a></li>--}}
        {{--<li class=""><a href="{{route('admin.distribution.orders.index',['status'=>'STATUS_UNSETTLED'])}}">分销订单管理</a>--}}
        {{--</li>--}}
        {{--<li class="active">查看分销订单详情</li>--}}
    {{--</ol>--}}
{{--@stop--}}

{{--@section('content')--}}
    <div class="ibox float-e-margins">
        <div class="ibox-content" style="display: block;">
            <div class="row">
                @include('backend-distribution::orders.includes.order_show_base')
            </div>

            <div class="row">
                @include('backend-distribution::orders.includes.order_show_agent')
            </div>
            <div class="row">
                @include('backend-distribution::orders.includes.order_show_item')
            </div>
            <div class="hr-line-dashed"></div>

            <div class="col-md-offset-2 col-md-8 controls clearfix">

                <a href="javascript:history.go(-1)"
                   class="btn btn-danger">返回</a>
            </div>
            <div class="clearfix"></div>

            <!-- /.tab-content -->
        </div>
    </div>

{{--@endsection--}}

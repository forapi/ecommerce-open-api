{{--@extends('backend-distribution::layouts.default')--}}

{{--@section ('title','分销员会员管理列表')--}}

{{--@section('breadcrumbs')--}}

    {{--<h2>分销员会员管理列表</h2>--}}
    {{--<ol class="breadcrumb">　--}}
        {{--<li><a href="{!!route('admin.distribution.index')!!}"><i class="fa fa-dashboard"></i> 首页</a></li>--}}
        {{--<li><a href="{{route('admin.distribution.agent.index',['status'=>'STATUS_AUDITED'])}}">分销员列表</a> </li>--}}
        {{--<li class="active">分销员会员管理列表</li>--}}
    {{--</ol>--}}

{{--@endsection--}}

{{--@section('after-styles-end')--}}

{{--@stop--}}


{{--@section('content')--}}
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a href="javascript:;">{{$agent->name}} 的会员</a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">

                <div class="panel-body">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>昵称</th>
                            <th>手机号码</th>
                            <th>注册时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $item)
                            <tr>
                                <td>{{$item->nick_name}}</td>
                                <td>{{$item->mobile}}</td>
                                <td>{{$item->created_at}}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                    <div class="pull-left">
                        共 {{$users->count()}} 个会员
                    </div>
                    <div class="pull-right">
                        {!! $users->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--@endsection--}}

{{--@section('before-scripts-end')--}}

{{--@stop--}}




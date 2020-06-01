{{--@extends('backend-distribution::layouts.default')--}}

{{--@section ('title','分销员管理列表')--}}

{{--@section('breadcrumbs')--}}

    {{--<h2>分销员管理列表</h2>--}}
    {{--<ol class="breadcrumb">--}}
        {{--<li><a href="{!!route('admin.distribution.index')!!}"><i class="fa fa-dashboard"></i> 首页</a></li>--}}
        {{--<li class="active">{{$agent->name}} 的下级分销员列表</li>--}}
    {{--</ol>--}}

{{--@endsection--}}

{{--@section('after-styles-end')--}}
    {!! Html::style(env("APP_URL").'/assets/backend/libs/datepicker/bootstrap-datetimepicker.min.css') !!}
    <style type="text/css">
        .thumb {
            float: left;
            margin-right: 15px;
            text-align: center;
            width: 50px;
        }

        .thumb > img {
            border-radius: 50%
        }
    </style>
{{--@stop--}}


{{--@section('content')--}}
    <div class="tabs-container">
        <ul class="nav nav-tabs">
            <li class="active"><a
                        href="javascript:;">{{$agent->name}} 的下级分销员列表
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane active">

                <div class="panel-body">

                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>分销员</th>
                            <th>层级</th>
                            <th>状态</th>
                            <th>加入时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($agents as $item)
                            <tr>
                                <td>
                                    <div class="thumb"><img src="{{$item->agent->user->avatar}}" width="50" height="50">
                                    </div>
                                    <p>{{$item->agent->name}}</p>
                                    <p>{{$item->agent->mobile}}</p>
                                </td>
                                <td>
                                    {{$item->level}} 级
                                </td>
                                <td>
                                    {{$item->agent->agent_status}}
                                </td>
                                <td>{{$item->agent->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="clearfix"></div>
                    <div class="pull-right">
                        {!! $agents->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="modal" class="modal inmodal fade" data-keyboard=false data-backdrop="static"></div>
{{--@endsection--}}



{{--@section('before-scripts-end')--}}

{{--@stop--}}


{{--@section('after-scripts-end')--}}

{{--@stop--}}



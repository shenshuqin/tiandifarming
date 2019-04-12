@extends('backend::layouts.app')

@section('title',$title = '控制台')

@section('breadcrumb')
    <li class="active">仪表盘</li>
@endsection

@section('content')


    <div class="row">
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">产品信息</div>
                </div>
                <div class="panel-body">
                    <table class="table table-info">
                        <tr>
                            <td width="100">产品名称</td>
                            <td><a target="_blank" href="https://www.laracms.cn">天地农耕后台处理系统</a></td>
                        </tr>
                        <tr>
                            <td>核心框架</td>
                            <td>Laravel / {{ app()->version() }}</td>
                        </tr>
                        <tr>
                            <td>开发作者</td>
                            <td><a target="_blank" href="https://github.com/wanglelecc">胡劲 申书琴 钟沐希</a></td>
                        </tr>

                        <tr>
                            <td>系统时区</td>
                            <td>{{ config('app.timezone') }}</td>
                        </tr>
                        <tr>
                            <td>语言环境</td>
                            <td>{{ config('app.locale') }}</td>
                        </tr>
                        <tr>
                            <td>系统模式</td>
                            <td>{{ config('app.env') }}</td>
                        </tr>
                        <tr>
                            <td>系统URL</td>
                            <td>{{ config('app.url') }}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="panel-title">服务器信息</div>
                </div>
                <div class="panel-body">
                    <table class="table table-info">
                        <tr>
                            <td width="100">操作系统</td>
                            <td>{{ php_uname() }}</td>
                        </tr>
                        <tr>
                            <td>运行环境</td>
                            <td>{{ array_get($_SERVER, 'SERVER_SOFTWARE') }}</td>
                        </tr>
                        <tr>
                            <td>PHP版本</td>
                            <td>PHP / {{PHP_VERSION}}</td>
                        </tr>
                        <tr>
                            <td>缓存驱动</td>
                            <td>{{ config('cache.default') }}</td>
                        </tr>
                        <tr>
                            <td>会话驱动</td>
                            <td>{{ config('session.driver') }}</td>
                        </tr>
                        <tr>
                            <td>队列驱动</td>
                            <td>{{ config('queue.default') }}</td>
                        </tr>
                        <tr>
                            <td>文件系统</td>
                            <td>{{ config('filesystems.default') }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

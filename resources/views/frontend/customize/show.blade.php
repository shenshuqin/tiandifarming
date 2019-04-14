@extends('frontend.module.app')


@section('content')


    <div class="layui-container">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md8 content detail">

                <div style="margin-top: 50px" class="fly-panel detail-box" >
                    <h1>{{$getContent->title}}</h1>
                    {{--<div class="fly-detail-info">--}}
                        {{--<span class="layui-badge layui-bg-green fly-detail-column">{{$getContent->author}}</span>--}}
                        {{--<span class="layui-badge" style="background-color: #999;"></span>--}}
                        {{--<div class="fly-admin-box" data-id="22739"> </div>--}}
                        {{--<span class="fly-list-nums">--}}
                            {{--<a href="#comment"><i class="iconfont" title="回答">&#xe60c;</i> {{$getContent->reply_count}}</a>--}}
                            {{--<i class="iconfont" title="人气"></i> {{$getContent->views}}--}}
                        {{--</span>--}}
                    {{--</div>--}}
                    @if($getContent->description)
                        <div class="detail-about">
                            {{ $getContent->description }}
                        </div>
                    @endif
                    <div class="detail-body layui-text photos">
                        {!!$getContent->content!!}
                    </div>
                </div>



            </div>

            {{--<div class="layui-col-md4">--}}
            {{--@include('frontend::layouts._side')--}}
            {{--</div>--}}

        </div>
    </div>

@endsection



@section('scripts')
    <script>
        $(".form-reply-delete").click(function(){

            var tUrl = $(this).attr('data-url');

            layer.confirm('确认删除吗？', {
                btn: ['确认', '取消']
            }, function(index){
                $("#delete-reply-form").attr("action",tUrl).submit();
                console.log(tUrl);
                layer.close(index);
                return false;
            }, function(index){
                layer.close(index);
                return true;
            });

            return false;
        });
    </script>
@endsection
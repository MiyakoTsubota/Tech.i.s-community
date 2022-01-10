@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/chat.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
@stop

 <!-- タスク一覧表示 -->
@if (count($chats) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Current Chats
    </div>
 
    <div class="panel-body">
        <table class="table table-striped chat-table">
 
            <!-- テーブルヘッダ -->
            <thead>
                <th>Chat</th>
                <th>&nbsp;</th>
            </thead>
 
            <!-- テーブル本体 -->
            <tbody>
                @foreach ($chats as $chat)
                <tr>
                    <!-- チャット名 -->
                    <td class="table-text">
                        <div>{{ $chat->name }}</div>
                    </td>

                    <!-- 編集ボタン -->
                    
                    <td>
                        <!-- 削除ボタン -->
                        <form action="{{ url('chat/'.$chat->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-chat-{{ $chat->id }}" class="btn btn-danger" style="align:right;">
                                <i class="fa fa-btn fa-trash"></i>削除
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

<!-- チャット登録用パネル… -->
<div class="panel-body">
    <!-- バリデーションエラーの表示 -->
    @include('common.errors')

    <!-- 新チャットフォーム -->
    <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333; border-radius: 10px;">
    <form action="{{ url('chat') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- チャット名 -->
        <div class="form-group"> 
            <label for="chat-name" class="col-sm-3 control-label">Chat</label>
        </div>

        <div class="form-group-text">
            <div class="col-sm-6">
                <input type="text" name="name" id="chat-name" class="form-control" placeholder="メッセージ">
            </div>
        <!-- タスク追加ボタン -->
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-block btn-info" style="width:150px;">
                    <i class="fa fa-plus"></i>チャットを投稿
                </button>
            </div>
        </div>
    </form>
</div>
</div>
@endsection

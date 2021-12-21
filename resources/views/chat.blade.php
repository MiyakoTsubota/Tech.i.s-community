@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/chat.css') }}">
<script src="{{ asset('js/app.js') }}"></script>
@stop

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<table class="table mb-5">
  <thead class="thead-dark">
    <tr>
      <th>Chat</th>
    </tr>
  </thead>
</table>

<!-- チャット一覧エリア -->

<div class="chat-list">
  <div class="tweet">
    <div class="user">
        <a href="profile.php?user_id=1">
            <img src="" alt="">
        </a>
    </div>
    <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #333333;">
    <div class="content">
        <div class="name">
            <a href="profile.php?user_id=1">
                <span class="nickname">太郎</span>
                <span class="user-name">@taro ・23日前</span>
            </a>
        </div>
        <p>今プログラミングをしています</p>
    </div>
  </div>
  <div class="tweet">
      <div class="user">
          <a href="">
              <img src="" alt="">
          </a>
      </div>
      </div>

      <div style="padding: 10px; margin-bottom: 10px; border: 1px solid #E9E9E9; background-color;">
      <div class="content">
          <div class="name">
              <a href="profile.php?user_id=2">
                  <span class="nickname">次郎</span>
                  <span class="user-name">@jiro ・24日前</span>
              </a>
          </div>
          <p>コワーキングスペースをオープンしました</p>
          <img src="" alt="" class="post-image">
      </div>
  </div>
  <div class="tweet">
      <div class="user">
          <a href="profile.php?user_id=2">
              <img src="" alt="">
          </a>
      </div>
      </div>

<div class="form-group">
    <form action="/chat" method="POST">
    <input class="form-control" type="text" rows="3" placeholder="メッセージ" maxlength="300" id="text">
    <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
      <button type="submit" class="btn btn-block btn-info">チャットを投稿</button>
    </form>
</div>






</html>
@endsection

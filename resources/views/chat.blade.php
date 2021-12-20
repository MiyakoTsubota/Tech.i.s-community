@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

チャット画面
<table class="table mb-5">
  <thead class="thead-dark">
    <tr>
      <th>Chat</th>
    </tr>
  </thead>
</table>

<!-- つぶやき一覧エリア -->
<div class="tweet-list">
<div class="tweet">
  <div class="user">
      <a href="profile.php?user_id=1">
          <img src="../Views/img_uploaded/user/sample-person.jpg" alt="">
      </a>
  </div>
  <div class="content">
      <div class="name">
          <a href="profile.php?user_id=1">
              <span class="nickname">太郎</span>
              <span class="user-name">@taro ・23日前</span>
          </a>
      </div>
      <p>今プログラミングをしています。</p>
  </div>
</div>
<div class="tweet">
    <div class="user">
        <a href="profile.php?user_id=2">
            <img src="../Views/img/icon-default-user.svg" alt="">
        </a>
    </div>
    <div class="content">
        <div class="name">
            <a href="profile.php?user_id=2">
                <span class="nickname">次郎</span>
                <span class="user-name">@jiro ・24日前</span>
            </a>
        </div>
        <p>コワーキングスペースをオープンしました</p>
        <img src="../Views/img_uploaded/tweet/sample-post.jpg" alt="" class="post-image">
    </div>
</div>




<footer style="position: fixed;bottom: 0; width: 90%;background-color: white;">
  <form action="" method="POST">
    <textarea name="message" placeholder="メッセージ" maxlength="300"></textarea>
    <div class="file">
      <input type="file" name="image" class="">
    </div>
    <button type="submit" class="btn btn-block btn-info">チャットを投稿</button>
  </form>
</footer>



@endsection

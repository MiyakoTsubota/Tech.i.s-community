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
  <tbody>
    <tr>
      <td><span style="color:gray">ユーザーネーム</span><br><p>テキスト</P></td>
    </tr>
    <td>チャットチャット</td>
  </tbody>
</table>

<footer style="position: fixed;bottom: 0; width: 90%;background-color: white;">
  <form action="" method="POST">
    <div class="form-group">
    </div>
    <button type="submit" class="btn btn-outline-dark my-lg-4 my-4">チャットを投稿</button>
  </form>
</footer>



@endsection

@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

退会完了画面

<body>  
    <div class="withdrawal-comment">
        <div style="text-align: center;">
            <p>退会手続きが完了しました。<br>ご利用ありがとうございました。</p>
            <p></p>
        </div>
        <div style="text-align: center;">
            <button type="submit" class="btn btn-block btn-info" onclick="location.href='/home'">退会する</button>
        </div>
    </div>
</body>
@endsection
@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

退会画面
<!-- form start -->
<div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">ID</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <!-- textarea -->
                        <div class="form-group">
                            <label>退会理由</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-block btn-info" onclick="location.href='/withdrawal_completion'">退会する</button>
                </div>
</div>
@endsection
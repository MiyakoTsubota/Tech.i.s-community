@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

プロフィール編集画面

<div class="card-body">
                <div class="user">
                    <img src="" alt="">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">プロフィール画面</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">画像を選択してください</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">名前</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="テック太郎">
                </div>
                <div class="form-group">
                  <label>生年月日</label>
                    <div class="input-group date" id="birthday" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#birthday">
                        <div class="input-group-append" data-target="#birthday" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- radio -->
                    <label for="radioPrimary3">性別</label>
                    <div class="form-group clearfix">
                    <label>男</label>
                      <div class="icheck-primary d-inline">
                        <input type="radio" id="radioPrimary1" name="r1" checked="">
                        <label for="radioPrimary1">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                      <label>女</label>
                        <input type="radio" id="radioPrimary2" name="r1">
                        <label for="radioPrimary2">
                        </label>
                      </div>
                      <div class="icheck-primary d-inline">
                      <label>その他</label>
                        <input type="radio" id="radioPrimary3" name="r1">
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="self-introduction">自己紹介コメント</label>
                    <textarea class="form-control" rows="3" placeholder="300字以内"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">パスワード変更</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Tech.i.s123">
                </div>
                <div style="text-align: center;">
                    <button type="submit" class="btn btn-block btn-info" onclick="location.href='/home'">保存する</button>
                </div>
</div>



@endsection

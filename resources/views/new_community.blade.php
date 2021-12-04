@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<body>
    <div class="card-body">
                    <div class="form-group">
                        <label for="community_name">コミュニティー名</label>
                        <input type="text" class="form-control" id="community_name" placeholder="コミュニティー名">
                    </div>
                    <div class="form-group">
                        <label for="host_id">ホストID</label>
                        <input type="e-mail" class="form-control" id="host_id" placeholder="ユーザーID、例）techis132">
                    </div>
                    <div class="form-group">
                        <label for="community-image">画像</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="community-image">
                                <label class="custom-file-label" for="exampleInputFile">Choose image</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="community-explanation">説明</label>
                            <textarea class="form-control" rows="3" placeholder="コミュニティー説明欄"></textarea>
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button type="submit" class="btn btn-block btn-info">新規作成</button>
                    </div>
    </div>
</body>
@endsection
@extends('adminlte::page')
@section('content')


<div class="row">
    <div class="col-md-10 mt-6">
        <div class="card-body">
            <h1 class="mt4">コミュニティー新規作成</h1>
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="community_name">コミュニティ名</label>
                    <input type="text" name="community_name" class="form-control" id="community_name" placeholder="コミュニティ名">
                </div>

                <div class="form-group">
                    <label for="host_id">ホストID</label>
                    <input type="text" name="host_id" class="form-control" id="host_id" placeholder="ユーザーID、例）techis132">
                </div>

                <div class="form-group">
                    <label for="image">画像 </label>
                    <div class="col-md-6">
                        <input id="image" type="file" name="image">
                    </div>
                </div>

                <div class="form-group">
                    <label for="body">説明</label>
                    <textarea name="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-success">新規作成</button>
            </form>
        </div>
    </div>
</div>

@endsection
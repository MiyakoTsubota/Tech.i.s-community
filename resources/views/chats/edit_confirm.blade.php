


<form action="" method="POST" class="form-horizontal">
    {{ csrf_field() }}
    <input type="hidden" name="name" value="{{$name}}">
    <input type="hidden" name="phone" value="{{$phone}}">
    <input type="hidden" name="email" value="{{$email}}">

    <div class="row">
        <label class="col-sm-4 control-label">お名前</label>
        <div class="col-sm-8">{{$name}}</div>
    </div>

    <div class="row" style="margin-top: 30px;">
        <div class="col-sm-offset-4 col-sm-8">
            <input type="submit" name="button1" value="登録" class="btn btn-primary btn-wide" />
        </div>
    </div>
</form>


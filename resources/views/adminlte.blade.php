@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'Dashboard')

<!-- ページの見出しを入力 -->
@section('content_header')
<!-- cssの呼び出し -->
<link href="css/app.css" rel="stylesheet">
<body>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-black">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">TECH.I.S Community</h1>
            <p class="lead fw-normal">さっそくコミュニティサイトを作ろう</p>
            <a class="btn btn-outline-secondary" href="/new_community">作成する</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</body>
@stop

<!-- ページの内容を入力 -->
@section('content')
<h2>コミュニティ一覧</h2>
<ul class="grid"> 
    <li class="sample">
        <img src="images/sea.jpg" alt="海" />
        <div class="mask">
            <div class="caption">きれいな海や！</div>
        </div>
    </li>
    <li class="sample">
        <img src="images/sea.jpg" alt="海" />
        <div class="mask">
            <div class="caption">きれいな海や！</div>
        </div>
    </li>
    <li class="sample">
        <img src="images/sea.jpg" alt="海" />
        <div class="mask">
            <div class="caption">きれいな海や！</div>
        </div>
    </li>
</ul>


@stop

<!-- 読み込ませるCSSを入力 -->
@section('css')
    {{-- ページごとCSSの指定
    <link rel="stylesheet" href="/css/admin_custom.css">
    --}}
@stop

<!-- 読み込ませるJSを入力 -->
@section('js')
    <script> console.log('Hi!'); </script>
@stop

{{-- Footer --}}
@section('footer')
TECH.I.S Community
@stop
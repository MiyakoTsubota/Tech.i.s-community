@extends('adminlte::page')

<!-- ページタイトルを入力 -->
@section('title', 'HOME')

@section('css')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<!-- ページの見出しを入力 -->
@section('content_header')
<body>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-black">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">TECH.I.S Community</h1>
            <p class="lead fw-normal">さっそくコミュニティサイトを作ろう</p>
            <a class="btn btn-outline-secondary" href="/chats">作成する</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
</body>
@stop

<!-- ページの内容を入力 -->
@section('content')
<div class="d-none">
<h3 class="text-center">コミュニティ一覧</h3>
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

<!-- bodyのclassは上下左右中央寄せにするために付与しています -->
<body class="d-flex align-items-center vh-100 justify-content-center">
	<nav aria-label="Page navigation">
		<ul class="pagination justify-content-center">
			<li class="page-item"><a class="page-link" href="#">Previous</a></li>
			<li class="page-item"><a class="page-link" href="#">1</a></li>
			<li class="page-item"><a class="page-link" href="#">2</a></li>
			<li class="page-item"><a class="page-link" href="#">3</a></li>
			<li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul>
	</nav>
</div>
</body>




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
<p style="text-align:center">TECH.I.S Community</p>
@stop
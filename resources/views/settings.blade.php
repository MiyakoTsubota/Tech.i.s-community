@extends('adminlte::page')
@section('content')

@section('css')
<link rel="stylesheet" href="{{ asset('css/settings.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@stop

@section('title', '設定')
<body>
<div class="container">
                <div class="profile">
                    <div>                    
                        <div class="sub-title">プロフィール</div>
                    </div>
                    <div class="prf_link">
                        <a class="ah" href="profile_edit"><h7>プロフィールを編集する</h7></a>
                    </div>
                    <div class="prf1">
                        <h7>プロフィールを公開する</h7>
                    </div>
                    <div class="switchArea_1">
                        <input type="checkbox" id="switch1">
                        <label for="switch1"><span></span></label>
                        <div id="swImg"></div>
                    </div>
                </div>

                <div class="notification">
                        <div>
                            <div class="sub-title">通知</div>
                        </div>
                        <div class="ntf1">
                            <h7>通知音</h7>
                        </div>
                        <div class="switchArea_2">
                            <input type="checkbox" id="switch2">
                            <label for="switch2"><span></span></label>
                            <div id="swImg"></div>
                        </div>
                        <div class="ntf2">
                            <h7>非通知にする時間</h7>
                        </div>
                        <div class="drop-down">
                            <select id="drop-down" name="drop-down">
                                <option value="time" selected>21:00</option>
                                <option value="time">22:00</option>
                                <option value="time">23:00</option>
                                <option value="time">00:00</option>
                                <option value="time">01:00</option>
                                <option value="time">02:00</option>
                            </select>
                            〜
                            <select id="drop-down" name="drop-down">
                                <option value="time">03:00</option>
                                <option value="time">04:00</option>
                                <option value="time">05:00</option>
                                <option value="time">06:00</option>
                                <option value="time" selected>07:00</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="delete">
                    <a class="ah" href="/withdrawal"><h7>退会する</h7></a>
                </div>
</div>
</body>
@stop

@section('js')
@stop
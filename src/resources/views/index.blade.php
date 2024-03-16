@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('nav')
<nav class="header-nav">
    <ul class="header-nav-list">
        <li class="header-nav-item">
            <a href="/">ホーム</a>
        </li>
        <li class="header-nav-item">
            <a href="/attendance">日付一覧</a>
        </li>
        <li class="header-nav-item">
            <form class="form" action="/logout" method="post">
                @csrf
                <button class="logout">ログアウト</button>
            </form>
        </li>
    </ul>
</nav>
@endsection

@section('content')
<div class="user__content">
    <div class="user__heading">
        <p class ="user__heading-text">
        {{ $user->name }}さんお疲れ様です！
        </p>
    </div>
    <div class="user__stamp">
        <div class ="works">
            <form class="start" action="/start" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="start"  value="{{ \Carbon\Carbon::now() }}">
                <button class="start-button" type="submit">勤務開始</button>
            </form>
            <form class="end" action="/end" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $user->id }}">
                <input type="hidden" name="end"  value="{{ \Carbon\Carbon::now() }}">
                <button class="end-button" type="submit">勤務終了</button>
            </form>
        </div>
        <div class="breaks">
            <form class="in" action="/breakIn" method="post">
                @csrf
                <input type="hidden" name="work_id" value="{{ $work_id??'' }}">
                <input type="hidden" name="break_in" value="{{ \Carbon\Carbon::now() }}">
                <button class="in-button" type="submit" >休憩開始</button>
            </form>
            <form class="out" action="/breakOut" method="post">
                @csrf
                <input type="hidden" name="work_id" value="{{ $work_id??'' }}">
                <input type="hidden" name="break_out" value="{{ \Carbon\Carbon::now() }}">
                <button class="out-button" type="submit">休憩終了</button>
            </form>
        </div>
    </div>
</div>
@endsection
</body>
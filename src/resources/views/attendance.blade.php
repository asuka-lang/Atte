@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attendance.css') }}" />
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
<div class="attendance__content">
    <div class="attendance__heading">
        <div class="date">
            <form class="preview" action="/preview" method="get">
                @csrf
                <button class="yesterday" type="submit">&lt;</button>
            </form>
                <p class="today">{{$date->format('Y-m-d')}}</p>
            <form class="next" action="/next" method="get">
                @csrf
                <button class="tomorrow" type="submit">&gt;</button>
            </form>
        </div>
    </div>
    <div class="attendance_table">
        <div class="table__inner">
            <table>
                <tr>
                    <th>名前</th>
                    <th>勤務開始</th>
                    <th>勤務終了</th>
                    <th>休憩時間</th>
                    <th>勤務時間</th>
                </tr>
                @foreach($works as $work)
                <tr>
                    <td>{{$work['user']['name']}}</td>
                    <td>{{substr($work['start'],-8,8)}}</td>
                    <td>{{substr($work['end'],-8,8) }}</td>
                    <td>{{ $work['breaktime'] }}</td>
                    <td>{{ $work->getDetail() }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
</body>
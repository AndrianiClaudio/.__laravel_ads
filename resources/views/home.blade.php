@extends('layouts.app')

@section('documentTitle')
    Home
@endsection

@section('content')
    <nav>
        <h1>home.blade.php</h1>
        <ul>
            <li>
                <a href="/cookie">Cookie</a>
            </li>
            <li>
                <a href="/session">Session</a>
            </li>
        </ul>
    </nav>

    @yield('extraContent')
    <div id="app"></div>
@endsection

@extends('layouts.app')
@section('content')
    <div style="margin-left: 2em">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/users">Пользователи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/reviews">Отзывы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/coaches">Тренеры</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/gyms">Скалодромы</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    @yield('admin')
@endsection

@extends('layouts.app')
@section('content')
    @include('success')
    @if(Auth::user()->role_id == 4)
    <div class="text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn btn-outline-info" href="/admin/content">Контент</a>
            <a class="btn btn-outline-info" href="/admin">Заявки</a>
        </div>
    </div>
    @endif
    @yield('admin-content')
@endsection

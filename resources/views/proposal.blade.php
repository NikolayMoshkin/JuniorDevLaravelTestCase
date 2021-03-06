@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="serverResponseSuccess" class="alert alert-success text-center" style="display: none">
        </div>
        <div id="serverResponseError" class="alert alert-danger text-center" style="display: none">
        </div>
        <div>
            <h2>Оставьте заявку на мероприятие {{$proposal_type}}</h2>
        </div>
        <form class="needs-validation" id="requestForm" enctype="multipart/form-data">
            @csrf
            @include('form')
            <input type="hidden" name='proposal_type' value="{{$proposal_type}}">
        </form>
    </div>
@endsection

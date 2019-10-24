@extends('layouts.app')
@section('content')
    <div class="container">
        <div id="serverResponseSuccess" class="alert alert-success text-center" style="display: none">
        </div>
        <div id="serverResponseError" class="alert alert-danger text-center" style="display: none">
        </div>
        <div>
            <h2>Оставьте заявку A</h2>
        </div>
        <form class="needs-validation" id="requestForm" enctype="multipart/form-data" method="POST" action="/proposal">
            @csrf
            @include('form')
            <input type="hidden" name='proposal_type' value="1">
        </form>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <div class="container">
        </div>
        <div class="jumbotron">
            <h1 class="display-4">Главная страница</h1>
            <p class="lead">{{$content->text}}</p>
            <hr class="my-4">
            <div class="text-center">
                <a href="storage/images/main/{{$content->img_1}}" data-fancybox data-caption="" data-width="600">
                    <img src="storage/images/main/{{$content->img_1}}" alt="" width="150px">
                </a>
                <a href="storage/images/main/{{$content->img_2}}" data-fancybox data-caption="" data-width="600">
                    <img src="storage/images/main/{{$content->img_2}}" alt="" width="150px">
                </a>
                <a href="storage/images/main/{{$content->img_3}}" data-fancybox data-caption="" data-width="600">
                    <img src="storage/images/main/{{$content->img_3}}" alt="" width="150px">
                </a>
            </div>
            <div class="row">
                <div class="btn_container"><a class="btn btn-primary btn-lg" href="/proposalA" role="button">Заявка A</a>
                </div>
                <div class="btn_container"><a class="btn btn-success btn-lg" href="/proposalB" role="button">Заявка B</a>
                </div>
            </div>
        </div>
    </div>
@endsection

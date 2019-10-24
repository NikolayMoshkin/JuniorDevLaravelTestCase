@extends('layouts.admin')
@section('admin-content')
    <div class="container">
        <h4>Редактирование контента</h4>
        <form action="/admin/content/update" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="text">Текст</label>
                <textarea class="form-control" name="text" id="text" cols="30" rows="10">{{$content->text}}</textarea>
            </div>
            <div class="form-group">
                <label>Изображение 1</label>
                <div class="row">
                    <div class="col-3">
                        <img class='content_img' src="/storage/images/main/{{$content->img_1}}" width="150">
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="img_1" id="img_1">
                            <label class="custom-file-label" for="img_1">Выберите файл</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Изображение 2</label>
                <div class="row">
                    <div class="col-3">
                        <img class='content_img' src="/storage/images/main/{{$content->img_2}}" width="150">
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="img_2" id="img_2">
                            <label class="custom-file-label" for="img_2">Выберите файл</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Изображение 3</label>
                <div class="row">
                    <div class="col-3">
                        <img class='content_img' src="/storage/images/main/{{$content->img_3}}" width="150">
                    </div>
                    <div class="col">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="img_3" id="img_3">
                            <label class="custom-file-label" for="img_3">Выберите файл</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" id='content_upd_btn' class="btn btn-primary" value="Сохранить">
        </form>
        @include('errors')
    </div>
@endsection

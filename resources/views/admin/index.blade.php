@extends('layouts.admin')
@section('admin-content')
    <div class="container">
        <h2 class="text-center">Панель администратора: {{$role}}</h2>
        <h4>Заявки</h4>
        <div class="col-md-11 justify-content-center">
            <table class="table">
                <thead class='thead-light'>
                <tr>
                    @if($isSuperAdmin)
                        <th>Действия</th>
                    @endif
                    <th>ID заявки</th>
                    <th>Создана</th>
                    <th>Тип мероприятия</th>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Телефон</th>
                    <th>Email</th>
                    <th>Фото</th>
                    @if($isSuperAdmin)
                        <th>ip</th>
                        <th>utm</th>
                    @endif
                </tr>
                </thead>
                <tbody>
                @foreach ($proposals as $proposal)
                    <tr>
                        @if($isSuperAdmin)
                            <td>
                                <form action="/proposal/{{$proposal->id}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type='submit' class="btn btn-outline-danger" value="delete">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </form>
                            </td>
                        @endif
                        <td>{{$proposal->id}}</td>
                        <td>{{$proposal->created_at}}</td>
                        <td>{{$proposal->proposal_type}}</td>
                        <td>{{$proposal->name}}</td>
                        <td>{{$proposal->surname}}</td>
                        <td>{{$proposal->phone}}</td>
                        <td>{{$proposal->email}}</td>
                        <td><img src="/storage/images/upload/{{$proposal->img}}" alt="" width="50px"></td>
                        @if($isSuperAdmin)
                            <td>{{$proposal->ip}}</td>
                            <td style="width: 5%">{{$proposal->utm}}</td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">{{$proposals->links()}}</div>
        </div>

    </div>
@endsection

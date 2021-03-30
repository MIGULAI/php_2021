@extends('layout')

@section('title') Login Form @endsection

@section('main_content')
    <h1>Login Form</h1>

    @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form method="post" action="/login/check">
        @csrf
        <input type="text" name="name" id="name" placeholder="Введите Login" class="form-control"><br>
        <input type="password" name="password" id="password" placeholder="Введите Пароль" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection

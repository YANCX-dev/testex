@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            @if($age > 18)
            <div class="rounded bg-light mt-5">
                <p class="fs-5 fw-bold text-center">Акция для всех кто старше 18!</p>
            </div>
            @else
                <div class="rounded bg-light mt-5">
                    <p class="fs-5 fw-bold text-center">Акция для всех кто моложе 18!</p>
                </div>
            @endif
            <div class="col-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Фамилия</th>
                        <th scope="col">Дата рождения</th>
                        <th scope="col">E-mail</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->surname}}</td>
{{--                        <td>{{$user->birthDate}}</td>--}}
                        <td>{{$user->email}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
